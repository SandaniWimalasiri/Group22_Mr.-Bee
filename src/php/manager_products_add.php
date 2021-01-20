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
        <h1>Add a Product</h1>
        <br>
        <form class="f1" action='manager_products_add.php' method="get">
               
               <table  class="div_man">
                   
                   
   
                   <tr>
                       <th><label>product name</label></td>
                       <td><input type="text" placeholder="Enter product name" name="pname" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>Description</label></td>
                       <td><input type="text" placeholder="Enter type of the product" name="descr" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>Discounted price</label></td>
                       <td><input type="text" placeholder="Enter discounted price" name="price" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>price</label></td>
                       <td><input type="text" placeholder="Enter price" name="rrp" required >
                   </tr>

                   <tr>
                       <th><label>quantity in list</label></td>
                       <td><input type="text" placeholder="Enter quantity in list" name="quantity" required >
                   </tr>

                   <tr>
                       <th><label>Image</label></td>
                       <td><input type="text" placeholder="Enter image of the product " name="img" required >
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
           
           
           $sql="INSERT INTO products (pname, descr, price, rrp,quantity,img) VALUES('".$_GET['pname']."','".$_GET['descr']."','".$_GET['price']."','".$_GET['rrp']."','".$_GET['quantity']."','".$_GET['img']."')";
           //$result=mysqli_query($connection,$sql);
           $result=$connection->query($sql);
           //print_r($result);
           if($result){
               //echo "Successful";
                echo '<script> alert("Successfully Inserted"); </script>';
           }else{
                echo '<script> alert("Insertion Failed"); </script>';
           }
       }
                     
  
?>



   
    