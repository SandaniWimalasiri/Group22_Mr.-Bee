<?php require_once('../../config/connect.php'); 
session_start();

$currentpassword_error=$newpassword_error=$repassword_error="";
$currentpassword=$newpassword=$repassword="";

    if(isset($_POST['enter'])){
 
        if (empty($_POST["currentpassword"])) {
            $currentpassword_error = "</br>*Current Password is required";
          }else {

            $currentpassword = test_input($_POST["currentpassword"]);

            $sql = "SELECT userPassword FROM beekeeper WHERE  userID='".$_SESSION['userid']."'";
            $result = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_array($result))
            {
              if($row['userPassword']!== $currentpassword){
              $currentpassword_error = "</br>*Invalid Password";
            }

  
           }
          }

       if (empty($_POST["newpassword"])) {
            $newpassword_error = "</br>*New Password is required";
          } else {
            $newpassword = test_input($_POST["newpassword"]);
          }
       if (empty($_POST["repassword"])) {
            $repassword_error = "</br>*Re-enter new password";
          } else {
            $repassword = test_input($_POST["repassword"]);

            if($newpassword!== $repassword){
              $repassword_error = "</br>*Please re-enter correct new password";
            }
              else{
                if (strlen($_POST["newpassword"]) <= '8') {
                  $newpassword_error = "<br/>*Your Password Must Contain At Least 8 Characters";
                }
                elseif(!preg_match("#[0-9]+#",$newpassword)) {
                  $newpassword_error= "<br/>*Your Password Must Contain At Least 1 Number";
                }
                elseif(!preg_match("#[A-Z]+#",$newpassword)) {
                  $newpassword_error = "<br/>*Your Password Must Contain At Least 1 Capital Letter";
                }
                elseif(!preg_match("#[a-z]+#",$newpassword)) {
                  $newpassword_error = "<br/>*Your Password Must Contain At Least 1 Lowercase Letter";
                }
                

            }   
          }  

             
          
      if($currentpassword_error=='' and $newpassword_error=='' and $repassword_error=='' ){
        
        $sql2= "UPDATE beekeeper SET userPassword ='".$_POST['newpassword']."'where userID='".$_SESSION['userid']."'";
        $result2 = mysqli_query($connection,$sql2);
        $sql3 = "SELECT userPassword  FROM beekeeper where userID='".$_SESSION['userid']."'";
        $result3 = mysqli_query($connection,$sql3);
        $row=mysqli_fetch_assoc($result3);


        if($result){

          echo '<script>';
          echo 'alert("Password Changed Successfully");';
          echo 'window.location.href = "bk_updatepassword.php";';
          echo '</script>';
          die();
        }

        else{

          echo '<script>';
          echo 'alert("Failed");';
          echo 'window.location.href = "bk_updatepassword.php";';
          echo '</script>';
          die();
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

      <title>change password</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body  >
      

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>


<div class="main">
    <div class="bhivecontainer">
  
        <form method="post" action="bk_updatepassword.php" >
        <p >Change Password</p>
        </br>
    </br>
        <div class="row">
        <div class="col1">
        <label for="currentpassword">Current Password</label>
        </div>
    <div class="col2">
        <input type="password" name="currentpassword"  placeholder="Current Password" value="<?= $currentpassword?>" autofocus>
        <span class="error"><?= $currentpassword_error?></span>
    </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="newpassword">New Password</label>
        </div>
    <div class="col2">
        <input type="password" name="newpassword"  placeholder="New Password" value="<?= $newpassword?>" autofocus>
        <span class="error"><?= $newpassword_error?></span>
    </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="repassword">Re-Enter Password</label>
        </div>
    <div class="col2">
        <input type="password" name="repassword"  placeholder="Re-enter Password" value="<?= $repassword?>" autofocus>
        <span class="error"><?= $repassword_error?></span>
    </div>
        </div>
        <br/>

        <div class="row">
        <div class="c1" style="width: 870px">
        <input type="submit" value="Change Password" name="enter" >
        </div>
        </form>


<form  action="bk_profile.php" method="post" >
        <div class="c2" style="width: 90px">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </div>
        </form>

    </div>
    
<br />
<br />
</div>  
 
  </body>
</html>