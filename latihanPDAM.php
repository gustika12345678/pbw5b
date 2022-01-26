<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pembayaran PDAM</title>
</head>

<body style="margin: 10px;">
    <h2>Tagihan Pemakaian Air</h2><br>
    <form method="post" action="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masukan Total Penggunaan Air</label>
            <input type="text" class="form-control" name="guna" style="width: 400px;" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary mb-4" name="proses" value="HITUNG">Hitung</button><br>


        <?php

if(isset($_POST["proses"])){
	$guna = $_POST["guna"];
	if($guna<=30){
		$biaya = $guna * 150;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}elseif($guna<=60){
		$biaya = ($guna-30) * 170 + 4500;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}elseif($guna<=90){
		$biaya = ($guna-60) * 210 + 4500 + 5100;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}else{
		$biaya = ($guna-90) * 250 + 4500 + 5100 + 6300; 
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}		
}


?>
    </form>

</body>

</html>