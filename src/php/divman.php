 <?php require_once("../../config/connect.php");
require_once("func.php"); ?> 
<!DOCTYPE html>
<html>
<?php session_start(); 

        if(!$_SESSION['email']){
            header('Location: sign_in_divman.php');
        }
?>
<head>
	<title>Divisional_Manager</title>
	<!--link to css file-->
	<link rel="stylesheet" type="text/css" href="../../public/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../../public/css/divman_bkeeper.css"/>
</head>
<body>
	<!--main-->
	<section id="main">
		<!--navigation-->
		<nav>
			<!--logo-->
			<a href="#" class="logo">Mr.<font color="#f4976c">Bee</font></a>
			<!--menu-->
			<ul class="menu">
				<li><a href="#main">Home</a></li>
				<li><a href="#about">Profile</a></li>
				<li><a href="#beekeeper">Bee Keepers</a></li>
				<li><a href="#reports">Reports</a></li>
				<li><a href="#info">Info-Hub</a></li>
			</ul>
			<a href="log_out.php" class="lang">Logout</a>
		</nav>
		<div class="name">
			<p class="details">Welcome... </p>
                   <h1>  <?php echo $_SESSION['first_name'];
                        echo " " ;
                        echo $_SESSION['last_name']; ?></h1>
			<p class="details">Divisional Manager</br>Nature Bee Honey Company SriLanka</p>
		</div>
		<div class="hcmenue">
		<ul class ="honeycomb">
			<li class="honeycomb-cell">
				<a href="#beekeeper">
				<img class="honeycomb-cell_img" src="../../public/img/div1.jpg">
				<div class="honeycomb-cell_title">Bee Keepers</div>
				</a>
			</li>
			<li class="honeycomb-cell">
				<a href="#reports">
				<img class="honeycomb-cell_img" src="../../public/img/div2.jpg">
				<div class="honeycomb-cell_title">Reports</div>
				</a>
			</li>
			<li class="honeycomb-cell">
				<a href="#info">
				<img class="honeycomb-cell_img" src="../../public/img/div3.jpg">
				<div class="honeycomb-cell_title">Info-Hub</div>
				</a>
			</li>
			<li class="honeycomb-cell honeycomb_Hidden">
			</li>
		</ul>

		</div>
		
	</section>

	<!--about-->

	<section id="about">
		<div class="about-text">
			<h1>Profile</h1>
			<h2> <?php echo $_SESSION['first_name'];
                        echo " " ;
                        echo $_SESSION['last_name']; ?></h2>
			



<br/>
<?php
if(isset($_POST['update'])){
    
 
          
	$sql2= "UPDATE div_manager SET first_name ='".$_POST['first_name']."',last_name ='".$_POST['last_name']."',tp ='".$_POST['tp']."', addr ='".$_POST['addr']."' WHERE email='".$_SESSION['email']."'";
	$result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT first_name,last_name,email,tp,division,addr,div_id  FROM div_manager WHERE email='".$_SESSION['email']."'";
    $result3 = mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);
   if($result2){
 
}
else{
echo "failed";	
}

}


   

?>


<div class="pro">


    <div class="bhivecontainer">
    
<?php

$sql1 = "SELECT COUNT(userID) AS noofbeekeepers  FROM beekeeper WHERE (div_id='".$_SESSION['div_id']."') AND (is_deleted=0)";
mysqli_query($connection, $sql1);
$noOfBeeKeepers = mysqli_query($connection,$sql1);
$row2=mysqli_fetch_assoc($noOfBeeKeepers);
//print_r($row2['noofbeekeepers']);



$sql1 = "SELECT first_name,last_name,pwd,tp,email,division,addr,div_id  FROM div_manager WHERE email='".$_SESSION['email']."'";
mysqli_query($connection, $sql1);
$result1 = mysqli_query($connection,$sql1);
		while($row=mysqli_fetch_assoc($result1)){  
 
   ?>
        <form  method="post" action="#about" ><div class="row" >
        <div class="col1">
        First Name </div><div class="col2">
        <input type = 'text' name='first_name' required value ='<?php echo $row['first_name']; ?>'>
        </div>
        </div>
        <div class="row" >
        <div class="col1">
        Last Name </div><div class="col2" ><input type = "text" name="last_name" required value ="<?php echo $row['last_name']; ?>" >
        </div>
        </div>
        <div class="row" >
		<div class="col1">
		TP No. </div><div class="col2" ><input type = "text" name="tp" required value ="<?php echo $row['tp']; ?>" >
        </div>
        </div>
        <div class="row" >
		<div class="col1">
		TP No. </div><div class="col2" ><input type = "text" name="addr" required value ="<?php echo $row['addr']; ?>" >
        </div>
        </div>
        <div class="row" >
		<div class="col1">
		Email </div><div class="col2" ><input type = "text" name="email" disabled value ="<?php echo $row['email']; ?>" readonly>
        </div>
        </div>
        <div class="row" >
        <div class="col1">
        Division </div><div class="col2"><input type = "text" name="division" disabled value ="<?php echo $row['division']; ?>"  readonly>
        </div>
        </div>
        <div class="row" >
        <div class="col1">
        No of emploees </div><div class="col2"><input type = "text" name="no_employee" disabled value ="<?php echo $row2['noofbeekeepers']; ?>" >
        </div>
        </div>
        <div class="row" >
        <div class="col1">
        Div ID</div><div class="col2"><input type = "text" name="div_id" disabled value ="<?php echo $row['div_id']; ?>" readonly>
        </div>
        </div>
        <div class="row">
            <div class="c1" style="width: 910px">
                <input type="submit" value="Edit Profile" name="update" >
                <input type="button" onclick="changePassword(<?php echo $row['div_id']; ?>)" value="Change Password" name="change-password" >
            </div>
        </div>
        </form>
        <?php

        }?>



    </div>
    
