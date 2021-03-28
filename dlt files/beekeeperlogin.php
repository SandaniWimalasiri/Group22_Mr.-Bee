<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/CSS" href="../../public/css/beekeeperlogin.css">
		<link rel="stylesheet" type="text/CSS" href="../../public/css/homenav.css">

	</head>
	<body >
		<?php include('homenavbar.php'); 
        
        
?>
		<div class="loginbox">
			<div class="center">
				<img src="../../public/img/login.png" class="avatar">
			</div>
				<h2>Login Here</h2>
				<form method="post" action="beekeeperlogin.php" >
					<p>Username</p>
					<input type="text" name="name" placeholder="Enter your Username">
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit" class="button" name="submit" value="LOGIN"><br /><br />
					
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

		$sql="SELECT * FROM beekeeper WHERE username='".$uname."' AND userPassword='".$pwd."'";
		$result=mysqli_query($connection,$sql);
		
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