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
<p>Feeding Deleted Records</p>
 <br/>

			<center>

            <table >
                <tr style="background-color:#547454">
    
                <th>Feeding Record no</th>
                <th>Beehive No</th>
                <th>Feeding date</th>
                <th>Feeding time</th>
                <th>Feeding type</th>
                <th>Feeding amount</th>
                
                </tr>

			<?php


        
$sql = "SELECT FeedingRecNo,beehiveno,fdate,ftime,feedingtype,famount FROM feeding where userID='".$_SESSION['userid']."' and is_deleted=1";
mysqli_query($connection, $sql);
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
        echo $row['famount'];
        echo '</td>';
        echo "<td style='border-style:hidden; border-left:1px solid black'><a href ='bk_restorefeeding.php?FeedingRecNo=".$row['FeedingRecNo']."' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> Restore </a> </td>" ;
		echo "<td style='border-style:hidden'><a href ='bk_removefeeding.php?FeedingRecNo=".$row['FeedingRecNo']." ' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> Remove </a> </td>" ;	
        echo '</td>';
        echo '</tr>';

		
        }?>

            </table></center>

            </br>
    </br>
            <form  action="bk_viewfeeding.php" method="post" >
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>
</div>
</div>	



	</body>
</html>

