<?php
session_start();
$id = $_GET["id"];
if (isset($_SESSION["products"])) {
	$products = $_SESSION["products"];
} else {
	$products = array();	
};
// array_push($products, $id);
$products[] = $id;
$_SESSION["products"] = $products;