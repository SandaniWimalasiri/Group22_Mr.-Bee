<?php include_once('connect.php');




?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">

</head>
<body>
<div class="topnav">
  <a><img class="logo" src="../images/2.jpg"></a>
  

  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION['username']; ?></button>
  <div  id="myDropdown" class="dropdown-content">
  
  <center><img src="  ../images/14.png" ></center>
  <?php
    
        
      $sql = "SELECT fullName,userEmail FROM beekeeper WHERE  userID='".$_SESSION['userid']."'";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
		while($row=mysqli_fetch_assoc($result)){  

            
            
        echo"<center>";   
        echo $row['fullName'];
        echo "<br>";
        echo $row['userEmail'];
        echo"</center>";  


		
    }?>

  </br>

<a href="beekeeperlogin.php" style="float: right; font-size:14px;color:grey" >Log out</a> 
 
<a href="bk_profile.php" style="float: left; font-size:14px;color:grey" >Edit Profile</a>
    
  

  </div>
</div>
</div>

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>