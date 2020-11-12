<?php require_once("../db_connection/connect.php"); ?>
<?php session_start(); 

        if(!$_SESSION['userName']){
            header('Location: sign_in.php');
        }
?>
<?php
   if(isset($_POST['delete']))
   {
       $div_id = $_POST['div_id'];
   
       $query = "UPDATE div_manager SET is_deleted=1 WHERE div_id='$div_id' ";
       $query_run = mysqli_query($connection, $query);
   
       if($query_run)
       {
           echo "data deleted";  
        // echo '<script> alert("Data Deleted"); </script>';
           header("location:manager_dm.php");
       }
       else
       {
           echo '<script> alert("Data Not Deleted"); </script>';
       }
   }
?>

