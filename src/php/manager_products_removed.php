<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>


    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>
    <body>
   
      
        
      
       

        <div class="content"> 

        <center>
            <br>
            <h2>Products' Details</h2>
                <table class="div_man">
                    <tr>
                        <th>product ID</th>
                        <th>product name</th>
                        <th>Description</th>
                        <th>Discounted price</th>
                        <th>Price (Rs.)</th>
                        <th style="text-align:center;">quantity</th>
                        <th>Image</th>
                        <th>Date-Added</th>
                        <th style="text-align:center;">Replace</th>
                        <th style="text-align:center;">Remove</th>
                    </tr>
                        <?php 
                        $sql = "SELECT * FROM products WHERE is_deleted=1;";
                        $query = $connection->query($sql);
                        while ($result = $query->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['pname'] ?></td>
                            <td><?php echo $result['descr'] ?></td>
                            <td><?php echo $result['price'] ?></td>
                            <td><?php echo $result['rrp'] ?></td>
                            <td><?php echo $result['quantity'] ?></td>
                            <td><?php echo $result['img'] ?></td>
                            <td><?php echo $result['date_added'] ?></td>
                            <form action="manager_products_removed2.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                                    <td style="text-align:center;"><button class="btn8" type="submit" name="replace">Replace</a></td>
                            </form>
                            <form action="manager_products_removed2.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                                    <td style="text-align:center;"><button class="btn7" type="submit" name="delete" onclick="return confirm('Are you sure? This will permenantly delete the data')">Remove</a></td>
                            </form>
                        </tr>
                        <?php
                        }
                        ?>

                </table>
               
            </center>
        
            <br>
            <button class="btn6" type="submit" name="back" onclick="document.location='manager_dm.php'"><b>Back</b></button>
        </div>
        
    </body>