<?php require_once("../../config/connect.php");
require_once("func.php"); ?>
<?php session_start(); 
    if(!$_SESSION['email']){
     header('Location: login.php');
    }
        
?>
<head>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>
    
    </style>
<body>
    <nav>   
        <!--start of header-->
        
        <header>  
                               
            <div class="webName">
                MR.<font color="#f4976c">BEE</font></a>
            </div>
            <div class="user">
                You are logged in as 
                    <?php echo $_SESSION['first_name'];
                        echo " " ;
                        echo $_SESSION['last_name']; ?>
                <a href="log_out.php"> (Log Out)__ </a>
            </div>
            
        </header>                       <!--end of header-->

        <!--start of logo class-->
                                 <!--end of logo class-->

    </nav>    
         <!--start of footer-->
         

</body>