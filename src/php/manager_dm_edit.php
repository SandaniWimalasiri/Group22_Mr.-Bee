

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
                $div_id=$_POST['div_id'];

                $query = "SELECT * FROM div_manager WHERE div_id='$div_id' ";
                $query_run = mysqli_query($connection, $query);

                if($query_run){
                    while($row = mysqli_fetch_array($query_run)){
                    ?>

                        <h1 >Update Divisional Manager's Details</h1>
                        <br>
                        <button class="btn6" type="submit" name="back" onclick="document.location='manager_dm.php'"><<<b>Back</b></button> 
                        </br>
                            
                        <form class="f1" method="post" action="">
                        </br>
                            <input type="hidden" name="div_id" value="<?php echo $row['div_id']; ?>">
                            
                            <table class="div_man">
                            <tr>
                                <th><label>ID</label></th>
                                <td><input type="text" name="div_id" placeholder="Enter ID" value="<?php echo $row['div_id'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>First name</label></th>
                                <td><input type="text" name="first_name" pattern="[a-zA-Z]+" title="Only Upper case and Lower case Letters Allowed" placeholder="Enter First Name" value="<?php echo $row['first_name'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Last name</label></th>
                                <td><input type="text" name="last_name" pattern="[a-zA-Z]+" title="Only Upper case and Lower case Letters Allowed" placeholder="Enter Last Name" value="<?php echo $row['last_name'] ?>"></td>
                            </tr>
                            <tr>
                                <th><label>Email</label></th>
                                <td><input type="email" name="email" placeholder="Enter Email" value="<?php echo $row['email'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <th><label>TP No.</label></th>
                                <td><input type="tel" name="tp"  pattern="[0]{1}[0-9]{9}" placeholder="Enter TP number" value="<?php echo $row['tp'] ?>" ></td>
                            </tr>
                            <tr>
                                <th><label>Address</label></th>
                                <td><textarea placeholder="Address" name="addr" value=""><?php echo $row['addr'] ?></textarea></td>
                            </tr>
                            
                            <tr>
                                <th><label>Division</label></th>
                                <td>
                                        <select name="division" id="division" value="">
                                            <option><?php echo $row['division'] ?></option>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Galle">Galle</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Kalutara">Kalutara</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Kegalle">Kegalle</option>
                                            <option value="Kilinochchi">Kilinochchi</option>
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Mannar">Mannar</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Matara">Matara</option>
                                            <option value="Moneragala">Moneragala</option>
                                            <option value="Mullaitivu">Mullaitivu</option>
                                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                                            <option value="Polonnaruwa">Polonnaruwa</option>
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Ratnapura">Ratnapura</option>
                                            <option value="Trincomalee">Trincomalee</option>
                                            <option value="Vavuniya">Vavuniya</option>
                                        </select>
                                </td>
                            </tr>
                           
                            </table>
                            <br/>
                        
                            <button class="btn6" type="submit" name="update"><b>Update</b></button>
                            
                        </form>
                    <?php    
                    }   
                    ?>    

                        <?php
                        
                                if(isset($_POST['update']))
                                {
                                    $first_name = $_POST['first_name'];
                                    $last_name = $_POST['last_name'];
                                    $tp = $_POST['tp'];
                                    $addr = $_POST['addr'];
                                    $division = $_POST['division'];
                                    


                                    $query = "UPDATE div_manager SET first_name='$first_name', last_name='$last_name', tp='$tp', addr='$addr', division='$division'  WHERE div_id='$div_id'  ";
                                    $query_run = mysqli_query($connection, $query);

                                    if($query_run)
                                    {
                                        echo '<script> alert("Data Updated Successfully"); </script>';
                                       
                                       

                                    }
                                    else
                                    {
                                        echo '<script> alert("Failed to update the database"); </script>';
                                    }
                                }
                    ?>
                        <?php
                    
                   
                }
                ?>
        </div>               <!--end content2-->

        
</body>
</html>
