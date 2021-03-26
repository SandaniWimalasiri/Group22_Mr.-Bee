<?php require_once('../../config/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>harvest report</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">




<div class="bhivecontainer">
<p>Harvest Records</p>
<br/> 
	<center>		
     <table >
                <tr style="background-color:#547454">
    
                <th>Harvesting Record no</th>
                <th>Beehive No</th>
                <th>Harvesting date</th>
                <th>Harvesting time</th>
                <th>Harvested product type</th>
                <th>Harvested amount</th>
                
                </tr>

            <?php
            
            


        
$sql = "SELECT HarvestRecNo,beehiveno,hdate,htime,producttype,amount,unit FROM harvest where userID='".$_SESSION['userid']."' and is_deleted=0";
mysqli_query($connection, $sql);
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
        echo $row['amount']." ".$row['unit'];
        echo '</td>';
        
        echo "<td style='border-style:hidden; border-left:1px solid black'><a href ='bk_updateharvest.php?HarvestRecNo=".$row['HarvestRecNo']."' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> update </a> </td>" ;
		echo "<td style='border-style:hidden'><a href ='bk_deleteharvest.php?HarvestRecNo=".$row['HarvestRecNo']." ' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> delete </a> </td>" ;		

        echo '</tr>';
		
		}?>
     </table></center>

     <br/>
        <br/>
        <br/>
        <td style='border-style:hidden; border-left:1px solid black'><a href ='bk_viewdelharvest.php' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> View Deleted Records </a> </td>
    </br>
    <br/>
            <form  action="bk_harvest.php" method="post" >
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

