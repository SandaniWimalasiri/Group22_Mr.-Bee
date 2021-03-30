
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
                                <th><label>Address</label></th>
                                <td><textarea placeholder="Address" name="addr" value=""><?php echo $row['addr'] ?></textarea></td>
                            </tr>
                            <tr>
                                <th><label>Additional Email</label></th>
                                <td><input type="email" name="a_email" placeholder="Email" value="<?php echo $row['a_email'] ?>" required></td>
                            </tr>
                          
                            <tr>
                                <th><label>Personal TP Number</label></th>
                                <td><input type="text" name="tp" pattern="[0]{1}[0-9]{9}" placeholder="Enter TP No(eg:0712345678)" value="<?php echo $row['tp'] ?>" required></td>
                            </tr>
                            <tr>
                                <th><label>Company TP Number</label></th>
                                <td><input type="text" name="ctp" pattern="[0]{1}[0-9]{9}" placeholder="Enter TP No(eg:0712345678)" value="<?php echo $row['ctp'] ?>" required></td>
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
                                    $addr = $_POST['addr'];
                                    $ctp = $_POST['ctp'];
                                    $a_email = $_POST['a_email'];
                                   
                                    $tp = $_POST['tp'];


                                    $query = "UPDATE manager SET tp='$tp' , addr='$addr', ctp='$ctp', a_email=' $a_email'";
                                    $query_run = mysqli_query($connection, $query);

                                    if($query_run)
                                    {
                                        echo '<script> alert("Data Updated Successfully"); </script>';
                                        //header("location:manager_home.php");
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
