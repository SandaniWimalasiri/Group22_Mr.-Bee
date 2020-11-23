<?php require_once("../../config/connect.php"); ?>
<?php session_start(); 
  if(!$_SESSION['email']){
            header('Location: sign_in_divman.php');
        }
?>
<?php
   if(isset($_POST['delete']))
   {
       $userID = $_POST['userID'];
   
       $query = "DELETE FROM beekeeper WHERE userID='$userID' ";
       $query_run = mysqli_query($connection, $query);
   
       if($query_run)
       {
           echo "data deleted";  
        // echo '<script> alert("Data Deleted"); </script>';
           header("location:divman.php#beekeeper");
       }
       else
       {
           echo '<script> alert("Data Not Deleted"); </script>';
       }
   }
?>

