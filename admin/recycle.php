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
            
                $query = "DELETE FROM products WHERE product_code='$product_code' ";
                $query_run = mysqli_query($connection, $query);
            
                if($query_run)
                {
                    echo '<script> alert("Data Deleted from the database"); </script>';
                    header("location:manager_recycle.php");
                    
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
                        header("location:manager_recycle.php");
                        
                    }
                    else
                    {
                        echo '<script> alert("Data Not replaced"); </script>';
                    }
                }
        ?>

        <?php
                if(isset($_POST['replace1']))
                {
                    $div_id = $_POST['div_id'];
                
                    $query = "UPDATE div_manager SET is_deleted=0 WHERE div_id='$div_id' ";
                    $query_run = mysqli_query($connection, $query);
                
                    if($query_run)
                    {
                        echo "Data replaced";  
                        // echo '<script> alert("Data Deleted"); </script>';
                        header("location:manager_recycle.php");
                    }
                    else
                    {
                        echo '<script> alert("Data Not replaced"); </script>';
                    }
                }
        ?>

        <?php
                if(isset($_POST['delete1']))
                {
                    $div_id = $_POST['div_id'];
                
                    $query = "DELETE FROM div_manager WHERE div_id='$div_id' ";
                    $query_run = mysqli_query($connection, $query);
                
                    if($query_run)
                    {
                        echo "Data Deleted from the database";  
                        // echo '<script> alert("Data Deleted"); </script>';
                        header("location:manager_recycle.php");
                    }
                    else
                    {
                        echo '<script> alert("Data Not Deleted"); </script>';
                    }
                }
        ?>