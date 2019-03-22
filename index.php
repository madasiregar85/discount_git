<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" action="index.php" method="post">
					<span class="contact2-form-title">
						PERHITUNGAN DISCOUNT
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="totalbeli">
						<span class="focus-input2" data-placeholder="totalbeli"></span>
					</div>

					<!-- <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="discount">
						<span class="focus-input2" data-placeholder="discount"></span>
					</div>
 -->
					<!-- <div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="total bayar"></textarea>
						<span class="focus-input2" data-placeholder="total "></span>
					</div>
 -->
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn"name="hitung">
								HITUNG
							</button>
						</div>
					</div>
					<?php


if(isset($_POST['hitung'])){
$totalbeli = $_POST['totalbeli'];
$totalbeli = str_replace(".", "", $totalbeli);


if (isset($totalbeli)){

$toyar=intval($totalbeli);
$diskon=0;

if ($toyar>=500000){
$diskon=(0.5*$toyar);
}
else if ($toyar>=100000) {
$diskon=(0.1*$toyar);
}else if ($toyar>=50000) {
$diskon=(0.05*$toyar);
} else {
print("Maaf Tidak Ada Diskon <br>\n");
}



{
//printf("Jumlah Bayar = %d<br>\n",$toyar);
echo "Jumlah Bayar = Rp ";
echo number_format($toyar,2,",",".");
echo "<br>";

//printf("Diskon = %d<br>\n",$diskon);

echo "Diskon = Rp ";
echo number_format($diskon,2,",",".");
echo "<br>";

$totalbayar=$toyar-$diskon;
//printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);

echo "<b>Total Bayar = </b> Rp ";
echo number_format($totalbayar,2,",",".");
echo "<br>";

echo "<b>Total Bayar = </b> Rp ";
echo number_format($totalbayar,2,",",".");
}

}

}
?>
	
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
