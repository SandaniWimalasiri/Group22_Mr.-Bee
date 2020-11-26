<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'abc';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	exit('Failed to connect with the database.');
    }
}

function template_header($title) {
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>$title</title>
		<link href="../../public/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
    <body>
        <header>
            <div class="content-wrapper">
                <h1>Nature Bee Honey Company SriLanka</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="customer_index.php">Discover</a>
                    <a href="customer_index.php?page=products">Products</a>
                </nav>
               
                <div class="link-icons">  
                    <form class="serachbox" href="home.php" style="margin:auto; max-width:300px">
                        <input type="text" placeholder="Search.." name="search" autocomplete="off" />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>  
                    <a href="customer_index.php?page=cart">
					    <i class="fas fa-shopping-cart"></i>
                        <span>$num_items_in_cart</span>
                    </a>
                    
                   
                </div>
            </div>
        </header>
    <main>
EOT;
}

function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, Nature Bee Honey Company Sri Lanka</p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
EOT;
}
?>