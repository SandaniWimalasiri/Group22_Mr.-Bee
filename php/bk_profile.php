<?php require_once('../db_connection/connect.php'); 
session_start();




if(isset($_POST['update'])){
    
 
          
    $sql2= "UPDATE beekeeper SET userName ='".$_POST['userName']."',fullName ='".$_POST['fullName']."',  userAddress ='".$_POST['userAddress']."', userEmail ='".$_POST['userEmail']."',userTele ='".$_POST['userTele']."'WHERE userID='".$_SESSION['userid']."'";
    $result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT userName,fullName,userAddress,userEmail,userTele  FROM beekeeper WHERE userID='".$_SESSION['userid']."'";
    $result3 = mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);
   if($result2){
 
}
else{
echo "failed";	
}

}


   

?>
<html>

    <head>

      <title>bee-hive</title>
      <link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">

    </head>
  <body  >
      

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>


<div class="main">


    <div class="bhivecontainer">
    <p >My Profile</p>
    
    <center><img src="  ../img/14.png" ></center>
</br>
</br>
<?php

$sql1 = "SELECT userName,fullName,userAddress,userEmail,userTele  FROM beekeeper WHERE userID='".$_SESSION['userid']."'";
mysqli_query($connection, $sql1);
$result1 = mysqli_query($connection,$sql1);
		while($row=mysqli_fetch_assoc($result1)){  
 
   
        echo '<form  method="post" action="" ><div class="row" >';
        echo '<div class="col1">';
        echo 'User Name </div><div class="col2">';
        echo "<input type = 'text' name='userName' required value ='".$row['userName']."'>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Full Name </div><div class="col2" ><input type = "text" name="fullName" required value ="'.$row['fullName'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Address </div><div class="col2"><input type = "text" name="userAddress" required value ="'.$row['userAddress'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Email </div><div class="col2"><input type = "text"" name="userEmail" required value ="'.$row['userEmail'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Contact No</div><div class="col2"><input type = "text" name="userTele" required value ="'.$row['userTele'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row"><div class="c1" style="width: 910px"><input type="submit" value="Edit Profile" name="update" ></div></form>';
        

        }?>


<form  action="beekeeperindex.php" method="post" >
        <div class="c2" style="width: 90px">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </div>
        </form>

    </div>
    
<br />
<br />
</div>  
 
  </body>
</html>