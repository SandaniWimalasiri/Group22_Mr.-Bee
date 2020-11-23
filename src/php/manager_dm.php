<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>


    <head>
        
        <title>Manager_home</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>
    <body>
       
        

        
         <!--start content-->
        <div class="content"> 
            <br>
            <div class="viewform">
                    
                        <button class="btn6" type="submit" name="submit" onclick="document.location='manager_dm_add.php'">Add </button>
                    
                   
             </div>
             <br>  
            <center>
                <table class="div_man">
                    <tr>
                        <th>Registration ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Employeement Status</th>
                        <th>Divisional Code</th>
                        <th>No. of Employees</th>
                        <th style="text-align:center;">Edit</th>
                        <th style="text-align:center;">Delete</th>
                    </tr>
                    <?php 
                    
                    $sql = "SELECT * FROM div_manager WHERE is_deleted=0;";
                    
                    $query=mysqli_query($connection,$sql);
                    verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                            <td><?php echo $result['div_id'] ?></td>
                            <td><?php echo $result['first_name'] ?></td>
                            <td><?php echo $result['last_name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['emp_status'] ?></td>
                            <td><?php echo $result['div_code'] ?></td>
                            <td style="text-align:center;"><?php echo $result['no_employee'] ?></td>

                            <form action="manager_dm_edit.php" method="post">
                                    <input type="hidden" name="div_id" value="<?php echo $result['div_id']; ?>">
                                    <td><button class="btn8" type="submit">Edit</button></td>
                            </form>
                            <form action="manager_dm_delete.php" method="post">
                                    <input type="hidden" name="div_id" value="<?php echo $result['div_id']; ?>">
                                    <td><button class="btn7" type="submit" name="delete" onclick="return confirm('Are you sure?')">Delete</button></td>
                            </form>
                           
                    
                    </tr>
                  
                    <?php
                    }
                    ?> 
                </table>
            </center>
            <center>
                <div class="viewform">
                    <form method="post">
                        <br><br>
                        <label> Search  </label>
                        <input type="text" name="code">
                        
                        <button class="btn6" type="submit" name="view"><b>View</b></button>
                        
                    </form>
                </div>    		
              </center>

            <table class="div_man">
                
                
                <?php
                    if(isset($_POST['view'])){
                        echo"<tr>
                            <th>Registration ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Divisional code</th>
                            <th>No. of Employees</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>";
                        $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM div_manager WHERE (is_deleted=0) AND (div_id='{$_POST['code']}' OR first_name='{$_POST['code']}' OR last_name='{$_POST['code']}' OR emp_status='{$_POST['code']}' OR div_code='{$_POST['code']}');";
                        $query = $connection->query($sql);
                        verify_query($query);
                        
                        while ($result = $query->fetch_assoc()){
                ?>
                        <tr>
                            <td><?php echo $result['div_id'] ?></td>
                            <td><?php echo $result['first_name'] ?></td>
                            <td><?php echo $result['last_name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['div_code'] ?></td>
                            <td style="text-align:center;"><?php echo $result['no_employee'] ?></td>

                            <form action="manager_dm_edit.php" method="post">
                                    <input type="hidden" name="div_id" value="<?php echo $result['div_id']; ?>">
                                    <td><button class="btn8" type="submit">Edit</button></td>
                            </form>

                            <form action="manager_dm_delete.php" method="post">
                                    <input type="hidden" name="div_id" value="<?php echo $result['div_id']; ?>">
                                    <td><button class="btn7" type="submit" name="delete" >Delete</button></td>
                            </form>

                        </tr>
                               
                        <?php
                         }
                    }
                ?>

            </table>
                
            




        
        
        </div>               <!--end content-->

        <!--start of footer-->
        <footer>    
            <h3></h3>
        </footer>   <!--end of footer-->

    </body>

