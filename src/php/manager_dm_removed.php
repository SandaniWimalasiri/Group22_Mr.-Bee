<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>


    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>
    <body> 

        <div class="content">
            
        <center>
            <h2>Divisional managers' Details</h2>
            <br>
                <table class="div_man">
                    <tr>
                        <th>Registration ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>TP No.</th>
                        <th>Address</th>
                        <th>Employeement Status</th>
                        <th>Division</th>
                        
                        <th style="text-align:center;">Replace</th>
                        <th style="text-align:center;">Remove</th>
                    </tr>
                    <?php 
                    $user_id='';
                    $sql = "SELECT * FROM div_manager WHERE is_deleted=1;";
                    
                    $query=mysqli_query($connection,$sql);
                    verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                            <td><?php echo $result['div_id'] ?></td>
                            <td><?php echo $result['first_name'] ?></td>
                            <td><?php echo $result['last_name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['tp'] ?></td>
                            <td><?php echo $result['addr'] ?></td>
                            <td><?php echo $result['emp_status'] ?></td>
                            <td><?php echo $result['division'] ?></td>
                           

                            <form action="manager_dm_removed2.php" method="post">
                                    <input type="hidden" name="div_id" value="<?php echo $result['div_id']; ?>">
                                    <td><button class="btn8" type="submit" name="replace1">Replace</a></td>
                            </form>
                            <form action="manager_dm_removed2.php" method="post">
                                    <input type="hidden" name="div_id" value="<?php echo $result['div_id']; ?>">
                                    <td><button class="btn7" type="submit" name="delete1" onclick="return confirm('Are you sure? This will permenantly delete the data!')">Remove</a></td>
                            </form>
                           
                    
                    </tr>
                  
                    <?php
                    }
                    ?> 
                </table>
            </center>
            <br>
            <button class="btn6" type="submit" name="back" onclick="document.location='manager_dm.php'"><b>Back</b></button>
        </div>
        
    </body>