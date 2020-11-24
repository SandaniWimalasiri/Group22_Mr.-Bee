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
    
 
          
    $sql2= "UPDATE div_manager SET first_name ='".$_POST['first_name']."',last_name ='".$_POST['last_name']."',  div_code ='".$_POST['div_code']."', no_employee ='".$_POST['no_employee']."',div_id ='".$_POST['div_id']."'WHERE email='".$_SESSION['email']."'";
    $result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT first_name,last_name,div_code,no_employee,div_id  FROM div_manager WHERE email='".$_SESSION['email']."'";
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

$sql1 = "SELECT first_name,last_name,div_code,no_employee,div_id  FROM div_manager WHERE email='".$_SESSION['email']."'";
mysqli_query($connection, $sql1);
$result1 = mysqli_query($connection,$sql1);
		while($row=mysqli_fetch_assoc($result1)){  
 
   
        echo '<form  method="post" action="" ><div class="row" >';
        echo '<div class="col1">';
        echo 'First Name </div><div class="col2">';
        echo "<input type = 'text' name='first_name' required value ='".$row['first_name']."'>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Last Name </div><div class="col2" ><input type = "text" name="last_name" required value ="'.$row['last_name'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Div Code </div><div class="col2"><input type = "text" name="div_code" required value ="'.$row['div_code'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'No of emploees </div><div class="col2"><input type = "text"" name="no_employee" required value ="'.$row['no_employee'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Div ID</div><div class="col2"><input type = "text" name="div_id" required value ="'.$row['div_id'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row"><div class="c1" style="width: 910px"><input type="submit" value="Edit Profile" name="update" ></div></form>';
        

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
                    
                        <button class="btn6" type="submit" name="submit" onclick="document.location='divman_bk_add.php'">Add </button>
                    
                   
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
                    
                    $sql = "SELECT * FROM beekeeper ;";
                    
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
                                    <td><button class="btn7" type="submit" name="delete" onclick="return confirm('Are you sure?')">Delete</button></td>
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
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>";
                        $code =mysqli_real_escape_string($connection,$_POST['code']);
        
                        $sql = "SELECT * FROM beekeeper WHERE (userID='{$_POST['code']}' OR userName='{$_POST['code']}' );";
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

                            <form action="manager_dm_edit.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn8" type="submit">Edit</button></td>
                            </form>

                            <form action="divman_bk_delete.php" method="post">
                                    <input type="hidden" name="userID" value="<?php echo $result['userID']; ?>">
                                    <td><button class="btn7" type="submit" name="delete" >Delete</button></td>
                            </form>

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
		<h1>Reports</h1>
	</div>
		
	</section>

	<!--info-->
	<section id="info">
	<!--info heading-->
	<div class="i-heading">
		<h1>Infomation Hub</h1>
	</div>
	<!--info box container-->
	<div class="i-b-conatainer">
	<!--box1-->
	<div class="i-box">
	<!--info box image-->
	<div class="i-b-img">
	<!--type-->
	<div class="i-type">Info-Hub</div>
	<!--img-->
	<img src="../../public/img/div5.jpg">
	</div>
	<!--info box text-->	
	<div class="i-b-text">
		<a href="divman_viewarticle.php" name="enter">Beekeeping (or apiculture) is the maintenance of bee colonies, commonly in man-made hives, by humans. Most such bees are honey bees in the genus Apis, but other honey-producing bees such as Melipona stingless bees are also kept</a>
	</div>	
	
	</div>
	<!--box1-->
	<div class="i-box">
	<!--info box image-->
	<div class="i-b-img">
	<!--type-->
	<div class="i-type">Info-Hub</div>
	<!--img-->
	<img src="../../public/img/div6.jpg">
	</div>
	<!--info box text-->
	
	<div class="i-b-text">
		<a href="divman_viewarticle.php" name="enter">Honey bees are social insects that live in colonies. Honey bee colonies consist of a single queen, hundreds of male drones, and 20,000 to 80,000 female worker bees. Each honey bee colony also consists of developing eggs, larvae, and pupae. The number of individuals within a honey bee colony depends largely upon seasonal changes. A colony could reach up to 80,000 individuals during the active season, when workers forage for food, store honey for winter, and build combs. However, this population will decrease dramatically during colder seasons.</a>
	</div>	
	
	</div>
	<!--box1-->
	<div class="i-box">
	<!--info box image-->
	<div class="i-b-img">
	<!--type-->
	<div class="i-type">Info-Hub</div>
	<!--img-->
	<img src="../../public/img/div7.jpg">
	</div>
	<!--info box text-->	
	<div class="i-b-text">
		<a href="divman_viewarticle.php" name="enter">A honey bee (also spelled honeybee) is a eusocial flying insect within the genus Apis of the bee clade, all native to Eurasia but spread to four other continents by human beings. They are known for their construction of perennial colonial nests from wax, the large size of their colonies, and surplus production and storage of honey, distinguishing their hives as a prized foraging target of many animals, including honey badgers, bears, and human hunter-gatherers. Only eight surviving species of honey bee are recognized, with a total of 43 subspecies, though historically 7 to 11 species are recognized. Honey bees represent only a small fraction of the roughly 20,000 known species of bees.</a>
	</div>	
	
	</div>
	<!--box1-->
	<div class="i-box">
	<!--info box image-->
	<div class="i-b-img">
	<!--type-->
	<div class="i-type">Info-Hub</div>
	<!--img-->
	<img src="../../public/img/div8.jpg">
	</div>
	<!--info box text-->	
	<div class="i-b-text">
		<a href="divman_viewarticle.php" name="enter">Bee venom has powerful anti-inflammatory properties and may benefit the health of your skin and immune system. It may also improve certain medical conditions like rheumatoid arthritis and chronic pain.</a>
	</div>	
	
	</div>
	</div>
	<form  action="divman_viewarticle.php" method="post" >
                
                    <input class=i-btn type="submit" value="View Articles" name="enter" >
        </form>
	<br/>
	<a href="divman_infohub.php" class=i-btn>Add Articles</a>
	</section>





</body>
</html>