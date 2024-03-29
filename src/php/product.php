<?php
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        exit('Product does not exist.');
    }
} else {
    exit('Product does not exist.');
}
?>

<?=template_header('Product')?>

<div class="product content-wrapper">
    <img src="../../public/img/products/<?=$product['img']?>" width="500" height="500" alt="<?=$product['pname']?>">
    <div>
        <h1 class="pname"><?=$product['pname']?></h1>
        <span class="price">
            &#8360;<?=$product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">&#8360;<?=$product['rrp']?></span>
            <?php endif; ?>
        </span>
        <form action="customer_index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Add To Cart">
        </form>
        <div class="description">
            <?=$product['descr']?>
        </div>
    </div>
</div>
<script>            
function goBack() {
    window.history.back();
    location.href = "customer_index.php?page=products";
}
</script>
<button type="button" id="backButton" class="float-left submit-button" onclick="goBack();">Back to Products Page</button>
<?=template_footer()?>