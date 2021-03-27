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
        <h1 >Order Status :Completed</h1>
        <br>
        <button class="btn6" type="submit" name="back" onclick="document.location='manager_orders.php'"><<<b>Back</b></button> 
        
            <br><br><br> <br> 
                    <center>
                    <form action="manager_order_complete.php" method="GET">
                <table class="div_man">
                    <tr>
                        <th>Order ID</th>
                        <th>Product name</th>
                        <th>Product ID</th>
                        <th>Customer name</th>
                        <th>Customer ID</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>TP No.</th>
                        <th>Order Date</th>
                        <th>Complete Date</th>
                        <th>Status</th>
                        
                        
                    </tr>
                    <?php 
                    
                    $sql = "SELECT * FROM orders WHERE od_status='completed'  ORDER BY complete_date DESC";
                    
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
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['tp'] ?></td>
                            <td><?php echo $result['order_date'] ?></td>
                            <td><?php echo $result['complete_date'] ?></td>
                            <td><?php echo $result['od_status'] ?></td>
                           
                        
                    </tr>
                    <?php
                         }
                    
                ?>
                </table>
               <br><br><br>
                   
                </form>
                
            </center>
               
        </div>               <!--end content-->

        <!--start of footer-->
        <footer>    
            <h3></h3>
        </footer>   <!--end of footer-->

       
       

    </body>

   