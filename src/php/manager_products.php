<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>

<?php
			if(isset($_POST['delete'])){
				$sql = "DELETE FROM products WHERE id = '{$_POST['id']}';";
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
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_products.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">

    </head>
    <body>
       

       

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
                        <th>Description</th>
                        <th>Price (Rs.)</th>
                        <th>Discounted Price (Rs.)</th>
                        <th>Amount in list</th>
                        <th>image</th>
                        <th>date-added</th>
                        <th>Edit</th>
                        <th>Delete</>
                        
                        </tr>";
                        $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM products WHERE id='{$_POST['code']}' OR name='{$_POST['code']}' OR type_of_product='{$_POST['code']}' OR amount='{$_POST['code']}' ;";
                        $query = $connection->query($sql);
                        while ($result = $query->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['name'] ?></td>
                            <td><?php echo $result['desc'] ?></td>
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
                <?php
                         
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
