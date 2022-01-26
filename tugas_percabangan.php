<!DOCTYPE html>
<html>
<head>
	<title>Percabangan</title>
</head>
<body>
<?php
echo "Pembayaran ke-1 <br>";
$x = 85;
$b = 150;
$ba = 170;
$c = 210;
$d = 250;
$kaliann = $x * $d;
$kalian = $x * $c;
$kali = $x * $b;
$kalia = $x * $ba;
$total = $kalian + $kali + $kaliann; 
if ($x <= 30) {
	echo "X x b = ".$kali."<br>";
}elseif ($x > 30) {
	echo "X x ba =".$kalia."<br>";
}
echo "Pembayaran ke-2<br>";
if ($x <= 30) {
	echo "X x c =".$kalian."<br>";
}
echo "Pembayaran ke-3 <br>";
if ($x <= 30) {
	echo "X x d =".$kaliann."<br>";
}
echo "Total Pembayaran = " .$kali."+".$kalian."+".$kaliann."=".$total."";

?>
</body>
</html>