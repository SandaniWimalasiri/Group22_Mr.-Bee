<?php require_once('../db_connection/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>Full beehive report</title>
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
                <th>Beehive Record No</th>
                <th>Start date</th>
                <th>Inspection date</th>
                <th>Inspection time</th>
                <th>Active status and temperament of bees</th>
                <th>Weight of beehive</th>
                <th>Weather status</th>
                <th>Changes made to beehive</th>
                <th>Number of frames</th>
                <th>Signs of diseases</th>
                <th>Treatments</th>
                <th>Status of queen bee</th>
                <th>Number of bee colonies in beehive</th>
                </tr>


			<?php
if(isset($_GET['beehiveno'])){


        
$sql = "SELECT BeehiveRecNo,sdate,idate,itime,actstatus,wbeehive,wstatus,cbeehive,noframes,disease,treatment,sqbee,bcolony FROM beehive WHERE beehiveno='".$_GET['beehiveno']."'  and userID='".$_SESSION['userid']."'";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

		while($row=mysqli_fetch_assoc($result)){
        echo '<tr >';
        echo '<td>';
        echo $row['BeehiveRecNo'];
        echo '</td>';
        echo '<td>';
        echo $row['sdate'];
        echo '</td>';
        echo '<td>';
        echo $row['idate'];
        echo '</td>';
        echo '<td>';
        echo $row['itime'];
        echo '</td>';
        echo '<td>';
        echo $row['actstatus'];
        echo '</td>';
        echo '<td>';
        echo $row['wbeehive']." Kg";
        echo '</td>';
        echo '<td>';
        echo $row['wstatus'];
        echo '</td>';
        echo '<td>';
        echo $row['cbeehive'];
        echo '</td>';
        echo '<td>';
        echo $row['noframes'];
        echo '</td>';
        echo '<td>';
        echo $row['disease'];
        echo '</td>';
        echo '<td>';
        echo $row['treatment'];
        echo '</td>';
        echo '<td>';
        echo $row['sqbee'];
        echo '</td>';
        echo '<td>';
        echo $row['bcolony'];
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

