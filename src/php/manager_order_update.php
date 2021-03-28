

<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>





<html>
    <head>
        
        <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>

<body>
       
    <div class="content"> 
            <?php
                $order_id=$_POST['order_id'];

                $query = "SELECT * FROM orders WHERE order_id='$order_id'";
                $query_run = mysqli_query($connection, $query);

                if($query_run){
                    while($row = mysqli_fetch_array($query_run)){
                    ?>

                        <h1 >Update Order Details</h1>
                        <br>
                        <button class="btn6" type="submit" name="back" onclick="document.location='manager_orders.php'"><<<b>Back</b></button> 
                        </br>
                            
                        <form class="f1" method="post" action="">
                        </br>
                            <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
                            
                            <table class="div_man">
                            <tr>
                                <th><label>Order ID</label></th>
                                <td><input type="text" name="order_id" placeholder="Order ID" value="<?php echo $row['order_id'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Product name</label></th>
                                <td><input type="text" name="Product_name" placeholder="Product name" value="<?php echo $row['product_name'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Product Id</label></th>
                                <td><input type="text" name="product_id" placeholder="product_id" value="<?php echo $row['product_id'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Customer name</label></th>
                                <td><input type="text" name="cus_name" placeholder="cus_name" value="<?php echo $row['cus_name'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Customer ID</label></th>
                                <td><input type="text" name="customer_id" placeholder="customer_id" value="<?php echo $row['customer_id'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Address</label></th>
                                <td><input type="text" name="address" placeholder="address" value="<?php echo $row['address'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Email</label></th>
                                <td><input type="email" name="email" placeholder="email" value="<?php echo $row['email'] ?> " readonly></td>
                            </tr>
                            <tr>
                                <th><label>TP No.</label></th>
                                <td><input type="text" name="tp" placeholder="TP No" value="<?php echo $row['tp'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Order Date</label></th>
                                <td><input type="text" name="order_date" placeholder="order_date" value="<?php echo $row['order_date'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>Complete Date</label></th>
                                <td><input type="date" name="complete_date"></td>
                            </tr>
                            <tr>
                                <th><label>Order Status</label></th>
                                <td>    
                                        <select name="od_status" id="od_status" value="<?php echo $row['od_status'] ?>">
                                            <option value="on-going">on-going</option>
                                            <option value="completed">completed</option>
                                        </select>
                                </td>
                            </tr>
                            
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="update"><b>Submit</b></button>
                            
                        </form>
                    <?php    
                    }   
                    ?>    

                        <?php
                                if(isset($_POST['update']))
                                {
                                    $complete_date = $_POST['complete_date'];
                                    $od_status = $_POST['od_status'];
                                    
                                    $query = "UPDATE orders SET complete_date='$complete_date', od_status='$od_status'  WHERE order_id='$order_id'  ";
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
                    ?>
                        <?php
                    
                   
                }
                ?>
        </div>               <!--end content2-->

        
</body>
</html>
