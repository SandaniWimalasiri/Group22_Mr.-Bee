
<?php
		require_once('../../config/connect.php');
		
		


    if(isset($_POST['submit'])){
        
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
				<input type="password" name="repassword" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required /><br />
				
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