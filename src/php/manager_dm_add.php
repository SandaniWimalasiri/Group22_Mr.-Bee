<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>


<html>
    <head>
        
        <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href=".../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href=".../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href=".../../public/css/style_manager_remove_dm.css">

    </head>
    <body>
   
      
        
      
       

        <div class="content"> 
        <h1 >Add new Divisional Manager</h1>
                        <form class="f1"  action="manager_dm_add.php" method="get">
                            
                            
                            <table class="div_man">
                            
                            
                            <tr>
                                <th><label>First name</label></th>
                                <td><input type="text" name="first_name" pattern="[a-zA-Z]+" title="Only Upper case and Lower case Letters Allowed" placeholder="Enter First Name" required></td>
                            </tr>
                            <tr>
                                <th><label>Last name</label></th>
                                <td><input type="text" name="last_name" pattern="[a-zA-Z]+" title="Only Upper case and Lower case Letters Allowed" placeholder="Enter Last Name" required></td>
                            </tr>
                            <tr>
                                <th><label>E-mail</label></th>
                                <td><input type="email" name="email" placeholder="Enter email address" required></td>
                            </tr>
                            <tr>
                                <th><label>TP No.</label></th>
                                <td><input type="text" name="tp"  pattern="[0]{1}[0-9]{9}" placeholder="Enter TP No." required ></td>
                            </tr>
                            <tr>
                                <th><label>Address</label></th>
                                <td><textarea placeholder="Address" name="addr" value="<?php echo $row['addr'] ?>" required></textarea></td>
                            </tr> 
                            <tr>
                                <th><label>Division</label></th>
                                    <td> 
                                   
                                        <select name="division" id="division" value="<?= $division?>" required>
                                            <option value="" selected disabled hidden>Select a division</option>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Galle">Galle</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Kalutara">Kalutara</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Kegalle">Kegalle</option>
                                            <option value="Kilinochchi">Kilinochchi</option>
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Mannar">Mannar</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Matara">Matara</option>
                                            <option value="Moneragala">Moneragala</option>
                                            <option value="Mullaitivu">Mullaitivu</option>
                                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                                            <option value="Polonnaruwa">Polonnaruwa</option>
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Ratnapura">Ratnapura</option>
                                            <option value="Trincomalee">Trincomalee</option>
                                            <option value="Vavuniya">Vavuniya</option>
                                        </select>
                                        
                                   </td>
                            </tr>
                            
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="add"><b>Add</b></button>
                            <button class="btn6" type="reset" class="cancelbtn"><b>Cancel<b></button>
                            <button class="btn6" type="submit" name="back" onclick="document.location='manager_dm.php'"><b>Back</b></button>
                           

                           <?php 

                              
                           ?>
                        </form>

        </div>
        
    </body>
</html>
    
     
    <?php
      
        if(isset($_GET['add'])){
           //echo "Done";                                                                                                 
           
           $sql="INSERT INTO div_manager (first_name, last_name, email,tp,addr, division) VALUES('".$_GET['first_name']."','".$_GET['last_name']."','".$_GET['email']."','".$_GET['tp']."','".$_GET['addr']."','".$_GET['division']."')";
           $result=mysqli_query($connection,$sql);
               
           
           
           //$result=$connection->query($sql);
           //print_r($result);
           if($result){
               //echo "Successful";
              // header( 'Location: manager_dm_add.php ');
              echo '<script> alert("Data Inserted Successfully"); </script>';

                // $emailFrom ="mrbeemanager@gmail.com";
                $subject ="Activate the account & Change the Password ";
                $body="HI Mr/Mrs ".$_GET['last_name']." .Welcome to our Bee keeping community and Thank You for Joining with us. Herewith we sent login informations for your Account. After the log in you should change your password because of security purpose.
                your user name = ".$_GET['email']."
                your password=Div_man@123.
                (You can activate your account by using these User Credentials.)
                Thank You.
                Your faithfully,
                Mr. Bee Team."
                ;
                $headers="From: mrbeemanager@gmail.com";
                    if (mail($_GET['email'],$subject,$body,$headers)) {
                        echo '<script> alert("mail sent successfully"); </script>';
                    }else {
                    echo '<script> alert("Unable to send email. Please try again to send the email."); </script>';
                    }
             

           }else{
                echo '<script> alert("Insertion Failed"); </script>';
           }
       }  
  ?>

