<?php require_once('../../config/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>Full Beehive Report</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">



  <div class="bhivecontainer">
<p>Full Beehive Report</p>
            <br/><br/><br/>
     
           
            <center>
            <table >
                <tr style="background-color:#547454">
                <th>Beehive Record No</th>
                <th>Date</th>
                <th>Start Date</th>
                <th>Inspection Date</th>
                <th>Inspection Time</th>
                <th>Active Status</th>
                <th>Temperament</th>
                <th>Weight of Beehive</th>
                <th>Weather Status</th>
                <th>Changes Made to Beehive</th>
                <th>Number of Frames</th>
                <th>Signs of Diseases</th>
                <th>Treatments</th>
                <th>Status of Queen Bee</th>
                <th>Number of Bee Colonies in Beehive</th>
                </tr>


			<?php
if(isset($_SESSION['beehiveno'])){
        
        
$sql = "SELECT BeehiveRecNo,date,sdate,idate,itime,actstatus,wbeehive,temperament,wstatus,cbeehive,noframes,disease,treatment,sqbee,bcolony FROM beehive WHERE beehiveno='".$_SESSION['beehiveno']."'  and userID='".$_SESSION['userid']."' and is_deleted=0 ";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

		while($row=mysqli_fetch_assoc($result)){
        echo '<tr >';
        echo '<td>';
        echo $row['BeehiveRecNo'];
        echo '</td>';
        echo '<td>';    
        echo $row['date'];
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
        echo $row['temperament'];
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

		
                }}
                
                
                
                
                echo '<form action="bk_mbeehivereport.php"  method="post" >';
                echo '<div class="row">
                <div class="c1" style="width:300px"><select name="mon" style="width:250px" ><option value="00">Select Month</option>';
                echo '<option value="01">January</option>';
                echo '<option value="02">February</option>';
                echo '<option value="03">March</option>';
                echo '<option value="04">April</option>';
                echo '<option value="05">May</option>';
                echo '<option value="06">June</option>';
                echo '<option value="07">July</option>';
                echo '<option value="08">August</option>';
                echo '<option value="09">September</option>';
                echo '<option value="10">October</option>';
                echo '<option value="11">November</option>';
                echo '<option value="12">December</option>';
                echo '</select></div>';
                echo '<div class="c2"><input type="submit" value="View Monthly Report" name="enter" ></div></div></form></br></br></br>';

?>

            </table></center>

            </br>
    </br><br/><br/>
            <form  action="bk_reports.php" method="post" >
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>
</div>


</div>	



	</body>
</html>

