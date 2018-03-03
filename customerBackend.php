<?php
$username = $_POST["username"];
$password = $_POST["password"];
$helmet = $_POST["helmet"];
$gloves = $_POST["gloves"];
$jacket = $_POST["jacket"];
$shipping = $_POST["shipping"];
$h = 500*$helmet;
$g = 70*$gloves;
$j = 200*$jacket;
$total = $h + $g + $j + $shipping;
$s = "7-Day";
if ($shipping == 5){
	$s = "3-Day";
}
else if ($shipping == 50){
	$s = "Overnight";
}

echo "Welcome!<br>The username you entered is:" . $username . "<br>";
echo "The password you entered is: " . $password . "<br><br>";

echo "Please review your receipt below: <br><br>";

echo "<table border=5px bgcolor='#d0d4db'>";
echo "<tr><th width=40px></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><td align=center>CrossHelmet X1</td><td align=center>" .$helmet. "</td><td align=center>$500</td><td align=center>$" . $h . "</td></tr>";
echo "<tr><td align=center>Armored Gloves</td><td align=center>" .$gloves. "</td><td align=center>$70</td><td align=center>$" . $g . "</td></tr>";
echo "<tr><td align=center>AlpineStars Jacket</td><td align=center>" .$jacket. "</td><td align=center>$200</td><td align=center>$" . $j . "</td></tr>";
echo "<tr><td align=center>Shipping</td><td align=center width=100px>" .$s. "</td><td></td><td align=center>$" . $shipping . "</td></tr>";
echo "<tr bgcolor='#e0e8dc'><td align=center>Total</td><td></td><td></td><td align=center>$" . $total . "</td></tr><table>";



?>
