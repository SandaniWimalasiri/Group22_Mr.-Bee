<?php require_once('../../config/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>View Feeding Records</title>
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
   <p>Feeding Records</p>
     <br/><br/><br/>

			<center>

            <table >
                <tr style="background-color:#547454">
                <th>Feeding Record No</th>
                <th>Beehive No</th>
                <th>Feeding Date</th>
                <th>Feeding Time</th>
                <th>Feeding Type</th>
                <th>Feeding Amount</th>              
                </tr>

<?php
        
$sql = "SELECT FeedingRecNo,beehiveno,fdate,ftime,feedingtype,famount,unit FROM feeding where userID='".$_SESSION['userid']."' and is_deleted=0";
$result = mysqli_query($connection,$sql);

		while($row=mysqli_fetch_assoc($result)){
            
        echo '<tr >';
        echo '<td>';
        echo $row['FeedingRecNo'];
        echo '</td>';
        echo '<td>';
        echo $row['beehiveno'];
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
        echo $row['famount']." ".$row['unit'];
        echo '</td>';
        echo "<td style='border-style:hidden; border-left:1px solid black'><a href ='bk_updatefeeding.php?FeedingRecNo=".$row['FeedingRecNo']."' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> Update </a> </td>" ;
		echo "<td style='border-style:hidden'><a href ='bk_deletefeeding.php?FeedingRecNo=".$row['FeedingRecNo']." ' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> Delete </a> </td>" ;	
        echo '</td>';
        echo '</tr>';

		
        }
        
    ?>

        </table></center>
        <br/><br/><br/><br/>

        <form  action="bk_viewdelfeeding.php" method="post" >
        <div class="row"><div class="c1" style="width:849px">
        <input type="submit" value="View Deleted Records >>" name="back" >
        </div>
        </form>

        <form  action="bk_feeding.php" method="post" >
        <div class="c2">
        <input type="submit" value="<< Back" name="back" style="width:90px">
        </div>
         </div>
        </form>
</div>
</div>	

	</body>
</html>

