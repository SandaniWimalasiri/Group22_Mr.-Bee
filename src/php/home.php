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
<section>
  <img class="slideshow" src="../../public/img/s1_1.jpg" style="width:100% ; height:auto">
  <img class="slideshow" src="../../public/img/p0_6_1.jpg" style="width:100% ; height:auto">
  <img class="slideshow" src="../../public/img/p0_4_1.jpg" style="width:100% ; height:auto">
  <img class="slideshow" src="../../public/img/s3_1.jpg" style="width:100% ; height:auto">
  <img class="slideshow" src="../../public/img/p0_2_1.jpg" style="width:100% ; height:auto">
  <img class="slideshow" src="../../public/img/s2_1.jpg" style="width:100% ; height:auto">
</section>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slideshow");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}
</script>

<div class="recentlyadded content-wrapper">
    <h2>Recently Added Products</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="../../public/img/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
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

<?=template_footer()?>