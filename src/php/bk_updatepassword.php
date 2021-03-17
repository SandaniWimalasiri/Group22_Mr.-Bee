<?php require_once('../../config/connect.php'); 
session_start();

$error="";
		if(isset($_POST['submit'])){
			if($_POST['password']!=$_POST['repassword']){	
				$error="Password does not match";
				
			}


if(isset($_POST['update'])){
    
 
          
    $sql2= "UPDATE beekeeper SET userPassword ='".$_POST['userPassword']."' WHERE userID='".$_SESSION['userid']."'";
    $result2 = mysqli_query($connection,$sql2);
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
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body  >
      

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>


<div class="main">


    <div class="bhivecontainer">
    <p >Change Password</p>
    
    <center><img src="  ../../public/img/14.png" ></center>
</br>
</br>

<p>Password </p>
<input type="password" name="password" placeholder="Enter your password" required/>
<p>Re-enter the Password </p>
<input type="password" name="repassword" placeholder="Enter your password" required /><br />



<form  action="bk_profile.php" method="post" >
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