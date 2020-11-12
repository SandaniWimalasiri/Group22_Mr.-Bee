<?php require_once("db/db.php");
require_once("func.php"); ?>
<?php session_start(); 

        if(!$_SESSION['userName']){
            header('Location: sign_in.php');
        }
?>
<head>
        <link rel="stylesheet" type="text/css" href="css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="css/style_manager_remove_dm.css">

    </head>
<body>
        <!--start of header-->
        <header>                        
            <div class="webName">
                Mr. Bee
            </div>
            <div class="user">
                You are logged in as 
                    <?php echo $_SESSION['first_name'];
                        echo " " ;
                        echo $_SESSION['last_name']; ?>
                <a href="log_out.php"> (Log Out) </a>
            </div>
        </header>                       <!--end of header-->

        <!--start of logo class-->
        <div class="logo">
        <img src="img/004.png" width="8%" height=width>
        </div>                          <!--end of logo class-->

        
         <!--start of footer-->
         <footer>    
            <h3></h3>
        </footer>   <!--end of footer-->

<body>