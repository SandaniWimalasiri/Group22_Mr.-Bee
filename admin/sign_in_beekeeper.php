
<?php require_once("connect.php"); ?>
<?php
  session_start();

  if(isset($_POST['submit'])){
    //save username and password into variables
    $userName =mysqli_real_escape_string($connection,$_POST['userName']);
    $password =mysqli_real_escape_string($connection,$_POST['password']);

    //prepare database query
    //use "bEmail" as username and "bPassword" as password in "beekeeper" table
    $query=mysqli_query($connection,"SELECT * FROM beekeeper WHERE bbEmail='{$userName}' AND bPassword ='{$password}' LIMIT 1");
    $row=mysqli_fetch_array($query);
    $type=$row['emp_status'];

    //use "bEmail" as username and "bPassword" as password in "beekeeper" table
    $isexist=mysqli_query($connection,"SELECT * FROM beekeeper WHERE bEmail='{$userName}' AND bPassword ='{$password}' LIMIT 1");
    $check_user=mysqli_num_rows($isexist);

    if($check_user==1){
      $_SESSION["type"]=$row['emp_status'];
      $_SESSION["userName"]=$row['bEmail'];

      $user=mysqli_fetch_assoc($isexist);
      $_SESSION["first_name"]=$user['first_name'];
      $_SESSION["last_name"]=$user['last_name'];
      
      if($type=="Bee-keeper"){
        //redirect to beekeeper page 
        header('Location: beekeeperindex.php');
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
        <form name="loginForm" action="sign_in_beekeeper.php"  method="post">
          <p>Username</p>
          <input type="text" name="userName" placeholder="Enter Username" required>
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password" required>
          <input type="submit" name="submit" value="Login">
        </form> 
    </div>

  </body>
</html>