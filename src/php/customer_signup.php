
<?php
		require_once('../../config/connect.php');
		
		


    if(isset($_POST['submit'])){
<<<<<<< HEAD

        if (empty($_POST["username"])) {
            $username_error = "</br>*User Name is Required";
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
=======
>>>>>>> db46ba53b473ae6f50517f8dc822be3cd3ff1317
        
        $date=date("Y/m/d");
		$sql="INSERT INTO customer (username,fullname,userAddress,userEmail,userTele,userPassword) VALUES('".$_POST['username']."','".$_POST['fullname']."','".$_POST['userAddress']."','".$_POST['userEmail']."','".$_POST['userTele']."','".$_POST['userPassword']."')";
			
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
				<input type="text" name="username" placeholder="Enter your User name" required>
				
				<p>Name : </p>
				<input type="text" name="fullname" placeholder="Enter your Name" required/>
				
				<p>Adress : </p>
				<input type="text" name="userAddress" placeholder="Enter your address" required/>
				
				<p>Email : </p>
				<input type="text" name="userEmail" placeholder="Enter your email address" required/>
				
				<p>Telephone : </p>
				<input type="text" name="userTele" placeholder="Enter your telephone no" required/>
				
				<p>Password : </p>
				<input type="password" name="userPassword" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
				
				<p>Re-enter the Password : </p>
<<<<<<< HEAD
        <div class="error"><?= $repassword_error?></div> 
				<input type="password" name="repassword" placeholder="Enter your password" value="<?= $repassword?>" /><br />
=======
				<input type="password" name="repassword" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required /><br />
>>>>>>> db46ba53b473ae6f50517f8dc822be3cd3ff1317
				
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