<?php require_once('../../config/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>View Harvest Deleted Records</title>
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
  <p>Harvest Deleted Records</p>
   <br/> </br></br>
	     <center>		
            <table >
           
                <tr style="background-color:#547454">
                <th>Harvesting Record No</th>
                <th>Beehive No</th>
                <th>Harvesting Date</th>
                <th>Harvesting Time</th>
                <th>Harvested Product Type</th>
                <th>Harvested Amount</th>
                
                </tr>
<?php
        
$sql = "SELECT HarvestRecNo,beehiveno,hdate,htime,producttype,amount FROM harvest where userID='".$_SESSION['userid']."' and is_deleted=1";
$result = mysqli_query($connection,$sql);

		while($row=mysqli_fetch_assoc($result)){
            
        echo '<tr >';
        echo '<td>';
        echo $row['HarvestRecNo'];
        echo '</td>';
        echo '<td>';
        echo $row['beehiveno'];
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
        echo "<td style='border-style:hidden; border-left:1px solid black'><a href ='bk_restoreharvest.php?HarvestRecNo=".$row['HarvestRecNo']."' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> Restore </a> </td>" ;
		echo "<td style='border-style:hidden'><a href ='bk_removeharvest.php?HarvestRecNo=".$row['HarvestRecNo']." ' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> Remove </a> </td>" ;		
        echo '</tr>';
		
        }?>
        

     </table></center>

     
    </br></br></br></br>

        <form  action="bk_viewharvest.php" method="post" >
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>

</div>
<br />
<br />


</div>	

	</body>
</html>

