
<?php require_once("../../config/connect.php"); ?>
<?php
  session_start();

  if(isset($_POST['submit'])){

    $email=$_POST['email'];
		$pwd=$_POST['password'];

    $sql="SELECT * FROM div_manager WHERE email='".$email."' AND pwd='".$pwd."'";
		$result=mysqli_query($connection,$sql);
		
		if($result->num_rows==1){
			$div_manager=$result->fetch_assoc();
      $_SESSION['email']=$div_manager['email'];
      $_SESSION["first_name"]=$div_manager['first_name'];
      $_SESSION["last_name"]=$div_manager['last_name'];
      
      if($result){
				$redirect =  "divman.php";
			
                        }

                        header('Location: ' . $redirect);
    }

  }

  if(isset($_POST['submit'])){
    
    $email=$_POST['email'];
		$pwd=$_POST['password'];

    $sql="SELECT * FROM manager WHERE email='".$email."' AND pwd='".$pwd."'";
		$result=mysqli_query($connection,$sql);
		
		if($result->num_rows==1){
			$manager=$result->fetch_assoc();

      $_SESSION["first_name"]=$manager['first_name'];
      $_SESSION["last_name"]=$manager['last_name'];
      
      if($result){
				$redirect =  "manager_home.php";
			
                        }

                        header('Location: ' . $redirect);
    }

  }

  if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$pwd=$_POST['password'];

		$sql="SELECT * FROM beekeeper WHERE userEmail='".$email."' AND userPassword='".$pwd."'";
		$result=mysqli_query($connection,$sql);
		
		if($result->num_rows==1){
			$beekeeper=$result->fetch_assoc();
			$_SESSION['loggedin']=1;
			$_SESSION['username']=$beekeeper['userName'];
			$_SESSION['userid']=$beekeeper['userID'];
			
			if($result){
				$redirect =  "bk_harvest.php";
			
                        }

                        header('Location: ' . $redirect);
		}
	}

  if(isset($_POST['submit'])){
		$uname=$_POST['email'];
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

<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style_login.css">
  </head>
  <body>
    <div class="loginBox">
      <img src="../../public/img/login.png" class="icon">
        <h1>Login Here</h1>
        <form name="loginForm" action="login.php"  method="post">
          <p>Username</p>
          <input type="text" name="email" placeholder="Enter Email" required>
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password" required>
          <input type="submit" name="submit" value="Login">
        </form> 
    </div>

  </body>
</html>