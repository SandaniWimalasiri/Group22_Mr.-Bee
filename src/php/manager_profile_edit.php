
<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>




<html>
    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>

<body>
        
        

    <div class="content"> 
            <?php
                

                $query = "SELECT * FROM manager";
                $query_run = mysqli_query($connection, $query);

                if($query_run){
                    while($row = mysqli_fetch_array($query_run)){
                    ?>

                        <h1 >Edit Manager's Profile</h1>
                        <button class="btn6" type="submit" name="back" onclick="document.location='manager_home.php'"><<<b>Back</b></button> 
                        </br>
                            
                        <form class="f1" method="post" action="">
                        </br>
                            
                            
                            <table class="div_man">
                            
                            <tr>
                                <th><label>First name</label></th>
                                <td><input type="text" name="first_name" placeholder="Enter First Name" value="<?php echo $row['first_name'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Last name</label></th>
                                <td><input type="text" name="last_name" placeholder="Enter Last Name" value="<?php echo $row['last_name'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Email</label></th>
                                <td><input type="text" name="email" placeholder="Email" value="<?php echo $row['email'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Password</label></th>
                                <td><input type="password" name="pwd" placeholder="Enter division code" value="<?php echo $row['pwd'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>No. of Employees</label></th>
                                <td><input type="text" name="tp" placeholder="Enter TP number" value="<?php echo $row['tp'] ?>"></td>
                            </tr>
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="update"><b>Submit</b></button>
                            
                        </form>
                    <?php    
                    }   
                    ?>    

                        <?php
                                if(isset($_POST['update']))
                                {
                                    $first_name = $_POST['first_name'];
                                    $last_name = $_POST['last_name'];
                                    $email = $_POST['email'];
                                    $pwd = $_POST['pwd'];
                                    $tp = $_POST['tp'];


                                    $query = "UPDATE manager SET first_name='$first_name', last_name='$last_name', email=' $email', pwd='$pwd', tp='$tp'  ";
                                    $query_run = mysqli_query($connection, $query);

                                    if($query_run)
                                    {
                                        echo '<script> alert("Data Updated Successfully"); </script>';
                                        header("location:manager_home.php");
                                    }
                                    else
                                    {
                                        echo '<script> alert("Data Not Updated"); </script>';
                                    }
                                }
                    ?>
                        <?php
                    
                   
                }
                ?>
        </div>               <!--end content2-->

        
</body>
</html>
