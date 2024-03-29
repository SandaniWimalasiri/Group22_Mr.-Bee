<?php
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

<div class="featured">
    <h2>Pure Organic Bee Honey Products</h2>
    <p> From Your Nature Honey Bee Company Sri Lanka </p>
</div>

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

<div class="recentlyadded content-wrapper">
    <h2>Recently Added Products</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
          <a href="customer_index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="../../public/img/<?=$product['img']?>" width="200" height="200" alt="<?=$product['pname']?>"></br>
              <span class="pname"><?=$product['pname']?></span>
              <span class="price">
                &#8360;<?=$product['price']?>
                  <?php if ($product['rrp'] > 0): ?>
                    <span class="rrp">&#8360;<?=$product['rrp']?></span>
                  <?php endif; ?>
            </span>
          </a>
        <?php endforeach; ?>
    </div>
</div>

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


<?=template_footer()?>