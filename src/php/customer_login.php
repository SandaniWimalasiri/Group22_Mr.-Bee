<div class="errs">

<?php 
	require_once('../../config/connect.php');
	session_start();
	
	
	$username_error=$userPassword_error="";
	$username=$userPassword="";
	

	if(isset($_POST['submit'])){
		

		if (empty($_POST["username"])) {
            $username_error = "* User Name is required";
          }else {

            $username = test_input($_POST["username"]);

            $sql = "SELECT username FROM customer";
            $result = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_array($result))
            {
              if($row['username']!== $username){
              $username_error = "*Invalid User Name";
            }

           }
		  }
		
		  
		  if (empty($_POST["userPassword"])) {
            $userPassword_error = "* Password is required";
          }else {

            $userPassword = test_input($_POST["userPassword"]);

            $sql = "SELECT userPassword FROM customer";
            $result = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_array($result))
            {
              if($row['userPassword']!== $userPassword){
              $userPassword_error = "*Invalid Password";
            }

           }
		  }
		  
		  if($username_error =='' and  $userPassword_error =='' ){


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

}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
?>
</div>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/CSS" href="../../public/css/customerlogin.css">

	</head>
	<body >

  <?php      
	
?>
		<div class="loginbox">
			<div class="center">
				
			</div>
				<center><h2>Login Here</h2></center>
				<form method="post" action="" >
					<p>Username</p>
					<div class="error"><?= $username_error?></div>
					<input type="text" name="username" placeholder="Enter your Username" value="<?= $username?>">
					
					<p>Password</p>
					<div class="error"><?= $userPassword_error?></div>
					<input type="password" name="userPassword" placeholder="Enter Password" value="<?= $userPassword?>">
					<input type="submit" class="button" name="submit" value="LOGIN"><br /><br />
					<div class="txt">Don't have an account? <a href="customer_signup.php" class="txt1"> Sign Up</a></div><br />
				</form>
			</div>
		</div>
	</body>
</html>

