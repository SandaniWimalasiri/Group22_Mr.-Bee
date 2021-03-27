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
                        <label> Search by UserID</label>
                        <input Type="text" name="code">
                        <button class="btn9" type="submit" name="submit"><b>View</b></button>
                        <button class="btn9" type="submit" name="view"><b>View All</b></button>
                       
                        
                    </form>
                </div>    		
              </center>

<br><br>
        
            <table class="div_man">
                
                
                <?php
                    if(isset($_POST['view'])){
                        echo"<tr>
                        <th>User ID</th>
                        <th>Raw Honey</th>
                        <th>Royal Gel</th>
                        <th>Bee-colonies</th>
                        
                        </tr>";
                       // $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT DISTINCT userID FROM harvest WHERE is_deleted=0 ";
                        $query = $connection->query($sql);
                        verify_query($query);
                        while ($result = $query->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <?php 
                                    $sql1 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Raw Honey') AND userID=".$result['userID'].");";
                                    $query1 =($connection->query($sql1));
                                    //verify_query($query1);
                                    while ($result1 = $query1->fetch_array()) {
            
                                    $total1 = $result1['SUM(amount)'];
                                    } 
                            ?>
                            <td><?php echo $total1."Kg"; ?></td>
                            <?php 
                                    $sql2 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Royal Gel') AND userID=".$result['userID'].");";
                                    $query2 =($connection->query($sql2));
                                    //verify_query($query2);
                                    while ($result2 = $query2->fetch_array()) {
            
                                    $total2 = $result2['SUM(amount)'];
                                    } 
                            ?>
                            <td><?php echo $total2."Kg"; ?></td>
                            <?php 
                                    $sql3 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Bee Colonies') AND userID=".$result['userID'].");";
                                    $query3 =($connection->query($sql3));
                                    //verify_query($query3);
                                    while ($result3 = $query3->fetch_array()) {
            
                                    $total3 = $result3['SUM(amount)'];
                                    } 
                            ?>
                            <td><?php echo $total3; ?></td>
                            
                        </tr>
                        <?php
                         }
                    }
                ?>


                <?php
                    if(isset($_POST['submit'])){
                        echo"<tr>
                        <th>User ID</th>
                        <th>Raw Honey</th>
                        <th>Royal Gel</th>
                        <th>Bee-colonies</th>
                        
                        </tr>";
                        $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT DISTINCT userID FROM harvest WHERE is_deleted=0 AND userID='{$_POST['code']}'";
                        $query = $connection->query($sql);
                        verify_query($query);
                        while ($result = $query->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <?php 
                                    $sql1 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Raw Honey') AND userID=".$result['userID'].");";
                                    $query1 =($connection->query($sql1));
                                    //verify_query($query1);
                                    while ($result1 = $query1->fetch_array()) {
            
                                    $total1 = $result1['SUM(amount)'];
                                    } 
                            ?>
                            <td><?php echo $total1."Kg"; ?></td>
                            <?php 
                                    $sql2 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Royal Gel') AND userID=".$result['userID'].");";
                                    $query2 =($connection->query($sql2));
                                    //verify_query($query2);
                                    while ($result2 = $query2->fetch_array()) {
            
                                    $total2 = $result2['SUM(amount)'];
                                    } 
                            ?>
                            <td><?php echo $total2."Kg"; ?></td>
                            <?php 
                                    $sql3 = "SELECT SUM(amount) FROM harvest where ((is_deleted=0) AND (producttype='Bee Colonies') AND userID=".$result['userID'].");";
                                    $query3 =($connection->query($sql3));
                                    //verify_query($query3);
                                    while ($result3 = $query3->fetch_array()) {
            
                                    $total3 = $result3['SUM(amount)'];
                                    } 
                            ?>
                            <td><?php echo $total3; ?></td>
                            
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
