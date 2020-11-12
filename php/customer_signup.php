
<?php
		require_once('connect.php');
		$error="";
		if(isset($_POST['submit'])){
			if($_POST['password']!=$_POST['repassword']){	
				$error="Password does not match";
				//echo "<script> alert('Password is not matching.') </script>";
			}
			$sql="INSERT INTO user (username,fullname,userAddress,userEmail,userTele,userPassword) VALUES('".$_POST['uname']."','".$_POST['username']."','".$_POST['useraddress']."','".$_POST['useremail']."','".$_POST['usertelephone']."','".$_POST['password']."')";
			
			$result=mysqli_query($connection,$sql);
			//print_r($result);
			
			if($result){
			header('Location: login.php');
			}
			else{
			echo "failed";	
			}

		}
		?>

<html>
	<head>
		<title>SignUp</title>
		<link rel="stylesheet" type="text/CSS" href="../css/signup.css">
		
	</head>
	<body>
<?php include('homenavbar.php');
        
        
?>
<div class="main">
		<div class="loginbox" >
			<h1>Sign Up</h1>
			<form method="POST" action="signup.php" >
				<p>User Name : </p>
				<input type="text" name="uname" placeholder="Enter your User name" required/>
				<p>Name : </p>
				<input type="text" name="username" placeholder="Enter your Name" required/>
				<p>Adress : </p>
				<input type="text" name="useraddress" placeholder="Enter your address"/>
				<p>Email : </p>
				<input type="text" name="useremail" placeholder="Enter your email address"/>
				<p>Telephone : </p>
				<input type="text" name="usertelephone" placeholder="Enter your telephone no"/>
				<p>Password : </p>
				<input type="password" name="password" placeholder="Enter your password" required/>
				<p>Re-enter the Password : </p>
				<input type="password" name="repassword" placeholder="Enter your password" required /><br />
				<?php echo $error; ?>
				<br />
				
				<div class="center" id="er">
				<input type="submit" class=button name="submit" value="Sign Up" >
				 </div>  
				 </form>
				 <div class="center" id="er">
				<form  action="customer_login.php" method="post" > <input type="submit" class=button style="background-color: white" value="Cancel"></form>
				 </div>  
			
		</div>
</div>

	</body>
</html>