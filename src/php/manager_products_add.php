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
        
        <form class="f1" action='manager_products_add.php' method="post" enctype="multipart/form-data">
               
               <table  class="div_man">
                   
                   
   
                   <tr>
                       <th><label>Product name</label></td>
                       <td><input type="text" placeholder="Enter product name" name="pname" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>Description</label></td>
                       <td><div class="des"><textarea placeholder="product Description" name="descr" value="" rows="20" cols="50"></textarea></div></td>
                   </tr>
   
                   <tr>
                       <th><label>Discounted price</label></td>
                       <td><input type="text" placeholder="Enter discounted price" name="price" required ></td>
                   </tr>
   
                   <tr>
                       <th><label>Price</label></td>
                       <td><input type="text" placeholder="Enter price" name="rrp" required ></td>
                   </tr>

                   <tr>
                       <th><label>Quantity in list</label></td>
                       <td><input type="text" placeholder="Enter quantity in list" name="quantity" required ></td>
                   </tr>
                   <tr>
                        <th><label>Image</label></th>
                        <td><input type="file" name="img" required />
                        <br></br>
                       
                        </td>
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
        
        if(isset($_POST['add'])){
           //echo "Done";                                                                                                 
           $filename = $_FILES['img']['name'];
           $filetmpname = $_FILES['img']['tmp_name'];
           //folder where images will be uploaded
           $folder = '../../public/img/products/';
           //function for saving the uploaded images in a specific folder
           

           $sql="INSERT INTO products (pname, descr, price, rrp,quantity,img) VALUES('".$_POST['pname']."','".$_POST['descr']."','".$_POST['price']."','".$_POST['rrp']."','".$_POST['quantity']."','$filename')";
           //$result=mysqli_query($connection,$sql);
           $result=$connection->query($sql);
           //print_r($result);
           if($result){
               //echo "Successful";
               move_uploaded_file($filetmpname, $folder.$filename);
                echo '<script> alert("Successfully Inserted"); </script>';
           }else{
                echo '<script> alert("Insertion Failed"); </script>';
           }
       
       }
      

        
  
?>





   
    