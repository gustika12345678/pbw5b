<h1>Aritmatika</h1>
<?php 
$a = 25;$b = 5;
$tambah = $a + $b;
$bagi = $a / $b;
$kurang = $a - $b;
$kali = $a * $b;
$modulus = $a % $b;
$pangkat = $a ** $b;
echo "a=".$a.", b=".$b."<br>";
echo "a + b = ".$tambah."<br>";
echo "a / b = ".$bagi."<br>";
echo "a - b = ".$kurang."<br>";
echo "a * b = ".$kali."<br>";
echo "a modulus b = ".$modulus."<br>";
echo "a pangkat b = ".$pangkat."<br>";
?>
<h1>Penugasan</h1>
<?php 
$a = 25;$b = 5;
//echo "a=b = ".$a=$b."<br>";
echo "a+=b = ".$a-=$b."<br>";
?>
<h1>Perbandingan</h1>
<?php 
$a = 25;$b = 24; //  0 =< x < 25 ==> x = 0 sd 24
if($a<=$b) $hasil = "Benar"; // = batas termasuk range
	else $hasil = "Salah";
echo "a<=b = ".$hasil."<br>";
?>
<h1>Penambahan</h1>
<?php 
$a = 25;
echo "++a = ".++$a."<br>";
?>
<h1>Logika</h1>
<?php 
$a = 25;$b = 5;
if(($a>20 || $b>30) && $b==0) $hasil = "benar";
	else $hasil = "salah";
echo $hasil;
?>
<h1>String</h1>
<?php 
$pesan = "";
$pesan .= "Beni <br>";
$pesan .= "Makan";
echo $pesan;
?>