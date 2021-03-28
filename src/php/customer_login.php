<?php 
	require_once('../../config/connect.php');
	session_start();
	
	$username_error=$userPassword_error="";
	$username=$userPassword="";

	if(isset($_POST['submit'])){
		

		if (empty($_POST["username"])) {
            $username_error = "</br>* User Name is required";
          }else {

            $username = test_input($_POST["username"]);

            $sql = "SELECT username FROM customer";
            $result = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_array($result))
            {
              if($row['username']!== $username){
              $username_error = "</br>*Invalid User Name";
            }

           }
		  }
		
		  
		  if (empty($_POST["userPassword"])) {
            $userPassword_error = "</br>* Password is required";
          }else {

            $userPassword = test_input($_POST["userPassword"]);

            $sql = "SELECT userPassword FROM customer";
            $result = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_array($result))
            {
              if($row['userPassword']!== $userPassword){
              $userPassword_error = "</br>*Invalid Password";
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
					<input type="text" name="username" placeholder="Enter your Username" value="<?= $username?>">
					<span class="error"><?= $username_error?></span>
					<p>Password</p>
					<input type="password" name="userPassword" placeholder="Enter Password" value="<?= $userPassword?>">
					<span class="error"><?= $userPassword_error?></span>
					<input type="submit" class="button" name="submit" value="LOGIN"><br /><br />
					<div class="txt">Don't have an account? <a href="customer_signup.php" class="txt1"> Sign Up</a></div><br />
				</form>
			</div>
		</div>
	</body>
</html>

