
<!-- <?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?> -->

<?php include 'add.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Корзина</title>
	<meta charset='utf-8'>

</head>
<body>
	<h1> У вас в корзине: </h1>
	<?php 
	$totalSum = null;
	foreach ($_SESSION["products"] as $key => $value) {
		if (is_null($value)) 
		{
			continue;
		}
		else 
		{
			$a = $value;
			settype($a,'integer'); ?>
			<div class="l-grid3">
			<?php include_once 'data.php';
			$products[$a]->title(); 
			?>
			<div><img src="<?php echo $products[$a]->img(); ?>"></div>
			<span><?php echo $products[$a]->price(); ?></span>
		<?php }
		$totalSum += $products[$a]->price();
	}; 
	?>
	<h2>Общая сумма товаров в корзине: <?php echo $totalSum; ?> р.</h2>
</body>
</html>