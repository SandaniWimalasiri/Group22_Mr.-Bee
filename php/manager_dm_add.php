<?php include('manager_alignments.php')?>


    <head>
        
        <title>manager_Divisional</title>
        <link rel="stylesheet" type="text/css" href="css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="css/style_manager_remove_dm.css">

    </head>
    <body>
   
      
        
      
        <!--start of welcomeBox-->
        <div class="welcomeBox">       
            <a href="manager_home.php"><img src="img/manager2.jpg" class="icon"></a>
            <h1>Add New Divisional Manager</h1>
            <table class="nav_table" border="0" width="100%" align="left" cellpadding="10" cellspacing="0">
                <tr>
                    <td><a href="manager_dm.php">Divisional Manager</a></td>
                    <td><a href="manager_view_reports.php">Reports</a></td>
                    <td><a href="manager_products.php">Products</a></td>
                    <td><a href="manager_recycle.php">Recycle Bin</a></td>
                    <td><a href="manager_infohub.php">Infomation Forum</a></td>
                    
                    <td width="30%">&nbsp;</td>
                    
                </tr>
            </table>
        </div>                           <!--end of welcomeBox-->

        <div class="content"> 
        <h1 >Add new Divisional Manager</h1>
                        <form class="f1"  action="manager_dm_add.php" method="get">
                            
                            
                            <table class="div_man">
                            <tr>
                                <th><label>Registration ID</label></th>
                                <td><input type="text" name="div_id" placeholder="Enter Registration ID" required ></td>
                            </tr> 
                            
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
                                <th><label>Divisional Code</label></th>
                                <td><input type="text" name="div_code" placeholder="Enter division code" required></td>
                            </tr>
                            <tr>
                                <th><label>No. of Employees</label></th>
                                <td><input type="text" name="no_employee" placeholder="Enter no. of employees" required></td>
                            </tr>
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="add2"><b>Add</b></button>
                           
                        </form>

            <br>
            <button class="btn6" type="submit" name="back" onclick="document.location='manager_dm.php'"><b>Back</b></button>
        </div>
        
    </body>

    <?php
        
        if(isset($_GET['add2'])){
           //echo "Done";                                                                                                 
           
           
           $sql="INSERT INTO div_manager (div_id, first_name, last_name, email, div_code, no_employee) VALUES('".$_GET['div_id']."','".$_GET['first_name']."','".$_GET['last_name']."','".$_GET['email']."','".$_GET['div_code']."','".$_GET['no_employee']."')";
           $result1=mysqli_query($connection,$sql);
           //$result=$connection->query($sql);
           //print_r($result);
           if($result1){
               //echo "Successful";
               header( 'Location: manager_dm.php ');
           }else{
               echo "failed";
           }
       }
                     
  
?>