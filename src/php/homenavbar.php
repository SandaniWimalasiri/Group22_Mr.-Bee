<?php include_once('../../config/connect.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/CSS" href="../../public/css/homenav.css">
</head>
<body>
<div class="navbar">

<a href="index.php" >Home</a> 
<a href="customer_index.php" >Products</a>
<a href="aboutus.php" >About Us</a>
  
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn" >Login</button>
  <div  id="myDropdown" class="dropdown-content">
  <a href="sign_in_admin.php">Login as Manager</a>
  <a href="sign_in_divman.php">Login as Divisional Manager</a>
  <a href="beekeeperlogin.php">Login as Beekeeper</a>

  </div>
</div>
</div> 

  <script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}


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