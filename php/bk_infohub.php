<?php 
require_once('connect.php'); 
session_start();


    

        $authorname_error = $articlename_error = $content_error ="";
        $authorname = $articlename = $content="";

        if(isset($_POST['submit'])){

            if (empty($_POST["authorname"])) {
              $authorname_error = "*Author name is required";
            } else {
              $authorname = test_input($_POST["authorname"]);
            }
            
            if (empty($_POST["articlename"])) {
              $articlename_error = "*Article name is required";
            } else {
              $articlename = test_input($_POST["articlename"]);
            }
              
            if (empty($_POST["content"])) {
              $content_error = "*Content is required";
            } else {
              $content = test_input($_POST["content"]);
            }

            if($authorname_error =='' and  $articlename_error =='' and  $content_error==''){
      
     //echo "Done";
     $date=date("Y/m/d");
     $sql="INSERT INTO infohub (userID,date,authorname,articlename,content) VALUES('".$_SESSION['userid']."','".$date."','".$_POST['authorname']."','".$_POST['articlename']."','".$_POST['content']."')";
     $result=$connection->query($sql);
     //print_r($result);
     if($result){

         header( 'Location: bk_infohub.php ');
     }else{
         echo "failed";
     }

            }
        

    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    



    
?>
<html>

    <head>

      <title>infohub</title>
      <link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">

    </head>
  <body>

        <?php 
        include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>



        
<div class="main">
    <div class="bhivecontainer">
  
        <form method="post" action="bk_infohub.php" >
        <p >Add Articles</p>
        </br>
    </br>
        <div class="row">
        <div class="col1">
        <label for="authorname">Name</label>
        </div>
    <div class="col2">
        <input type="text" name="authorname"  placeholder="Author Name" value="<?= $authorname?>" autofocus>
        <span class="error"><?= $authorname_error?></span>
    </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="articlename">Article Name</label>
        </div>
    <div class="col2">
        <textarea id="articlename" name="articlename" style="height:50px" placeholder="Article Name" value="<?= $articlename?>"></textarea>
        <span class="error"><?= $articlename_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="content">Content</label>
        </div>
    <div class="col2">
        <textarea id="content" name="content" style="height:200px" placeholder="Content" value="<?= $content?>" ></textarea>
        <span class="error"><?= $content_error?></span>
    </div>
        </div>
        <div class="row">
        <div class="c1" style="width: 870px">
        <input type="submit" value="Submit" name="submit" >
        </div>
        </form>

  
        <form  action="bk_viewarticle.php" method="post" >
        <div class="c2" style="width: 130px">
        <input type="submit" value="View Articles >>" name="enter" >
        </div>
  </div>
        </form>



</div>

</div>

      
 
  </body>
</html>