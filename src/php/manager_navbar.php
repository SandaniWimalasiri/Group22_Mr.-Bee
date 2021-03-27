

    <head>
        <meta charset="utf-8">
        <title>admin page</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_navbar.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">
        <link rel="stylesheet" href="../../public/css/style_manager_sidenav.css">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    </head>

    <nav>    
    <!--start of welcomeBox-->
        <div class="welcomeBox">       
            <a href="manager_home.php"><img src="../../public/img/manager2.jpg" class="icon"></a>
           <!-- -->
        </div> 
    </nav>
           <!-- <table class="nav_table" border="0" width="100%" align="left" cellpadding="10" cellspacing="0">-->
                

            <div class="sidebar">
                <div class="header1">My Menu</div>
                <a href="manager_home.php">
                    
                    <span>Profile</span>
                </a>
                <a href="manager_reports.php">
                    
                    <span>Reports</span>
                </a>
                <a href="manager_dm.php">
                    
                    <span>Divisional Managers</span>
                </a>
                <a href="manager_orders.php">
                    
                    <span>Order Details</span>
                </a>
                <a href="manager_products.php">
                    
                    <span>Products</span>
                </a>
                <a href="manager_viewarticle.php">
                    
                    <span>Info Hub</span>
                </a>

               <!-- <script src="../../public/js/manager_navbar_active.js"></script>-->
               <Script type="text/javascript">
                    const currentLocation = location.href;
                    const menuItem = document.querySelectorAll('a');
                    const menuLength = menuItem.length;
                    for (let i = 0; i < menuLength ; i++) {
                        if(menuItem[i].href===currentLocation) {
                            menuItem[i].className ="active"
                        }
                        
                    }
                </Script>
                
            </div>
                                 <!--end of welcomeBox-->



        