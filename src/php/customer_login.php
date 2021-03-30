

<?php 
	require_once('../../config/connect.php');
	session_start();
	

	

	if(isset($_POST['submit'])){
		



		$sql="SELECT * FROM customer WHERE username='".$_POST['username']."' AND userPassword='".$_POST['userPassword']."'";
		$result=mysqli_query($connection,$sql);
		
		if($result->num_rows==1){
			$customer=$result->fetch_assoc();
			$_SESSION['loggedin']=1;
			$_SESSION['username']=$customer['username'];
			$_SESSION['userid']=$customer['CID'];
			
			header( 'Location: customer_index.php');
		}
	}

?>
</div>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/CSS" href="../../public/css/customerlogin.css">

	</head>
	<body >

 
		<div class="loginbox">
			<div class="center">
				
			</div>
				<center><h2>Login Here</h2></center>
				<form method="post" action="" >
					<p>Username</p>
					
					<input type="text" name="username" placeholder="Enter your Username" required>
					
					<p>Password</p>
				
					<input type="password" name="userPassword" placeholder="Enter Password" required >
					<input type="submit" class="button" name="submit" value="LOGIN"><br /><br />
					<div class="txt">Don't have an account? <a href="customer_signup.php" class="txt1"> Sign Up</a></div><br />
				</form>
			</div>
		</div>
	</body>
</html>

