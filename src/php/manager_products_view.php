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
        <button class="btn6" type="submit" name="back" onclick="document.location='manager_products.php'"><b>Back</b></button>
        <br>
        <center>
            <br>
            
                <table class="div_man">
                    <tr>
                        <th>Product code</th>
                        <th>Product name</th>
                        <th>Description</th>
                        <th>Discounted Price (Rs.)</th>
                        <th>Price (Rs.)</th>
                        <th>quantity</th>
                        <th>image</th>
                        <th>date-added</th>

                        <th>Edit</th>
                        <th>Delete</>
                    </tr>
                        <?php 
                        $sql = "SELECT * FROM products WHERE is_deleted=0;";
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
                            <form action="manager_products_update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                                    <td><button class="btn8" type="submit">Edit</a></td>
                            </form>
                            <form action="manager_products_delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                                    <td><button class="btn7" type="submit" name="delete" onclick="return confirm('Are you sure?')">Delete</a></td>
                            </form>
                        </tr>
                        <?php
                        }
                        ?>

                </table>
               
            </center>
            <br>
            
        </div>
</body>