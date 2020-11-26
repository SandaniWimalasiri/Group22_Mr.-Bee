

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nature Bee honey company</title>
		<link href="../../public/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>

<header>
            <div class="content-wrapper">
                <h1>Nature Bee Honey Company SriLanka</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="customer_unreg.php">Discover</a>
                   
                </nav>
               
                <div class="link-icons">  
                    
                    
                    <button id="logInButton" class="float-left submit-button" >Sign In</button>
                        <script type="text/javascript">
                            document.getElementById("logInButton").onclick = function () {
                            location.href = "customer_login.php";
                            };
                        </script>
                </div>
            </div>
        </header>
<main>
<div class="featured">
    <h2>Pure Organic Bee Honey Products</h2>
    <p> From Your Nature Honey Bee Company Sri Lanka </p>
</div>
                        </main>
<br>



<div class="slideshow-container">

  <div class="slideshow fade">
    <img src="../../public/img/p0_2_1.jpg" style="width:100% ; height:auto">
  </div>

  <div class="slideshow fade">
    <img src="../../public/img/bg7.jpg" style="width:100% ; height:auto">
  </div>

  <div class="slideshow fade">
    <img src="../../public/img/bg3_1.jpg" style="width:100% ; height:auto">
  </div>

  <div class="slideshow fade">
    <img src="../../public/img/p0_4_1.jpg" style="width:100% ; height:auto">
  </div>

  <div class="slideshow fade">
    <img src="../../public/img/bg6.jpg" style="width:100% ; height:auto">
  </div>

  <div class="slideshow fade">
    <img src="../../public/img/s2_1.jpg" style="width:100% ; height:auto">
  </div>

</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slideshow");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000);
}
</script>

<button onclick="topFunction()" id="scrollUpBtn" title="Back to Top">Back to Top</button>

<script>
var mybutton = document.getElementById("scrollUpBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



