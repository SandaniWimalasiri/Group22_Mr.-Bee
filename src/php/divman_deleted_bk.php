<?php require_once("../../config/connect.php");
?>
 

    <head>
        
        <title>Deactivated Beekeepers</title>
       
        <link rel="stylesheet" type="text/css" href="../../public/css/divman_reports.css">
        

    </head>
    <body>

        <nav>
      <!--logo-->
        <a href="#" class="logo">Mr.<font color="#f4976c">Bee</font></a>
        
      
        <a href="divman.php#beekeeper" class="lang">Back</a>
        </nav>
        <section id="about">     
        
        <div class="main" id="hr">
        <div class="r-heading">
        <br/>
        <h1>Deactivated Beekeepers</h1>
        </div>
        <div class="main">


  
<div class="bhivecontainer">
 <br/><br/>

            <center>

            <table class="div_man">
                    <tr>
                    <th>Registration ID</th>
                        <th>User name</th>
                        <th>Full name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Telephone No</th>
                        
                        <th style="text-align:center;">Activate</th>
                        <th style="text-align:center;">Remove</th>
                    </tr>
                    <?php 
                    $user_id='';
                    $sql = "SELECT * FROM beekeeper WHERE is_deleted=1";
                    
                    $query=mysqli_query($connection,$sql);
                    // verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                    <td><?php echo $result['userID'] ?></td>
                            <td><?php echo $result['userName'] ?></td>
                            <td><?php echo $result['fullName'] ?></td>
                            <td><?php echo $result['userAddress'] ?></td>
                            <td><?php echo $result['userEmail'] ?></td>
                            <td><?php echo $result['userTele'] ?></td>
                           

                            <form action="divman_deleted_bk2.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn8" type="submit" name="replace1">Replace</a></td>
                            </form>
                            <form action="divman_deleted_bk2.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn7" type="submit" name="delete1" onclick="return confirm('Are you sure? This will permanently delete the data!')">Remove</a></td>
                            </form>
                           
                    
                    </tr>
                  
                    <?php
                    }
                    ?> 
                </table>
           
        </center>
        </div>
        

        </section>
       

	</body>
</html>
