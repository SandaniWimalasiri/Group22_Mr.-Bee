<?php require_once("../../config/connect.php");
require_once("func.php"); ?>

<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>



    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>

    <style>
    
    </style>
<body>
   

        

        <div class="content"> 
            <?php
                $id=$_POST['id'];

                $query = "SELECT * FROM products WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                if($query_run){
                    while($row = mysqli_fetch_array($query_run)){
                    ?>
                        <h1 >Update Products' Details</h1>
                        <button class="btn6" type="submit" name="back" onclick="document.location='manager_products_view.php'"><<<b>Back</b></button>

                        <form class="f1" action="manager_products_update.php" method="post" enctype="multipart/form-data">
                        </br>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            
                            <table class="div_man">
                            <tr>
                                <th><label>product name</label></th>
                                <td><textarea placeholder="product name" name="pname" value=""><?php echo $row['pname'] ?></textarea></td>
                            </tr>
                            <tr>
                                <th><label>product Description</label></th>
                                <td><div class="des"><textarea placeholder="product Description" name="descr" value="" rows="20" cols="50"><?php echo $row['descr'] ?></textarea></div></td>
                            </tr>
                            <tr>
                                <th><label>Discounted Price (Rs.)</label></th>
                                <td><input type="text" name="price" value="<?php echo $row['price'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>price</label></th>
                                <td><input type="text" name="rrp" value="<?php echo $row['rrp'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>quantity</label></th>
                                <td><input type="text" name="quantity" value="<?php echo $row['quantity'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>image</label></th>
                                <td><input type="file" name="img" ><br><span><?php echo $row['img']?></span></td>
                            </tr>
                            
                            </table>
                            <br/>

                            <button class="btn6" type="submit" name="update"><b>Update</b></button>
                        </form>
           
                    <?php 
                        }   
                    
                    
                                if(isset($_POST['update']))
                                {
                                    $pname = $_POST['pname'];
                                    $descr = $_POST['descr'];
                                    $price = $_POST['price'];
                                    $rrp = $_POST['rrp'];
                                    $quantity = $_POST['quantity'];

                                    //adding a image
                                    //declaring variables
                                    
                                    $filename = $_FILES['img']['name'];
                                    $filetmpname = $_FILES['img']['tmp_name'];
                                    //folder where images will be uploaded
                                    $folder = '../../public/img/products/';
                                    //function for saving the uploaded images in a specific folder
                                    move_uploaded_file($filetmpname, $folder.$filename);
                                   

                                    $query = "UPDATE products SET pname='$pname',descr='$descr', price='$price', rrp='$rrp', quantity='$quantity',img='$filename'  WHERE id='$id'  ";
                                    $query_run = mysqli_query($connection, $query);

                                    if($query_run)
                                    {
                                        echo '<script> alert("Data Updated Successfully"); </script>';
                                       
                                    }
                                    else
                                    {
                                        echo '<script> alert("Data Not Updated"); </script>';
                                    }
                                }

                        
                   
                }
                ?>
        </div>               <!--end content2-->

        
</body>

