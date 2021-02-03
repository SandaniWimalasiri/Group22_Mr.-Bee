<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>


    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">

    </head>
    <body>
        

        

         <!--start content-->
        <div class="content">   
                    <div class="dropdown">
                        <button class="dropbtn">Order Details </button>
                        <div class="dropdown-content">
                            <a href="">Ongoing Orders</a>
                            
                            <a href="">completed orders</a>
                            </form>
                            
                        </div>
                    </div>
            <br><br><br> <br> 
                    <center>
                    <form action="manager_orders.php" method="post">
                <table class="div_man">
                    <tr>
                        <th>Order ID</th>
                        <th>Product name</th>
                        <th>Product ID</th>
                        <th>Customer name</th>
                        <th>Customer ID</th>
                        <th>Address</th>
                        <th>Order Date</th>
                        <th>Complete Date</th>
                        <th>Status</th>
                        
                    </tr>
                    <?php 
                    
                    $sql = "SELECT * FROM orders";
                    
                    $query=mysqli_query($connection,$sql);
                    verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                            <td><?php echo $result['order_id'] ?></td>
                            <td><?php echo $result['product_name'] ?></td>
                            <td><?php echo $result['product_id'] ?></td>
                            <td><?php echo $result['cus_name'] ?></td>
                            <td><?php echo $result['customer_id'] ?></td>
                            <td><?php echo $result['address'] ?></td>
                            <td><?php echo $result['order_date'] ?></td>
                            <td><input type="date" name="complete_date" value="<?= $complete_date?>" ></td>
                            <td><select name="status" id="status" value="<?= $status?>">
                                            <option value="on-going">on-going</option>
                                            <option value="completed">completed</option>
                                </select>
                            </td>
                            
                    
                    </tr>
                    <?php
                         }
                    
                ?>
                </table>
               <br><br><br>
                    <button class="btn6" type="submit" name="add"><b>Save</b></button>
                </form>
                
            </center>
               
        </div>               <!--end content-->

        <!--start of footer-->
        <footer>    
            <h3></h3>
        </footer>   <!--end of footer-->

       
       

    </body>

    <?php
                                
                                if(isset($_POST['add'])){
                                    //echo "Done";                                                                                                 
                                    $complete_date = $_POST['complete_date'];
                                    $status = $_POST['status'];
                                    $order_id = $_POST['order_id'];
                                    
                                    $sql = "UPDATE orders SET complete_date='$complete_date',status='$status'  WHERE order_id='$order_id'  ";
                                    
                                    $result=mysqli_query($connection,$sql);
    
                                    
                                    //$result=$connection->query($sql);
                                    //print_r($result);
                                    if($result){
                                        //echo "Successful";
                                        // header( 'Location: manager_dm_add.php ');
                                        echo '<script> alert("Successfully Inserted"); </script>';
                                    }else{
                                            echo '<script> alert("Insertion Failed"); </script>';
                                    }
                                }
                    ?>