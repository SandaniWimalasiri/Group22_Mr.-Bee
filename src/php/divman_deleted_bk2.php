<?php require_once("../../config/connect.php"); ?>


<?php
                if(isset($_POST['replace1']))
                {
                    $userID = $_POST['userID'];
                
                    $query = "UPDATE beekeeper SET is_deleted=0 WHERE userID='$userID' ";
                    $query_run = mysqli_query($connection, $query);
                
                    if($query_run)
                    {
                        echo "Data replaced";  
                        // echo '<script> alert("Data Deleted"); </script>';
                        header("location:divman_deleted_bk.php");
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
                    $userID = $_POST['userID'];
                
                    $query = "DELETE FROM beekeeper WHERE userID='$userID' ";
                    $query_run = mysqli_query($connection, $query);
                
                    if($query_run)
                    {
                        echo "Data Deleted from the database";  
                        // echo '<script> alert("Data Deleted"); </script>';
                        header("location:divman_deleted_bk.php");
                    }
                    else
                    {
                        echo '<script> alert("Data Not Deleted"); </script>';
                    }
                }
        ?>