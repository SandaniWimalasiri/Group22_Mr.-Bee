<?php include('manager_alignments.php')?>


    <head>
        
        <title>manager_products</title>
        <link rel="stylesheet" type="text/css" href="css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="css/style_manager_remove_dm.css">

    </head>
    <body>
       

        <!--start of welcomeBox-->
        <div class="welcomeBox">       
            <a href="manager_home.php"><img src="img/manager2.jpg" class="icon"></a>
            <h1>Products Management</h1>
        </div>                           <!--end of welcomeBox-->

        <div class="content2">
        <h1>Add a Product</h1>
        <form class="f1" action='manager_products_add.php' method="get">
               
               <table  class="div_man">
                   
                   <tr>
                       <th><label>product code</label></td>
                       <td> <input type="text" placeholder="Enter product code" name="product_code" required></td>
                   </tr>
   
                   <tr>
                       <th><label>product name</label></td>
                       <td><input type="text" placeholder="Enter product name" name="product_name" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>type of product</label></td>
                       <td><input type="text" placeholder="Enter type of the product" name="type_of_product" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>price</label></td>
                       <td><input type="text" placeholder="Enter price" name="price" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>amount in list</label></td>
                       <td><input type="text" placeholder="Enter amount of products in list" name="amount" required >
       <br></br></td>
                   </tr>
               </table>

               <br>
            <button class="btn6" type="submit" name="add"><b>Add</b></button>
            <button class="btn6" type="reset" class="cancelbtn"><b>Cancel<b></button>
            <button class="btn6" type="submit" name="back" onclick="document.location='manager_products_view.php'"><b>Back</b></button> 
    
        </form> 
        
            
        </div>
        
    </body>
<?php
        
        if(isset($_GET['add'])){
           //echo "Done";                                                                                                 
           
           
           $sql="INSERT INTO products (product_code, product_name, type_of_product, price, amount) VALUES('".$_GET['product_code']."','".$_GET['product_name']."','".$_GET['type_of_product']."','".$_GET['price']."','".$_GET['amount']."')";
           //$result=mysqli_query($connection,$sql);
           $result=$connection->query($sql);
           //print_r($result);
           if($result){
               //echo "Successful";
               header( 'Location: manager_products_add.php ');
           }else{
               echo "failed";
           }
       }
                     
  
?>



   
    