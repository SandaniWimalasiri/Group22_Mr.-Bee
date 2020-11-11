<?php 
require_once('connect.php'); 
session_start();
?>

<html>

    <head>

      <title>View artcles</title>
      <link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">

    </head>
  <body>

        <?php 
        include('bk_navbar.php');
        include('bk_sidenavbar.php');
        ?>


<div class="main">

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
    


            <form  action="bk_infohub.php" method="post" >
        <div class="row">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </form>

        </div>


	</body>
</html>

