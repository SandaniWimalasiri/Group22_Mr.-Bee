<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>

<php >
    <head>
        
        <title>Manager_home</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">

    </head>
    <body>
        

        

         <!--start content-->
        <div class="content">   
            <left>
                    <p>Harvest report</p>
                    <hr />
                    
                    <form  method="post" action="" >
                        <div class="row">
                            <div class="col1">
                                <label for="beekeeperID">Beehiv</label>
                            </div>
                            <div class="col1">
                                <input type="number" name="beehiveno1" >
                                <span class="error"><?= $beehiveno1_error?></span>
                            </div>
                            <div class="col1">
                                <input type="submit" value="View full harvest report >>" name="enterr" >
                            </div>
                        </div>
                    </form>

            </left>   
           
        </div>               <!--end content-->

        <!--start of footer-->
        <footer>    
            <h3></h3>
        </footer>   <!--end of footer-->

    </body>
</php>
