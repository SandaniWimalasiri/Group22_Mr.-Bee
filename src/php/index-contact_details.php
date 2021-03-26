<html>
	<head>
		<title>Login Page</title>
		
        <link rel="stylesheet" type="text/css" href="../../public/css/style_manager_remove_dm.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/index_page.css">

	</head>
	<body >
    <?php
    include_once('../../config/connect.php');
    include_once('func.php');
    ?>

<div class="main2">
    
    <center>
                <table class="div_man">
                    <tr>
                        <th>Division</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>TP No.</th>
                        
                        
                    </tr>
                    <?php 
                    
                    $sql = "SELECT * FROM div_manager WHERE is_deleted=0;";
                    
                    $query=mysqli_query($connection,$sql);
                    verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                            <td><?php echo $result['division'] ?></td> 
                            <td><?php echo $result['first_name'] ?></td>
                            <td><?php echo $result['last_name'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo $result['tp'] ?></td>
                            
 
                    </tr>
                  
                    <?php
                    }
                    ?> 
                </table>

                </br>
               
            </center>
         <a href="index.php">Back to Home page</a>
</div>
</body>
</html>