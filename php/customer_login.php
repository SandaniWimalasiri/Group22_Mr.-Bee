<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/CSS" href="../css/customerlogin.css">

	</head>
	<body >
<?php include('homenavbar.php');
        
        
?>
		<div class="loginbox">
			<div class="center">
				<img src="../images/2.jpg" class="avatar">
			</div>
				<h2>Login Here</h2>
				<form method="post" action="beekeeperlogin.php" >
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
	require_once('../db_connection/connect.php');
	session_start();
	//$_SESSION['loggedin']=1;
	if(isset($_POST['submit'])){
		$uname=$_POST['name'];
		$pwd=$_POST['password'];

		$sql="SELECT * FROM beekeeper WHERE username='".$uname."' AND userPassword='".$pwd."'";
		$result=mysqli_query($connection,$sql);
		//echo "dd";
		//print_r ($result);
		if($result->num_rows==1){
			$beekeeper=$result->fetch_assoc();
			$_SESSION['loggedin']=1;
			$_SESSION['username']=$beekeeper['userName'];
			$_SESSION['userid']=$beekeeper['userID'];
			
			if($result){
				$redirect =  "beekeeperindex.php";
			
                        }

                        header('Location: ' . $redirect);
		}
	}
?>