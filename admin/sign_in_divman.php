<?php require_once("db/db.php"); ?>
<?php
  session_start();

  if(isset($_POST['submit'])){
    //save username and password into variables
    $userName =mysqli_real_escape_string($connection,$_POST['userName']);
    $password =mysqli_real_escape_string($connection,$_POST['password']);

    //prepare database query
    $query=mysqli_query($connection,"SELECT * FROM div_manager WHERE email='{$userName}' AND pwd ='{$password}' LIMIT 1");
    $row=mysqli_fetch_array($query);
    $type=$row['emp_status'];

    $isexist=mysqli_query($connection,"SELECT * FROM div_manager WHERE email='{$userName}' AND pwd ='{$password}' LIMIT 1");
    $check_user=mysqli_num_rows($isexist);

    if($check_user==1){
      $_SESSION["type"]=$row['emp_status'];
      $_SESSION["userName"]=$row['email'];

      $user=mysqli_fetch_assoc($isexist);
      $_SESSION["first_name"]=$user['first_name'];
      $_SESSION["last_name"]=$user['last_name'];
      
      if($type=="Divisional_Manager"){
        header('Location: manager_home.php');
      }
    }else{
      echo "<script>alert('Invalid Username or Password');</script>";
    }

  }
?>

<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style_sign_in.css">
  </head>
  <body>
    <div class="loginBox">
      <img src="img/login.png" class="icon">
        <h1>Login Here</h1>
        <form name="loginForm" action="sign_in_divman.php"  method="post">
          <p>Username</p>
          <input type="text" name="userName" placeholder="Enter Username" required>
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password" required>
          <input type="submit" name="submit" value="Login">
        </form> 
    </div>

  </body>
</html>