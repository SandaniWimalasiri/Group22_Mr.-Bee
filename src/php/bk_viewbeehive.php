<?php require_once('../../config/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>View Beehive Records</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">



  <div class="bhivecontainer" style="padding: 20px 30px 20px 30px">
  <p>Beehive Records</p>

       <br/>   
       <br/>   
       <br/>   
       <center><table ><tr style="background-color:#547454">
        <th>Beehive Record No</th>
        <th>Beehive No</th>
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
        <th>Number of Bee Colonies</th>
        </tr>

			<?php



        
$sql = "SELECT BeehiveRecNo,beehiveno,sdate,idate,itime,actstatus,temperament,wbeehive,unit,wstatus,cbeehive,noframes,disease,treatment,sqbee,bcolony FROM beehive WHERE  userID='".$_SESSION['userid']."' and is_deleted=0";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

		while($row=mysqli_fetch_assoc($result)){

 

        echo '<tr >';
        echo '<td>';
        echo $row['BeehiveRecNo'];
        echo '</td>';
        echo '<td>';
        echo $row['beehiveno'];
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
        echo "<td style='border-style:hidden; border-left:1px solid black'><a href ='bk_updatebeehive.php?BeehiveRecNo=".$row['BeehiveRecNo']."' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> Update </a> </td>" ;
		echo "<td style='border-style:hidden'><a href ='bk_deletebeehive.php?BeehiveRecNo=".$row['BeehiveRecNo']." ' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px' > Delete </a> </td>" ;	
        echo '</td>';
        echo '</tr>';

		
		}
?>

            </table></center>

        <br/>
        <br/>
        <br/></br>
        <form  action="bk_viewdelbeehive.php" method="post" >
        <div class="row"><div class="c1" style="width:840px">
        <input type="submit" value="View Deleted Records >>" name="back" >
        </div>
        </form>
            <form  action="beekeeperindex.php" method="post" >
        <div class="c2">
        <input type="submit" value="<< Back" name="back" style="width:90px">
        </div></div>
        </form>

    
</div>


</div>	



	</body>
</html>

