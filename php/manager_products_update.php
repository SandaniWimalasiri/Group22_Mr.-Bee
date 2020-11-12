<?php include('manager_alignments.php')?>


    <head>
        
        <title>Manager_home</title>
        <link rel="stylesheet" type="text/css" href="../css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../css/style_manager_remove_dm.css">

    </head>

<body>
    

         <!--start of welcomeBox-->
         <div class="welcomeBox">       
            <a href="manager_home.php"><img src="../img/manager2.jpg" class="icon"></a>
            <h1>Products Management</h1>
        </div>                           <!--end of welcomeBox-->

        <div class="content2"> 
            <?php
                $product_code=$_POST['product_code'];

                $query = "SELECT * FROM products WHERE product_code='$product_code' ";
                $query_run = mysqli_query($connection, $query);

                if($query_run){
                    while($row = mysqli_fetch_array($query_run)){
                    ?>
                        <h1 >Update Products' Details</h1>
                        <form class="f1" action="" method="post">

                        <input type="hidden" name="product_code" value="<?php echo $row['product_code']; ?>">
                            
                            <table class="div_man">
                            <tr>
                                <th><label>product code</label></th>
                                <td><input type="text" name="product_code" value="<?php echo $row['product_code'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>product name</label></th>
                                <td><input type="text" name="product_name" value="<?php echo $row['product_name'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>type of product</label></th>
                                <td><input type="text" name="type_of_product" value="<?php echo $row['type_of_product'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>price</label></th>
                                <td><input type="text" name="price" value="<?php echo $row['price'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>amount in list</label></th>
                                <td><input type="text" name="amount" value="<?php echo $row['amount'] ?>"></td>
                            </tr>
                            </table>
                            <br/>

                            <button class="btn6" type="submit" name="update"><b>Update</b></button>
                        </form>
           
                        <button class="btn6" type="submit" name="back" onclick="document.location='manager_products_view.php'"><b>Back</b></button>

                        <?php
                                if(isset($_POST['update']))
                                {
                                    $product_code = $_POST['product_code'];
                                    $product_name = $_POST['product_name'];
                                    $type_of_product = $_POST['type_of_product'];
                                    $price = $_POST['price'];
                                    $amount = $_POST['amount'];


                                    $query = "UPDATE products SET product_code='$product_code', product_name='$product_name', type_of_product=' $type_of_product', price='$price', amount='$amount'  WHERE product_code='$product_code'  ";
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
                   
                }
                ?>
        </div>               <!--end content2-->

        
</body>

