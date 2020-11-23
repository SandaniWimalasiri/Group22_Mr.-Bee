<?php require_once("../../config/connect.php");
?>


    <head>
        
        <title>Divisional Manager Article</title>
       
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">
        <link rel="stylesheet" type="text/CSS" href="../../public/css/style_infohub.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/beekeeper_CRUD.css">
        

    </head>
    <body>
        <nav>
      <!--logo-->
        <a href="#" class="logo">Mr.<font color="#f4976c">Bee</font></a>
      
        <a href="divman.php#info" class="lang">Back</a>
        </nav>
        <section id="about">
         
        

         <!--start content-->
         <div class="content3"> 
            
            </br></br>
         <?php
            
                
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
                        }?>
            


                    <form  action="divman_infohub.php" method="post" >
                        <div class="row">
                            <input type="submit" value="<< Back" name="back" >
                        </div>
                    </form>

        </div>

    </section>
	</body>
</html>

