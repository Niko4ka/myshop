<?php include 'data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset='utf-8'>
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/grid.css">

    <script type="text/javascript" src="assets/js/jquery-2.2.2.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>
</head>
<body>
<header>
	<h1><?php echo "Shop" ?></h1>
	<nav>
		<ul>
            <li><a href="products.html">Продукты</a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="cart.html">Корзина</a></li>
        </ul>
	</nav>

	<div id="cart">Корзина пуста</div>
</header>

	<div class="wrapper">
		<div class="container">

        <?php $products; ?>

        <?php foreach ($products as $index => $product) { ?>
            <div class="l-grid3">
                <div><img src="<?php echo $product["img"] ?>" alt="Alt"></div>
                <a href="javascript:{}" class="product-link" data-id="<?php echo $index ?>">В корзину</a>
            </div>
        <?php } ?>

		</div>

		<div class="buffer"></div>
	</div>

	<footer>
	    &copy; LevelUP
	</footer>
</body>
</html>