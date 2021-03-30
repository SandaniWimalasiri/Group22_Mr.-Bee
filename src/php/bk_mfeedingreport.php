<?php require_once('../../config/connect.php'); 
session_start();

		?>

<html>

	<head>	
		<title>Monthly Feeding Report</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">



  


<div class="bhivecontainer">
<p>Monthly Feeding Report</p>
<br/><br/><br/>

</form>		

           

			<?php


    
    	

    if(isset($_POST['enter'])){
   
    $sql = "SELECT FeedingRecNo,fdate,ftime,feedingtype,famount,unit FROM feeding WHERE beehiveno='".$_SESSION['beehiveno']."' AND userID='".$_SESSION['userid']."' AND is_deleted=0  AND MONTH(date)='".$_POST['mon']. "'";
    mysqli_query($connection, $sql);
    $result = mysqli_query($connection,$sql);

$count=mysqli_num_rows($result);
if($count>=1){

		while($row=mysqli_fetch_assoc($result)){

            echo '<center> <table ><tr style="background-color:#547454">';
    
            echo '    <th>Feeding Record No</th>';
            echo '    <th>Feeding Date</th>';
            echo '    <th>Feeding Time</th>';
            echo '    <th>Feeding Type</th>';
            echo '    <th>Feeding Amount</th></tr>';
                
                

            
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
        echo $row['famount']." ".$row['unit'];
        echo '</td>';

        echo '</tr>';
        
        
        
		
       }}
                else{

                        
                        echo "<center>RESULT NOT FOUND<center>";
                
                }}
?>
        
        

        

            </table></center>

            </br>
    </br>
            <form  action="bk_ffeedingreport.php" method="post" >
            
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>
</div>
</div>	



	</body>
</html>

