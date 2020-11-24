<?php require_once("../../config/connect.php");
session_start(); ?>


<html>
    <head>
        
        <title>Bee Keeper Edit</title>
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
    <div class="content2"> 
            <?php
                $userID=$_POST['userID'];

                $query = "SELECT * FROM beekeeper WHERE userID='$userID' ";
                $query_run = mysqli_query($connection, $query);

                if($query_run){
                    while($row = mysqli_fetch_array($query_run)){
                    ?>

                        <h1 >Update BeeKeeper Details Details</h1>
                        <form class="f1" method="post" action="">
                            <input type="hidden" name="userID" value="<?php echo $row['userID']; ?>">
                            
                            <table class="div_man">
                            
                            <tr>
                                <th><label>User name</label></th>
                                <td><input type="text" name="userName" placeholder="Enter User name" value="<?php echo $row['userName'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Full Name</label></th>
                                <td><input type="text" name="fullName" placeholder="Enter Full Name" value="<?php echo $row['fullName'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Address</label></th>
                                <td><input type="text" name="userAddress" placeholder="Enter Address" value="<?php echo $row['userAddress'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Email</label></th>
                                <td><input type="text" name="userEmail" placeholder="Enter Email" value="<?php echo $row['userEmail'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>User Telephone</label></th>
                                <td><input type="text" name="userTele" placeholder="Enter User Telephone" value="<?php echo $row['userTele'] ?>"></td>
                            </tr>
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="update"><b>Update</b></button>
                           
                        </form>
                        <button class="btn6" type="submit" name="back" onclick="document.location='divman.php#beekeeper'"><b>Cancel</b></button> 
                        
                        

                        <?php
                                if(isset($_POST['update']))
                                {
                                    $userName = $_POST['userName'];
                                    $fullName = $_POST['fullName'];
                                    $userAddress = $_POST['userAddress'];
                                    $userEmail = $_POST['userEmail'];
                                    $userTele = $_POST['userTele'];


                                    $query = "UPDATE beekeeper SET userName='$userName', fullName='$fullName', userAddress=' $userAddress', userEmail='$userEmail', userTele='$userTele'  WHERE userID='$userID'  ";
                                    $query_run = mysqli_query($connection, $query);

                                    if($query_run)
                                    {
                                        echo '<script> alert("Data Updated Successfully"); </script>';
                                        header("location:divman.php#beekeeper");
                                    }
                                    else
                                    {
                                        echo '<script> alert("Data Not Updated"); </script>';
                                    }
                                }
                    ?>
                        <?php
                    }
                   
                }
                ?>
        </div>               <!--end content2-->

</section>       
</body>
</html>
