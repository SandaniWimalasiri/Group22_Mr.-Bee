<?php require_once('../../config/connect.php'); 
session_start();




		?>

<html>

	<head>	
		<title>Full Feeding Report</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body>
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');?>
<div class="main">



  


<div class="bhivecontainer">
<p>Full Feeding Report</p>
<br/><br/><br/>

	

           <center> <table >
                <tr style="background-color:#547454">
    
                <th>Feeding Record No</th>
                <th>Date</th>
                <th>Feeding Date</th>
                <th>Feeding Time</th>
                <th>Feeding Type</th>
                <th>Feeding Amount</th>
                
                </tr>
               

			<?php
if(isset($_SESSION['beehiveno'])){

    $sql = "SELECT FeedingRecNo,date,fdate,ftime,feedingtype,famount,unit FROM feeding WHERE beehiveno='".$_SESSION['beehiveno']."' AND userID='".$_SESSION['userid']."' AND is_deleted=0 ";
    mysqli_query($connection, $sql);
    $result = mysqli_query($connection,$sql);


		while($row=mysqli_fetch_assoc($result)){
            
            echo '<tr >';
            echo '<td>';
        echo $row['FeedingRecNo'];
        echo '</td>';
        echo '<td>';    
        echo $row['date'];
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
    
  

        echo '<form action="bk_mfeedingreport.php"  method="post" >';
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
        echo '<div class="c2"><input type="submit" value="View Monthly Report >>" name="enter" ></div></div></form></br></br></br>';
    


    
    
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

