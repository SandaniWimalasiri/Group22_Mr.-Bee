<?php require_once("../../config/connect.php"); ?>
<?php session_start(); 

        if(!$_SESSION['userName']){
            header('Location: sign_in.php');
        }
?>

<?php
            if(isset($_POST['delete']))
            {
                $product_code = $_POST['product_code'];
            
                $query = "DELETE FROM products WHERE product_code='$product_code' ";
                $query_run = mysqli_query($connection, $query);
            
                if($query_run)
                {
                    echo '<script> alert("Data Deleted from the database"); </script>';
                    header("location:manager_products_removed.php");
                    
                }
                else
                {
                    echo '<script> alert("Data Not Deleted"); </script>';
                }
            }
        ?>

        <?php
                if(isset($_POST['replace']))
                {
                    $product_code = $_POST['product_code'];
                
                    $query = "UPDATE products SET is_deleted=0 WHERE product_code='$product_code' ";
                    $query_run = mysqli_query($connection, $query);
                
                    if($query_run)
                    {
                        echo '<script> alert("Data replaced"); </script>';
                        header("location:manager_products_removed.php");
                        
                    }
                    else
                    {
                        echo '<script> alert("Data Not replaced"); </script>';
                    }
                }
        ?>