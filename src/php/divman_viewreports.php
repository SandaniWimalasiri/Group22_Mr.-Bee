<?php require_once("../../config/connect.php");
?>
 <?php
session_start();

$userID = "";
//connect to db
//$db = mysqli_connect('localhost', 'root', '', 'userdb') or die("could not connect to database");

//sign up
if (isset($_POST['viewReport'])) {
	//receive all input values from the form
	$userID = mysqli_real_escape_string($connection, $_POST['userID']);
   // echo $userID;
	
}
?>





    <head>
        
        <title>Reports</title>
       
        <link rel="stylesheet" type="text/css" href="../../public/css/divman_reports.css">
        

    </head>
    <body>

        <nav>
      <!--logo-->
        <a href="#" class="logo">Mr.<font color="#f4976c">Bee</font></a>
        
      
        <a href="divman.php#reports" class="lang">Back</a>
        </nav>
        <section id="about">     
        
        <div class="main" id="hr">
        <div class="r-heading">
        <br/>
        <h1>Harvest Reports</h1>
        </div>
        <div class="main">


  
<div class="bhivecontainer">
 <br/><br/>

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
                    
                    $sql = "SELECT * FROM harvest WHERE userID = '$userID'";
                    
                    $query=mysqli_query($connection,$sql);

                   // verify_query($query);


                    while ($result = $query->fetch_assoc()) {
                    ?>
                    <tr>
                            <td><?php echo $result['HarvestRecNo'] ?></td>
                            <td><?php echo $result['beehiveno'] ?></td>
                            <td><?php echo $result['hdate'] ?></td>
                            <td><?php echo $result['htime'] ?></td>
                            <td><?php echo $result['producttype'] ?></td>
                            <td><?php echo $result['amount'] ?></td>
                            
                    </tr>
            
                    <?php
                    }
                    ?>

        </table>
        </center>
        </div>
        

        </section>
       

	</body>
</html>
