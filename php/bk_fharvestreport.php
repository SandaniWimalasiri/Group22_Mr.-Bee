<?php require_once('../db_connection/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>harvest report</title>
      <link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">




<div class="bhivecontainer">

	<center>		
     <table >
                <tr style="background-color:#547454">
    
                <th>Harvesting Record no</th>
                <th>Harvesting date</th>
                <th>Harvesting time</th>
                <th>Harvested product type</th>
                <th>Harvested amount</th>
                
                </tr>

            <?php
            
            
if(isset($_GET['beehiveno1'])){
$id = isset($_POST['id']) ? $_POST['id'] : ''; 

        
$sql = "SELECT HarvestRecNo,hdate,htime,producttype,amount FROM harvest where beehiveno='".$_GET['beehiveno1']."' and userID='".$_SESSION['userid']."'";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

		while($row=mysqli_fetch_assoc($result)){
            //echo '<tr style="background-color:white">';
            echo '<tr >';
            echo '<td>';
            echo $row['HarvestRecNo'];
            echo '</td>';
                echo '<td>';    
        echo $row['hdate'];
        echo '</td>';
        echo '<td>';
        echo $row['htime'];
        echo '</td>';
        echo '<td>';
        echo $row['producttype'];
        echo '</td>';
        echo '<td>';
        echo $row['amount'];
        echo '</td>';
        echo '</tr>';
		
		}}?>
     </table></center>


</br>
    </br>
            <form  action="bk_reports.php" method="post" >
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>


</div>	

</div>

	</body>
</html>

