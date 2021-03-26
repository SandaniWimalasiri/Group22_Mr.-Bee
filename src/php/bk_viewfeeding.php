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
<p>Feeding Records</p>
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


        
$sql = "SELECT FeedingRecNo,beehiveno,fdate,ftime,feedingtype,famount,unit FROM feeding where userID='".$_SESSION['userid']."' and is_deleted=0";
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
        echo $row['famount']." ".$row['unit'];
        echo '</td>';
        echo "<td style='border-style:hidden; border-left:1px solid black'><a href ='bk_updatefeeding.php?FeedingRecNo=".$row['FeedingRecNo']."' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> update </a> </td>" ;
		echo "<td style='border-style:hidden'><a href ='bk_deletefeeding.php?FeedingRecNo=".$row['FeedingRecNo']." ' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> delete </a> </td>" ;	
        echo '</td>';
        echo '</tr>';

		
        }?>

            </table></center>
<br/>
        <br/>
        <br/>
        <td style='border-style:hidden; border-left:1px solid black'><a href ='bk_viewdelfeeding.php' style='background-color: #2b3528; color: white; text-decoration: none; padding:4px'> View Deleted Records </a> </td>
            </br>
    </br>
            <form  action="bk_feeding.php" method="post" >
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>
</div>
</div>	



	</body>
</html>

