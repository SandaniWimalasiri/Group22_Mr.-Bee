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

                        <form class="f1" action="manager_products_update.php" method="post">
                        </br>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            
                            <table class="div_man">
                            <tr>
                                <th><label>product name</label></th>
                                <td><input type="text" name="pname" value="<?php echo $row['pname'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>product Description</label></th>
                                <td><input type="text" name="descr" value="<?php echo $row['descr'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Discounted Price (Rs.)</label></th>
                                <td><input type="text" name="rrp" value="<?php echo $row['rrp'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>price</label></th>
                                <td><input type="text" name="price" value="<?php echo $row['price'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>quantity</label></th>
                                <td><input type="text" name="quantity" value="<?php echo $row['quantity'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>image</label></th>
                                <td><input type="text" name="img" value="<?php echo $row['img'] ?>"></td>
                            </tr>
                            
                            </table>
                            <br/>

                            <button class="btn6" type="submit" name="update"><b>Update</b></button>
                        </form>
           
                    <?php }   ?> 
                        <?php
                                if(isset($_POST['update']))
                                {
                                    $pname = $_POST['pname'];
                                    $descr = $_POST['descr'];
                                    $price = $_POST['price'];
                                    $rrp = $_POST['rrp'];
                                    $quantity = $_POST['quantity'];
                                    $img = $_POST['img'];

                                    $query = "UPDATE products SET pname='$pname',descr='$descr', price='$price', rrp='$rrp', quantity='$quantity', img='$img'  WHERE id='$id'  ";
                                    $query_run = mysqli_query($connection, $query);

                                    if($query_run)
                                    {
                                        echo '<script> alert("Data Updated Successfully"); </script>';
                                        header("location:manager_products_view.php");
                                    }
                                    else
                                    {
                                        echo '<script> alert("Data Not Updated"); </script>';
                                    }
                                }
                        ?>
                        <?php
                    
                   
                }
                ?>
        </div>               <!--end content2-->

        
</body>

