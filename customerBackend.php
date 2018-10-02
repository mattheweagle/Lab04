<?php
	include("style.css");
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$spoons = $_POST['spoons'];
	$forks = $_POST['forks'];
	$sporks = $_POST['sporks'];
	$shipping = $_POST['shipping'];
	$shippingCost = 0;
	if($shipping == "$50.00 over night"){
		$shippingCost = 50;
	}
	if($shipping == "$5.00 three day"){
		$shippingCost = 5;
	}
	$totalCost = $shippingCost + $sporks*3 + $forks*2 + $spoons; 
	echo "Hello " . $username . "! Your password is " . $password . "<br><br>";
	echo "<fieldset><legend>Receipt</legend>";
	echo "<table><tr><th>Item</th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
	echo "<tr><th>Spoons</th><td>" . $spoons . "</td><td>$1.00</td><td>$" . $spoons . "</td></tr>";
	echo "<tr><th>Forks</th><td>" . $forks . "</td><td>$2.00</td><td>$" . $forks*2 . "</td></tr>";
	echo "<tr><th>Sporks</th><td>" . $sporks . "</td><td>$3.00</td><td>$" . $sporks*3 . "</td></tr>";
	echo "<tr><th>Shipping</th><td colspan='2'>" . $shipping . "</td><td>$" . $shippingCost . "</td></tr>";
	echo "<tr><th colspan='3'>Total Cost</th><td>$" . $totalCost . "</td></tr></fieldset>";
?>
