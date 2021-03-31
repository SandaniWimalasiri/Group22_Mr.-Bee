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
                            <input type="hidden" name='div_id' value="<?php echo $_GET['id']; ?>"/>
                        
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
           
           
           $sql="INSERT INTO beekeeper ( userName, fullName, userAddress, userEmail, userTele,div_id) VALUES('".$_GET['userName']."','".$_GET['fullName']."','".$_GET['userAddress']."','".$_GET['userEmail']."','".$_GET['userTele']."','".$_GET['div_id']."')";
           $result=mysqli_query($connection,$sql);
           //$result=$connection->query($sql);
           //print_r($result);
           if($result){
               //echo "Successful";
               //header( 'Location: divman_bk_add.php ');
               echo '<script> alert("Data Inserted Successfully"); </script>';

                // $emailFrom ="mrbeemanager@gmail.com";
                $subject ="Activate the account & Change the Password ";
                $body="HI Mr/Mrs ".$_GET['fullName']." .Welcome to our Bee keeping community and Thank You for Joining with us. Herewith we sent login informations for your Account. After the log in you should change your password because of security purpose.
                your user name = ".$_GET['userEmail']."
                your password=Beekeeper@123.
                (You can activate your account by using these User Credentials.)
                Thank You.
                Your faithfully,
                Mr. Bee Team."
                ;
                $headers="From: mrbeemanager@gmail.com";
                    if (mail($_GET['userEmail'],$subject,$body,$headers)) {
                        echo '<script> alert("mail sent successfully"); </script>';
                    }else {
                    echo '<script> alert("Unable to send email. Please try again to send the email."); </script>';
                    }
             

           }else{
                echo '<script> alert("Insertion Failed"); </script>';
           }
       }  
                  
  
?>