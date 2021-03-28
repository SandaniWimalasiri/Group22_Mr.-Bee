<?php require_once("../../config/connect.php"); ?>


<?php
            if(isset($_POST['delete']))
            {
                $id = $_POST['id'];
            
                $query = "DELETE FROM products WHERE id='$id' ";
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
                    $id = $_POST['id'];
                
                    $query = "UPDATE products SET is_deleted=0 WHERE id='$id' ";
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