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
                                <td><input type="text" name="first_name" placeholder="Enter First Name" required></td>
                            </tr>
                            <tr>
                                <th><label>Last name</label></th>
                                <td><input type="text" name="last_name" placeholder="Enter Last Name" required></td>
                            </tr>
                            <tr>
                                <th><label>E-mail</label></th>
                                <td><input type="text" name="email" placeholder="Enter email address" required></td>
                            </tr>
                            <tr>
                                <th><label>TP No.</label></th>
                                <td><input type="text" name="tp" placeholder="Enter TP No." required ></td>
                            </tr> 
                            <tr>
                                <th><label>Division</label></th>
                                    <td> 
                                   
                                        <select name="division" id="division" value="<?= $division?>">
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Galle">Galle</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Matara">Matara</option>
                                        </select>
                                        
                                   </td>
                            </tr>
                            <tr>
                                <th><label>No. of Employees</label></th>
                                <td><input type="text" name="no_employee" placeholder="Enter no. of employees" required></td>
                            </tr>
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="add"><b>Add</b></button>
                            <button class="btn6" type="reset" class="cancelbtn"><b>Cancel<b></button>
                            <button class="btn6" type="submit" name="back" onclick="document.location='manager_dm.php'"><b>Back</b></button>
                           
                        </form>

        </div>
        
    </body>
</html>
    <?php
        
        if(isset($_GET['add'])){
           //echo "Done";                                                                                                 
           
           
           $sql="INSERT INTO div_manager (first_name, last_name, email,tp, division, no_employee) VALUES('".$_GET['first_name']."','".$_GET['last_name']."','".$_GET['email']."','".$_GET['tp']."','".$_GET['division']."','".$_GET['no_employee']."')";
           $result=mysqli_query($connection,$sql);
           //$result=$connection->query($sql);
           //print_r($result);
           if($result){
               //echo "Successful";
              // header( 'Location: manager_dm_add.php ');
              echo '<script> alert("Successfully Inserted"); </script>';
           }else{
                echo '<script> alert("Insertion Failed"); </script>';
           }
       }
                     
  
?>