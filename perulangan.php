<!DOCTYPE html>
<html>
<head>
	<title>Perulangan</title>
</head>
<body>
<?php 
$x=1; //x=1
while ($x <= 10) { //x<=10
	echo "Saya tidak akan mengulangi <br>";
	$x++; //x=x+1
}
echo "<br>";
$no=1;
do {
	echo $no;
	$no++."<br>";
} while ($no <= 5);
echo "<br>";
for ($i=1; $i <= 5; $i++) { 
	echo $i;
}
?>
</body>
</html>