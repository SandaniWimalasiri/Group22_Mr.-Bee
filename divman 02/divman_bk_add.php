<?php require_once("../../config/connect.php");
session_start(); ?>

<html>
    <head>
        
        <title>Bee Keeper Add</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/beekeeper_CRUD.css">

    </head>
    <body>
    <nav>
      <!--logo-->
      <a href="#" class="logo">Mr.<font color="#f4976c">Bee</font></a>
      
      <a href="divman.php#beekeeper" class="lang">Back</a>
    </nav>
    <section id="about">
        <div class="content"> 
        <h1 >Add new BeeKeeper</h1>
                        <form class="f1"  action="divman_bk_add.php" method="get">
                            
                            
                            <table class="div_man">
                            <tr>
                                <th><label>User ID</label></th>
                                <td><input type="text" name="userID" placeholder="Enter User ID" required ></td>
                            </tr> 
                            
                            <tr>
                                <th><label>User name</label></th>
                                <td><input type="text" name="userName" placeholder="Enter User Name" required></td>
                            </tr>
                            <tr>
                                <th><label>Full name</label></th>
                                <td><input type="text" name="fullName" placeholder="Enter Full Name" required></td>
                            </tr>
                            <tr>
                                <th><label>Address</label></th>
                                <td><input type="text" name="userAddress" placeholder="Enter the address" required></td>
                            </tr>
                            <tr>
                                <th><label>Email</label></th>
                                <td><input type="text" name="userEmail" placeholder="Enter Email Address" required></td>
                            </tr>
                            <tr>
                                <th><label>User Telephone</label></th>
                                <td><input type="text" name="userTele" placeholder="Enter Telephone Number" required></td>
                            </tr>
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="add" ><b>Add</b></button>
                       
                            <button class="btn6" type="submit" name="back" onclick="document.location='divman.php#beekeeper'"><b>Back</b></button>
                           
                        </form>

        </div>
      </section>  
    </body>
</html>
   <?php
        
        if(isset($_GET['add'])){
           //echo "Done";                                                                                                 
           
           
           $sql="INSERT INTO beekeeper (userID, userName, fullName, userAddress, userEmail, userTele) VALUES('".$_GET['userID']."','".$_GET['userName']."','".$_GET['fullName']."','".$_GET['userAddress']."','".$_GET['userEmail']."','".$_GET['userTele']."')";
           $result=mysqli_query($connection,$sql);
           //$result=$connection->query($sql);
           //print_r($result);
           if($result){
               //echo "Successful";
               header( 'Location: divman_bk_add.php ');
           }else{
               echo "failed";
           }
       }
                     
  
?>