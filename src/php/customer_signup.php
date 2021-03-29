
<?php
		require_once('../../config/connect.php');
		
		

$username_error=$fullname_error=$userAddress_error=$userEmail_error=$userTele_error=$userPassword_error=$repassword_error="";
$username=$fullname=$userAddress=$userEmail=$userTele=$userPassword=$repassword="";

    if(isset($_POST['submit'])){

        if (empty($_POST["username"])) {
            $username_error = "</br>*User Name No is Required";
          } else {
            $username = test_input($_POST["username"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
              $username_error = "<br/>*Only Letters and White Space Allowed";
            }
          }
        if (empty($_POST["fullname"])) {
            $fullname_error = "</br>*Full Name is Required";
          } else {
            $fullname = test_input($_POST["fullname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)) {
              $fullname_error = "<br/>*Only Letters and White Space Allowed";
            }
          }
        
          if (empty($_POST["userAddress"])) {
            $userAddress_error = "</br>*User Address is Required";
          } else {
            $userAddress = test_input($_POST["userAddress"]);
          }
          if (empty($_POST["userEmail"])) {
            $userEmail_error = "<br/>*User Email is Required";
          } else {
			$userEmail = test_input($_POST["userEmail"]);
			if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
				$userEmail_error = "<br/>*Invalid Email Format";
			  }
          }
          if (empty($_POST["userTele"])) {
            $userTele_error = "<br/>*Telephone Number is Required";
          } else {
            $userTele = test_input($_POST["userTele"]);
          }

          if (empty($_POST["userPassword"])) {
            $userPassword_error = "<br/>*Password is Required";
          } else {
            $userPassword = test_input($_POST["userPassword"]);
          }
        
          if (empty($_POST["repassword"])) {
            $repassword_error = "<br/>*Re-Enter Your Password";
          } else {
            $repassword = test_input($_POST["repassword"]);
            if($userPassword!== $repassword){
              $repassword_error = "</br>*Please Re-Enter Correct Password";
		  }
		  else{
			if (strlen($_POST["userPassword"]) <= '6') {
				$userPassword_error = "<br/>*Your Password Must Contain At Least 6 Characters!";
			}
			elseif(!preg_match("#[0-9]+#",$userPassword)) {
				$userPassword_error= "<br/>*Your Password Must Contain At Least 1 Number!";
			}
			elseif(!preg_match("#[A-Z]+#",$userPassword)) {
				$userPassword_error = "<br/>*Your Password Must Contain At Least 1 Capital Letter!";
			}
			elseif(!preg_match("#[a-z]+#",$userPassword)) {
				$userPassword_error = "<br/>*Your Password Must Contain At Least 1 Lowercase Letter!";
			}
		  }

		  }

          if($username_error=='' and $fullname_error=='' and $userAddress_error=='' and $userEmail=='' and $userTele_error=='' and $userPassword_error=='' and $repassword_error==''){
        
        $date=date("Y/m/d");
		$sql="INSERT INTO customer (username,fullname,userAddress,userEmail,userTele,userPassword) VALUES('".$_POST['username']."','".$_POST['fullname']."','".$_POST['userAddress']."','".$_POST['userEmail']."','".$_POST['userTelephone']."','".$_POST['userPassword']."')";
			
		$result=mysqli_query($connection,$sql);
        if($result){

          echo '<script>';
          echo 'alert("Registered Successfully");';
          echo 'window.location.href = "customer_login.php";';
          echo '</script>';
          die();
        }

        else{

          echo '<script>';
          echo 'alert("Failed");';
          echo 'window.location.href = "customer_signup.php";';
          echo '</script>';
          die();
        }
        
        }
        }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>

<html>
	<head>
		<title>SignUp</title>
		<link rel="stylesheet" type="text/CSS" href="../../public/css/signup.css">
		
	</head>
	<body>

        
        

<div class="main">
		<div class="loginbox" >
			<h1>Sign Up</h1>
			<form method="POST" action="" >
				<p>User Name : </p>
        <div class="error"><?= $username_error?></div>
				<input type="text" name="username" placeholder="Enter your User name" value="<?= $username?>">
				
				<p>Name : </p>
        <div class="error"><?= $fullname_error?></div>
				<input type="text" name="fullname" placeholder="Enter your Name" value="<?= $fullname?>"/>
				
				<p>Adress : </p>
        <div class="error"><?= $userAddress_error?></div>
				<input type="text" name="userAddress" placeholder="Enter your address" value="<?= $userAddress?>"/>
				
				<p>Email : </p>
        <div class="error"><?= $userEmail_error?></div>
				<input type="text" name="userEmail" placeholder="Enter your email address" value="<?= $userEmail?>"/>
				
				<p>Telephone : </p>
        <div class="error"><?= $userTele_error?></div>
				<input type="text" name="userTele" placeholder="Enter your telephone no" value="<?= $userTele?>"/>
				
				<p>Password : </p>
        <div class="error"><?= $userPassword_error?></div>
				<input type="password" name="userPassword" placeholder="Enter your password" value="<?= $userPassword?>"/>
				
				<p>Re-enter the Password : </p>
        <div class="error"><?= $repassword_error?></div>
				<input type="password" name="repassword" placeholder="Enter your password" value="<?= $repassword?>" /><br />
				
				<br />
				
				<div class="center" id="er">
				<input type="submit" class=button name="submit" value="Sign Up" >
				 </div>  
				 </form>
				 <div class="center" id="er">
				<form  action="" method="post" > <input type="submit" class=button style="background-color: white" value="Cancel"></form>
				 </div>  
			
		</div>
</div>

	</body>
</html>