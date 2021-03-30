<?php require_once('../../config/connect.php'); 
session_start();




		?>

<html>

	<head>	
		<title>View Monthly Harvest Report</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">



  


<div class="bhivecontainer">
<p>Monthly Harvest Report</p>
<br/><br/>

	

           
               

			<?php
if(isset($_POST['enter'])){

        $sql = "SELECT HarvestRecNo,hdate,htime,producttype,amount,unit FROM harvest where beehiveno='".$_SESSION['beehiveno']."' and userID='".$_SESSION['userid']."' and is_deleted=0 and MONTH(date)='".$_POST['mon']. "'";
    mysqli_query($connection, $sql);
    $result = mysqli_query($connection,$sql);

    $count=mysqli_num_rows($result);
if($count>=1){

        echo '<center> <table ><tr style="background-color:#547454">';
    
        echo '        <th>Harvesting Record No</th>';
        echo '        <th>Harvesting Date</th>';
        echo '        <th>Harvesting Time</th>';
        echo '        <th>Harvested Product Type</th>';
        echo '        <th>Harvested Amount</th></tr>';

    while($row=mysqli_fetch_assoc($result)){
        //echo '<tr style="background-color:white">';
        echo '<tr >';
        echo '<td>';
        echo $row['HarvestRecNo'];
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
    echo '</tr>';
            
    
}}
else{

        
        echo "<center>RESULT NOT FOUND<center>";

}}

		
        
  


    


    
    
    ?>
    
   
        

        

            </table></center>

            </br>
    </br><br/><br/>
            <form  action="bk_fharvestreport.php" method="post" >
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>
</div>
</div>	



	</body>
</html>