<br />
<br />
</div>  


				
			
</div>
		
		</div>
		<div class="about-model">
			<img src="../../public/img/div4.png" alt="me"/>
			
		</div>
	</section>
	<!--beekeeper-->
	<section id="beekeeper">
	<!--beekeeper heading-->
	<div class="b-heading">
		<br/>
		<h1>Bee keepers</h1>
	</div>
	<div class="content"> 
            <br>
            <div class="viewform">
                    
                        <button class="btn6" type="submit" name="submit" onclick="document.location='divman_bk_add.php'">Add Beekeeper </button>
                        <button class="btn6" type="submit" name="submit" onclick="document.location='divman_deleted_bk.php'">Deactivated Beekeepers </button>
                    
                   
             </div>
             <br>  
            <center>
                <table class="div_man">
                    <tr>
                        <th>Registration ID</th>
                        <th>User name</th>
                        <th>Full name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Telephone No</th>
                        <th style="text-align:center;">Edit</th>
                        <th style="text-align:center;">Delete</th>
                    </tr>
                    <?php 
                    
                    $sql = "SELECT * FROM beekeeper WHERE div_id='".$_SESSION['div_id']."' AND is_deleted=0" ;
                    
                    $query=mysqli_query($connection,$sql);
                    verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <td><?php echo $result['userName'] ?></td>
                            <td><?php echo $result['fullName'] ?></td>
                            <td><?php echo $result['userAddress'] ?></td>
                            <td><?php echo $result['userEmail'] ?></td>
                            <td><?php echo $result['userTele'] ?></td>

                            <form action="divman_bk_edit.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn8" type="submit">Edit</button></td>
                            </form>
                            <form action="divman_bk_delete.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn7" type="submit" name="delete" onclick="return confirm('Are you sure?')">Deactivate</button></td>
                            </form>
                           
                    
                    </tr>
                  
                    <?php
                    }
                    ?> 
                </table>
            </center>
            <center>
                <div class="viewform">
                    <form method="post">
                        <br><br>
                        <label> Search  </label>
                        <input type="text" name="code">
                        
                        <button class="btn6" type="submit" name="view"><b>View</b></button>

                        
                    </form>
                </div>    		
              </center>
				<br/><br/>
            <table class="div_man">
                
                
                <?php
                    if(isset($_POST['view'])){
                        echo"<tr>
                            <th>Registration ID</th>
                        	<th>User name</th>
                        	<th>Full name</th>
                        	<th>Address</th>
                        	<th>Email</th>
                        	<th>Telephone No</th>
                            
                        </tr>";
                        $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM beekeeper WHERE (div_id='".$_SESSION['div_id']."') AND (is_deleted=0) AND (userID='{$_POST['code']}' OR userName='{$_POST['code']}' );";
                        $query = $connection->query($sql);
                        verify_query($query);
                        
                        while ($result = $query->fetch_assoc()){
                ?>
                        <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <td><?php echo $result['userName'] ?></td>
                            <td><?php echo $result['fullName'] ?></td>
                            <td><?php echo $result['userAddress'] ?></td>
                            <td><?php echo $result['userEmail'] ?></td>
                            <td><?php echo $result['userTele'] ?></td>
						<!--
                            <form action="manager_dm_edit.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn8" type="submit">Edit</button></td>
                            </form>

                            <form action="divman_bk_delete.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn7" type="submit" name="delete" >Delete</button></td>
                            </form>
						-->
                        </tr>
                               
                        <?php
                         }
                    }
                ?>

            </table>
        </div>
		
	</section>
	<!--Report-->
	<section id="reports">
	<!--beekeeper heading-->
	<div class="r-heading">
		<br/>
		<h1>Reports</h1>
	</div>
	<div class="content"> 
            
            <center>
                <table class="div_man">
                    <tr>
                        <th>Registration ID</th>
                        <th>User name</th>
                        <th>Full name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Telephone No</th>
                    </tr>
                    <?php 
                    
                    $sql = "SELECT * FROM beekeeper WHERE div_id='".$_SESSION['div_id']."' AND is_deleted=0 ;";
                    
                    $query=mysqli_query($connection,$sql);
                    verify_query($query);

                    while ($result =mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                            <td><?php echo $result['userID'] ?></td>
                            <td><?php echo $result['userName'] ?></td>
                            <td><?php echo $result['fullName'] ?></td>
                            <td><?php echo $result['userAddress'] ?></td>
                            <td><?php echo $result['userEmail'] ?></td>
                            <td><?php echo $result['userTele'] ?></td>
                            	<form action="divman_viewreports.php" method="post">
                                    <input type="hidden" name="userID" id="userID" value="<?php echo $result['userID']; ?>">
                            <td><button class="btn8" name="viewReport" type="submit">Reports</button></td>
                            	</form>
                    </tr>
                  
                    <?php
                    }
                    ?> 
                </table>
            </center>
            </div>
		
	</section>
	

	<!--info-->
	<section id="info">
	<!--info heading-->
	<div class="i-heading">
		<h1>Infomation Hub</h1>
	</div>
    <iframe src="divman_viewarticle.php" height="600" width="95%" title="info_hub"></iframe>
	<br/>
	<a href="divman_infohub.php" class=i-btn>Add Articles</a>
	</section>





</body>

<script type="text/javascript">
    function changePassword(id) {
        window.location.href = './divma_resetpass.php?id=' + id
    }
</script>

</html>