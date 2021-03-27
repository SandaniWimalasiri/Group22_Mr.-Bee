<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>

<php >
    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">

    </head>
    <body>
        

        

         <!--start content-->
    <div class="content">   
                    <div class="dropdown">
                        <button class="dropbtn">Reports</button>
                        <div class="dropdown-content">
                            <a href="manager_reports.php">Harvest Reports</a>
                            <a href="manager_reports2.php">Beekeeper Reports</a>
                            
                        </div>
                    </div>
        
                    <center>
                <div class="viewform">
                    <form method="post">
                        <br><br>
                        <label> Search  </label>
                        <button class="btn9" type="submit" name="rhoney"><b>Raw Honey</b></button>
                        <button class="btn9" type="submit" name="rgel"><b>Royal Gel</b></button>
                        <button class="btn9" type="submit" name="bcl"><b>Bee-colonies</b></button>
                        
                    </form>
                </div>    		
              </center>

<br><br>
        
            <table class="div_man">
                
                
                <?php
                    if(isset($_POST['rhoney'])){
                        echo"<tr>
                        <th>User ID</th>
                        <th>Date</th>
                        <th>Product Type</th>
                        <th>Amount(Kg)</th>
                        
                        </tr>";
                       // $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM harvest WHERE is_deleted=0 AND producttype='Raw Honey';";
                        $query = $connection->query($sql);
                        verify_query($query);
                        while ($result = $query->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <td><?php echo $result['date'] ?></td>
                            <td><?php echo $result['producttype'] ?></td>
                            <td><?php echo $result['amount'] ?></td>
                            
                        </tr>
                        <?php
                         }
                   
                         $sql1 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Raw Honey'));";
                         $query1 =($connection->query($sql1));
                         //verify_query($query1);
                         while ($result = $query1->fetch_array()) {
     
                             $total = $result['SUM(amount)'];
                         }
     
                     ?> 
                     
                     <tr>
                         <th><?php echo "Total Amount"; ?></th>
                         <td style="text-align:right;" colspan="3"><b><?php echo $total."Kg"; ?></b></td>
                    </tr>
                    <label>Details of Raw Honey</label>
                <?php
                         
                    }
                ?>

                <?php
                    if(isset($_POST['rgel'])){
                        echo"<tr>
                        <th>User ID</th>
                        <th>Date</th>
                        <th>Product Type</th>
                        <th>Amount(Kg)</th>
                        
                        </tr>";
                       // $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM harvest WHERE is_deleted=0 AND producttype='Royal Gel';";
                        $query = $connection->query($sql);
                        verify_query($query);
                        while ($result = $query->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <td><?php echo $result['date'] ?></td>
                            <td><?php echo $result['producttype'] ?></td>
                            <td><?php echo $result['amount'] ?></td>
                            
                        </tr>
                        <?php
                         }
                   
                         $sql1 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Royal Gel'));";
                         $query1 =($connection->query($sql1));
                         //verify_query($query1);
                         while ($result = $query1->fetch_array()) {
     
                             $total = $result['SUM(amount)'];
                         }
     
                     ?> 
                     
                     <tr>
                         <th><?php echo "Total Amount"; ?></th>
                         <td style="text-align:right;" colspan="3"><b><?php echo $total."Kg"; ?></b></td>
                    </tr>
                    <label>Details of Royal Gel</label>
                  
                <?php
                         
                    }
                ?>

                <?php
                    if(isset($_POST['bcl'])){
                        echo"<tr>
                        <th>User ID</th>
                        <th>Date</th>
                        <th>Product Type</th>
                        <th>Amount</th>
                        
                        </tr>";
                       // $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM harvest WHERE is_deleted=0 AND producttype='Bee Colonies';";
                        $query = $connection->query($sql);
                        verify_query($query);
                        while ($result = $query->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <td><?php echo $result['date'] ?></td>
                            <td><?php echo $result['producttype'] ?></td>
                            <td><?php echo $result['amount'] ?></td>
                            
                        </tr>
                        <?php
                         }
                   
                         $sql1 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Bee Colonies'));";
                         $query1 =($connection->query($sql1));
                         //verify_query($query1);
                         while ($result = $query1->fetch_array()) {
     
                             $total = $result['SUM(amount)'];
                         }
     
                     ?> 
                     
                     <tr>
                         <th><?php echo "Total Amount"; ?></th>
                         <td style="text-align:right;" colspan="3"><b><?php echo $total; ?></b></td>
                    </tr>
                    <label>Details of Bee Colonies</label>
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
