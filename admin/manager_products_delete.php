<?php require_once("db/db.php"); ?>
<?php session_start(); 

        if(!$_SESSION['userName']){
            header('Location: sign_in.php');
        }
?>
<?php
   if(isset($_POST['delete']))
   {
       $product_code = $_POST['product_code'];
   
       $query = "UPDATE products SET is_deleted=1 WHERE product_code='$product_code' ";
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

