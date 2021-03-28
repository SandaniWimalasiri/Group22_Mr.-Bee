<?php require_once("../../config/connect.php"); ?>

<?php
   if(isset($_POST['delete']))
   {
       $id = $_POST['id'];
   
       $query = "UPDATE products SET is_deleted=1 WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);
   
       if($query_run)
       {
           echo '<script> alert("Data Deleted"); </script>';
           header("location:manager_products_view.php");
           
       }
       else
       {
           echo '<script> alert("Data Not Deleted"); </script>';
       }
   }
?>

