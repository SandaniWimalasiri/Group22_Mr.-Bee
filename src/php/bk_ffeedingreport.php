<?php require_once('../../config/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>feeding report</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">



  


<div class="bhivecontainer">

<br/><br/>
			

           <center> <table >
                <tr style="background-color:#547454">
    
                <th>Feeding Record no</th>
                <th>Feeding date</th>
                <th>Feeding time</th>
                <th>Feeding type</th>
                <th>Feeding amount</th>
                
                </tr>

			<?php
if(isset($_GET['beehiveno2'])){
$id = isset($_POST['id']) ? $_POST['id'] : ''; 

        
$sql = "SELECT FeedingRecNo,fdate,ftime,feedingtype,famount FROM feeding where beehiveno='".$_GET['beehiveno2']."' and userID='".$_SESSION['userid']."'";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

		while($row=mysqli_fetch_assoc($result)){
            
            echo '<tr >';
            echo '<td>';
        echo $row['FeedingRecNo'];
        echo '</td>';
            echo '<td>';
        echo $row['fdate'];
        echo '</td>';
        echo '<td>';
        echo $row['ftime'];
        echo '</td>';
        echo '<td>';
        echo $row['feedingtype'];
        echo '</td>';
        echo '<td>';
        echo $row['famount'];
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

