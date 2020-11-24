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
         <div class="content"> 

            <?php     
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
            $sql="INSERT INTO infohub (date,authorname,articlename,content) VALUES('".$date."','".$_POST['authorname']."','".$_POST['articlename']."','".$_POST['content']."')";
            $result=$connection->query($sql);
            //print_r($result);
            if($result){

                //header( 'Location: manager_infohub.php ');
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
        
        <form method="post" action="manager_infohub.php" >
                <p style="color:black"><b>Add Articles<b></p>
                </br>
            </br>
            <div class="row">
                <div class="col1">
                    <label for="authorname">Name</label>
                </div>
                <div class="col2">
                    <input type="text" name="authorname"  placeholder="Author Name" style="background-color:white" value="<?= $authorname?>" autofocus>
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

        <form  action="manager_viewarticle.php" method="post" >
                <div class="c2" style="width: 130px">
                    <input type="submit" value="View Articles >>" name="enter" >
                </div>
            </div>
        </form>



        </div>

       

            
        
        </body>
        </html>



            