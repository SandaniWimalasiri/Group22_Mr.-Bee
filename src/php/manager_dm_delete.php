<?php require_once("../../config/connect.php"); ?>
<?php session_start(); 

     
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

