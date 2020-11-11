<?php include_once('connect.php');





?>
<html>
<head>
<link rel="stylesheet" type="text/CSS" href="../css/homenav.css">
</head>
<body>
<div class="navbar">

<a href="mrbee.php" >Home</a> 
<a href="homeproducts.php" >Products</a>
<a href="aboutus.php" >About Us</a>

  


  
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn" >Login</button>
  <div  id="myDropdown" class="dropdown-content">
  <a href="manager_home.php">Login as Manager</a>
      <a href="#">Login as Divisional Manager</a>
      <a href="beekeeperlogin.php">Login as Beekeeper</a>

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