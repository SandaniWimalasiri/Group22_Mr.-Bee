<?php include('manager_alignments.php')?>

<?php
			if(isset($_POST['delete'])){
				$sql = "DELETE FROM products WHERE product_code = '{$_POST['product_code']}';";
				$result = mysqli_query($connection,$sql);
				if($result){
				    header("Location:manager_products.php ");
				}
				else{
                    echo "failed";
				}
			}
?>

<php >
    <head>
        
        <title>manager_products</title>
        <link rel="stylesheet" type="text/css" href="css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="css/style_manager_products.css">
        <link rel="stylesheet" type="text/css" href="css/style_manager_remove_dm.css">

    </head>
    <body>
       

         <!--start of welcomeBox-->
        <div class="welcomeBox">       
            <a href="manager_home.php"><img src="img/manager2.jpg" class="icon"></a>
            <h1>Products Management</h1>
            <table class="nav_table" border="0" width="100%" align="left" cellpadding="10" cellspacing="0">
                    <tr>
                        <td><a href="manager_dm.php">Divisional Manager</a></td>
                        <td><a href="manager_view_reports.php">Reports</a></td>
                        <td><a href="manager_products.php">Products</a></td>
                        <td><a href="manager_recycle.php">Recycle Bin</a></td>
                        <td><a href="manager_infohub.php">Infomation Forum</a></td>
                        
                        <td width="30%">&nbsp;</td>
                        
                    </tr>
                </table>
        </div>                           <!--end of welcomeBox-->

       

         <!--start content-->
        <div class="content">      
             <div class="viewform">
                    
                        <button class="btn6" onclick="document.location=''">Go To Cart</button>   <!--go to products view page-->
                        <button class="btn6" type="submit" name="submit" onclick="document.location='manager_products_add.php'">Add Item</button>
                        <button class="btn6" type="submit" name="submit" onclick="document.location='manager_products_view.php'">Product List</button>
                    
                    <br>
             </div>  
            
            <center>
                <div class="viewform">
                    <form method="post">
                        <br><br>
                        <label> Search  </label>
                        <input type="text" name="code">
                        
                        <button class="btn6" type="submit" name="view"><b>View</b></button>
                        
                       
                    </form>
                </div>    		
              </center>

            <table class="div_man">
                
                
                <?php
                    if(isset($_POST['view'])){
                        echo"<tr>
                        <th>Product code</th>
                        <th>Product name</th>
                        <th>Type of product</th>
                        <th>Price (Rs.)</th>
                        <th>Amount in list</th>
                        <th>Edit</th>
                        <th>Delete</>
                        
                        </tr>";
                        $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM products WHERE product_code='{$_POST['code']}' OR product_name='{$_POST['code']}' OR type_of_product='{$_POST['code']}' OR amount='{$_POST['code']}' ;";
                        $query = $connection->query($sql);
                        while ($result = $query->fetch_assoc()){
                ?>
                        <tr>
                            <td><?php echo $result['product_code'] ?></td>
                            <td><?php echo $result['product_name'] ?></td>
                            <td><?php echo $result['type_of_product'] ?></td>
                            <td><?php echo $result['price'] ?></td>
                            <td><?php echo $result['amount'] ?></td>
                            <form action="manager_products_update.php" method="post">
                                    <input type="hidden" name="product_code" value="<?php echo $result['product_code']; ?>">
                                    <td><button class="btn8" type="submit">Edit</a></td>
                            </form>
                            <form action="manager_products_delete.php" method="post">
                                    <input type="hidden" name="product_code" value="<?php echo $result['product_code']; ?>">
                                    <td><button class="btn7" type="submit" name="delete" onclick="return confirm('Are you sure?')">Delete</a></td>
                            </form>
                        </tr>
                <?php
                         }
                    }
                ?>

            </table>

              
        </div>               <!--end content-->

       

        <!--start of footer-->
        <footer>    
            <h3></h3>
        </footer>   <!--end of footer-->

    </body>
</php>
