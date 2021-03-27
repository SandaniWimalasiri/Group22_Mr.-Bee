<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>


    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">
        <link rel="stylesheet" type="text/CSS" href="../../public/css/style_infohub.css">
        

    </head>
    <body>
       
        

         <!--start content-->
         <div class="content3" id="top"> 
                    <div class="dropdown">
                        
                        
                    </div>
                    
            </br></br><br><br>
                    <form  action="manager_infohub.php" method="post" >
                        <div class="row">
                            <input type="submit" value="Add a Article" name="back">
                        </div>
                    </form>
                    <br>
         <?php
           // if(isset($_POST['enter'])){
                
                $sql = "SELECT * FROM infohub ORDER BY date DESC";
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
                        }?>
            


                   

        </div>

        
 
	</body>
</html>

