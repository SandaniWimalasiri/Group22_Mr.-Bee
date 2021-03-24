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
                

                if(isset($_POST['submit'])){

                    
            
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
                    <input type="text" name="authorname"  placeholder="Author Name" style="background-color:white" >
                    
                </div>
            </div>
            <div class="row">
                <div class="col1">
                    <label for="articlename">Article Name</label>
                </div>
                <div class="col2">
                    <textarea id="articlename" name="articlename" style="height:50px" placeholder="Article Name" ></textarea>
                    
                </div>
            </div>
            <div class="row">
                <div class="col1">
                    <label for="content">Content</label>
                </div>
                <div class="col2">
                    <textarea id="content" name="content" style="height:200px" placeholder="Content"  ></textarea>
                    
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



            