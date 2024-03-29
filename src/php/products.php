<?php
$num_products_on_each_page = 4;
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
$stmt = $pdo->prepare('SELECT * FROM products where is_deleted=0 ORDER BY date_added DESC LIMIT ?,?');
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_products = $pdo->query('SELECT * FROM products where is_deleted=0')->rowCount();
?>

<?=template_header('Products')?>

<div class="products content-wrapper">
    <h1>Products</h1>
    <p><?=$total_products?> Products</p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="customer_index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="../../public/img/products/<?=$product['img']?>" width="200" height="200" alt="<?=$product['pname']?>">
        </br>
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
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="customer_index.php?page=products&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="customer_index.php?page=products&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
</div>
<script>      
function goBack() {
    window.history.back();
    location.href = "customer_index.php";
}
</script>
<button type="button" id="backButton" class="float-left submit-button" onclick="goBack();">Back to Home Page</button>
<?=template_footer()?>