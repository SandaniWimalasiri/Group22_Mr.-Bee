<?php include('manager_alignments.php')?>
<?php include('manager_navbar.php')?>


<php >
    <head>
        
    <title>Mr. Bee</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_managerhome_content.css">

    </head>
    <body>
       
       
        
         <!--start content-->
        <div class="content0"> 

            <div class="hcmenue">
                <ul class ="honeycomb">
                    <li class="honeycomb-cell">
                       
                        <img class="honeycomb-cell_img" src="../../public/img/bee-keeping.png">
                        
                    </li>
                    <li class="honeycomb-cell">
                       
                        <img class="honeycomb-cell_img" src="../../public/img/honey3.jpg">
                        
                        </a>
                    </li>
                    <li class="honeycomb-cell">
                        
                        <img class="honeycomb-cell_img" src="../../public/img/10.png">
                       
                        </a>
                    </li>
                    <li class="honeycomb-cell honeycomb_Hidden">
                    </li>
                </ul>

            </div>


            <div class="sub_content">
                <h2><u>My Profile</u></h2>

                <table class="profile">
                   
                    <?php 
                    
                    $sql = "SELECT * FROM manager;";
                    
                    $query=mysqli_query($connection,$sql);
                    verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>  
                            <th>First name :</th>      
                            <td><?php echo $result['first_name'] ?></td>
                    </tr>
                    <tr>
                            <th>Last name :</th>
                            <td><?php echo $result['last_name'] ?></td>
                    </tr>
                    <tr>
                            <th>Email   :</th>
                            <td><?php echo $result['email'] ?></td>
                    </tr>
                    <tr>
                            <th>TP Number  :</th>
                            <td><?php echo $result['tp'] ?></td>
                    </tr>
                  
                    <?php
                    }
                    ?> 
                </table>
                </br>
                </br>
                <a href="manager_profile_edit.php">click here</a> to Edit the Profile
            </div>
        </div>               <!--end content-->

       

        <div class="nav_pane">
            
        </div>

    </body>
</php>
