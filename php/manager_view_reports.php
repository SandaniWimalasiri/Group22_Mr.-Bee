<?php include('manager_alignments.php')?>

<php >
    <head>
        
        <title>Manager_home</title>
        <link rel="stylesheet" type="text/css" href="../css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/style_buttons.css">

    </head>
    <body>
        
         <!--start of welcomeBox-->
        <div class="welcomeBox">       
            <a href="manager_home.php"><img src="../img/manager2.jpg" class="icon"></a>
            <h1>Reports</h1>
            <table class="nav_table" border="0" width="100%" align="left" cellpadding="10" cellspacing="0">
                    <tr>
                        <td><a href="manager_dm.php">Divisional Manager</a></td>
                        <td><a href="manager_view_reports.php">Reports</a></td>
                        <td><a href="manager_products.php">Products</a></td>
                        <td><a href="manager_recycle.php">Recycle Bin</a></td>
                        <td><a href="manager_infohub.php">Infomation Forum</a></td>
                        
                        <td width="30%">&nbsp;</td>
                        
                    </tr>
                </table>
        </div>                           <!--end of welcomeBox-->

        

         <!--start content-->
        <div class="content">   
            <left>
                <button class="btn5" onclick="document.location=''">Final report</button> <!--go to manager_reports1.php page--> 
                <button class="btn5" onclick="document.location=''">beekeeping reports</button> <!--go to manager_reports2.php page--> 
            </left>   
           
        </div>               <!--end content-->

        <!--start of footer-->
        <footer>    
            <h3></h3>
        </footer>   <!--end of footer-->

    </body>
</php>
