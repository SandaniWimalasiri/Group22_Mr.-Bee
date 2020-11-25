<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/CSS" href="../../public/css/customerlogin.css">

	</head>
	<body >

        
        
?>
		<div class="loginbox">
			<div class="center">
				
			</div>
				<center><h2>Login Here</h2></center>
				<form method="post" action="customer_index.php" >
					<p>Username</p>
					<input type="text" name="name" placeholder="Enter your Username">
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit" class="button" name="submit" value="LOGIN"><br /><br />
					<div class="txt">Don't have an account? <a href="customer_signup.php" class="txt1"> Sign Up</a></div><br />
				</form>
			</div>
		</div>
	</body>
</html>

<?php 
	require_once('../../config/connect.php');
	session_start();
	
	if(isset($_POST['submit'])){
		$uname=$_POST['name'];
		$pwd=$_POST['password'];

		$sql="SELECT * FROM customer WHERE username='".$uname."' AND userPassword='".$pwd."'";
		$result=mysqli_query($connection,$sql);
		
		if($result->num_rows==1){
			$beekeeper=$result->fetch_assoc();
			$_SESSION['loggedin']=1;
			$_SESSION['username']=$customer['username'];
			$_SESSION['userid']=$customer['CID'];
			
			if($result){
				$redirect =  "customer_index.php";
			
                        }

                        header('Location: ' . $redirect);
		}
	}
?>