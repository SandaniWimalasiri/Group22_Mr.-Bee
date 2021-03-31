<?php 

require_once('../../config/connect.php'); 
session_start();
?>

<html>

	<head>	
	     <title>Monthly Beehive Report</title>
             <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
             <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
        </head>
        
	<body>
        <?php 
          include('bk_navbar.php');
          include('bk_sidenavbar.php');
        ?>

<div class="main">

  <div class="bhivecontainer">
        <p>Monthly Beehive Report</p>
            <br/><br/><br/>
     
           
        <center><table ><tr style="background-color:#547454">
        <th>Beehive Record No</th>
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

if(isset($_POST['enter'])){
       
$sql = "SELECT BeehiveRecNo,sdate,idate,itime,actstatus,wbeehive,wstatus,temperament,cbeehive,noframes,disease,treatment,sqbee,bcolony,unit FROM beehive WHERE beehiveno='".$_SESSION['beehiveno']."' AND userID='".$_SESSION['userid']."' AND is_deleted=0  AND MONTH(date)='".$_POST['mon']. "'";
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
        echo $row['temperament'];
        echo '</td>';
        echo '<td>';
        echo $row['wbeehive']." ".$row['unit'];
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
                

?>

            </table></center>

            </br></br><br/>

        <form  action="bk_fbeehivereport.php" method="post" >          
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>
   </div>
</div>	

	</body>
</html>

