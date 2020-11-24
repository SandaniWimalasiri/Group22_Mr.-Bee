<?php require_once("../../config/connect.php");
require_once("func.php"); ?>
<?php session_start(); 

        if(!$_SESSION['userName']){
            header('Location: sign_in_admin.php');
        }
?>



<html>
    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>

<body>
        <nav>   
            <!--start of header-->
            
            <header>  
                                
                <div class="webName">
                    MR.<font color="#f4976c">BEE</font></a>
                </div>
                <div class="user">
                    You are logged in as 
                        <?php echo $_SESSION['first_name'];
                            echo " " ;
                            echo $_SESSION['last_name']; ?>
                    <a href="log_out.php"> (Log Out) </a>
                </div>
                
            </header>                       <!--end of header-->

            <!--start of logo class-->
            <div class="logo">
            <img src="../../public/img/004.png" width="8%" height=width>
            </div>                          <!--end of logo class-->

        </nav>    
        <div class="welcomeBox">       
            <a href="manager_home.php"><img src="../../public/img/manager2.jpg" class="icon"></a>
            <h1>Divisional Manager Details</h1>
        </div> 

        


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
