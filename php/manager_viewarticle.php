<?php include('manager_alignments.php')?>


    <head>
        
        <title>Manager_home</title>
        <link rel="stylesheet" type="text/css" href="css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="css/style_manager_remove_dm.css">
        <link rel="stylesheet" type="text/CSS" href="css/style_infohub.css">
        <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">

    </head>
    <body>
       
         <!--start of welcomeBox-->
        <div class="welcomeBox">       
            <a href="manager_home.php"><img src="img/manager2.jpg" class="icon"></a>
            <h1>Information Forum</h1>
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
         <div class="content3"> 
            
            </br></br>
         <?php
            if(isset($_POST['enter'])){
                
                $sql = "SELECT * FROM infohub";
                mysqli_query($connection, $sql);
                $result = mysqli_query($connection,$sql);
                        while($row=mysqli_fetch_assoc($result)){  

                            
                            echo '<div class="bhivecontainer">';
                        
                            echo "<B>".$row['articlename']."</B>";
                            echo "<br>";
                            echo $row['date']." by <I>" .$row['authorname']."</I>";
                            echo "<br>";
                            echo "<br>";
                            echo $row['content'];
                            echo "</div>";
                            echo "<br>";
                            echo "<br>";
                        }}?>
            


                    <form  action="manager_infohub.php" method="post" >
                        <div class="row">
                            <input type="submit" value="<< Back" name="back" >
                        </div>
                    </form>

        </div>


	</body>
</html>

