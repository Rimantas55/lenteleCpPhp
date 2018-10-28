<?php 
$cost = isset($_GET['cost_price']) && !empty($_GET['cost_price']) ? $_GET['cost_price'] : 0;
$shipping = $_GET['cost_price'] < 40 ? 10 : 0;
$margin = isset($_GET['margin']) && !empty($_GET['margin']) ? $cost * ($_GET['margin']/100) : 0;
$vat = ($margin + $cost + $shipping) * 0.21;
$retail = $cost + $shipping + $margin + $vat;

/* 1 spaudziant calculate reiksme kazkodel kaskart keiciasi
2 ka reiskia "?" ir : 0;
3 ka daro - tabindex="0" autofocus nes isjungiau juos ir skirtumo nepastebejau*/
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Profit calculator</title>
</head>
<body>
	<div class="container">
		<h1>Profit calculator</h1>
		<div class="row">
			<div class="col">
				<form>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Cost price</span>
						</div> 
						<input tabindex="0" autofocus class="form-control" type="text" name="cost_price" value="<?= $cost ?>"> 
						<div class="input-group-append">
					    <span class="input-group-text">Eur</span>
					  </div>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Margin</span>
						</div>
						<input tabindex="0" class="form-control" type="text" name="margin" value="<?= $margin ?>">
						<div class="input-group-append">
					    <span class="input-group-text">%</span>
					  </div>
					</div>
				<input class="btn btn-success btn-block mt-2" type="submit" value="Calculate">
			</form>
		</div>
		<div class="col">
			<ul class="list-group">
			  <li class="list-group-item">Cost price: <?= $cost; ?></li>
			  <li class="list-group-item">Shipping: <?= $shipping; ?></li>
			  <li class="list-group-item">Margin: <?= $margin; ?></li>
			  <li class="list-group-item">VAT (21%): <?= $vat; ?></li>
			  <li class="list-group-item bg-info text-light">Retail price: <?= $retail; ?></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>