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
        
        <section id="about">
         
        

         <!--start content-->
         <div class="content3"> 
            
            </br></br>
         <?php
            
                
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

    </section>
	</body>
</html>

