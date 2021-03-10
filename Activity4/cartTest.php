<?php
require_once "Cart.php";

$cart = new Cart(1);

$product = array(array("ID"=>12, "NAME"=>"Item Name", "DESC"=>"Item Desc", "PRICE"=>123.45));

$cart->addItemToCart(12);
$cart->addItemToCart(18);
$cart->addItemToCart(3);
$cart->addItemToCart(3);

$cart->updateQTY(12, 200);
$cart->updateQTY(18, 0);

echo "<pre>";
print_r($cart);
echo "</pre>";

echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SERVER'];
echo "<br>";
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
echo $root;