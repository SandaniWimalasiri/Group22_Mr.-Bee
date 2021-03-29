
<?php require_once("../../config/connect.php"); ?>
<?php
  session_start();

  if(isset($_POST['submit'])){
    //save username and password into variables
    $userName =mysqli_real_escape_string($connection,$_POST['email']);
    $password =mysqli_real_escape_string($connection,$_POST['password']);

    //prepare database query
    //use "email" as username and "pwd" as password in "manager" table
    $query1=mysqli_query($connection,"SELECT * FROM manager WHERE email='{$userName}' AND pwd ='{$password}' LIMIT 1");
    $row=mysqli_fetch_array($query1);
   
    //use "email" as username and "pwd" as password in "manager" table
    $isexist=mysqli_query($connection,"SELECT * FROM manager WHERE email='{$userName}' AND pwd ='{$password}' LIMIT 1");
    $check_user=mysqli_num_rows($isexist);
   
    if($check_user==1){
      $_SESSION["type"]=$row['emp_status'];
      $_SESSION["email"]=$row['email'];
     
      $user=mysqli_fetch_assoc($isexist);
      $_SESSION["first_name"]=$user['first_name'];
      $_SESSION["last_name"]=$user['last_name'];
      
      header('Location: manager_home.php');
     
    }
  }


  if(isset($_POST['submit'])){
    //save email and password into variables
    $email =mysqli_real_escape_string($connection,$_POST['email']);
    $password =mysqli_real_escape_string($connection,$_POST['password']);

    //prepare database query
    $query=mysqli_query($connection,"SELECT * FROM div_manager WHERE email='{$email}' AND pwd ='{$password}'  LIMIT 1");
    $row=mysqli_fetch_array($query);
   
    $isexist=mysqli_query($connection,"SELECT * FROM div_manager WHERE email='{$email}' AND pwd ='{$password}'  LIMIT 1");
    $check_user=mysqli_num_rows($isexist);

    if($check_user==1){
      $_SESSION["type"]=$row['emp_status'];
      $_SESSION["email"]=$row['email'];
     
      $user=mysqli_fetch_assoc($isexist);
      $_SESSION["first_name"]=$user['first_name'];
      $_SESSION["last_name"]=$user['last_name'];

      header('Location: divman.php');
     
    }else{
      echo "<script>alert('Invalid Username or Password');</script>";
    }

  }

 

  if(isset($_POST['submit'])){
		$uname=$_POST['email'];
		$pwd=$_POST['password'];

		$sql3="SELECT * FROM beekeeper WHERE userEmail='".$uname."' AND userPassword='".$pwd."'";
		$result=mysqli_query($connection,$sql3);

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

  if(isset($_POST['submit'])){
		$uname=$_POST['email'];
		$pwd=$_POST['password'];

		$sql4="SELECT * FROM customer WHERE username='".$uname."' AND userPassword='".$pwd."'";
		$result=mysqli_query($connection,$sql4);

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
          <input type="text" name="email" placeholder="Enter Username" required>
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <input type="submit" name="submit" value="Login">
         
        </form> 
    </div>

  </body>
</html>