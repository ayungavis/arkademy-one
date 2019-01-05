<?php 
	session_start();

	if (isset($_POST['submit'])) {
		$total_money = $_POST['total_money'];
		$bill = $_POST['bill'];
		$change = $total_money - $bill;

		$a = 0;
		$b = 0;
		$c = 0;
		$d = 0;
		$e = 0;
		$f = 0;
		$g = 0;
		
		if ($change >= 50000) {
			$a = $change/50000;
			$change = $change%50000;
		}

		if ($change >= 20000) {
			$b = $change/20000;
			$change = $change%20000;
		}

		if ($change >= 10000) {
			$c = $change/10000;
			$change = $change%10000;
		}

		if ($change >= 5000) {
			$d = $change/5000;
			$change = $change%5000;
		}

		if ($change >= 2000) {
			$e = $change/2000;
			$change = $change%2000;
		}

		if ($change >= 1000) {
			$f = $change/1000;
			$change = $change%1000;
		}

		if ($change >= 100) {
			$g = $change/100;
			$change = $change%100;
		}

		if($a) $_SESSION['a'] = $a;
		if($b) $_SESSION['b'] = $b;
		if($c) $_SESSION['c'] = $c;
		if($d) $_SESSION['d'] = $d;
		if($e) $_SESSION['e'] = $e;
		if($f) $_SESSION['f'] = $f;
		if($g) $_SESSION['g'] = $g;
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Wahyu Adi Kurniawan">
		<meta name="generator" content="">
		<title>Change</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-1.7.min.js"></script>

		<style>
	  		.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
	  		}

	  		@media (min-width: 768px) {
				.bd-placeholder-img-lg {
		  			font-size: 3.5rem;
				}
	  		}
		</style>
		<!-- Custom styles for this template -->
		<link href="vendor/floating-labels.css" rel="stylesheet">
	</head>
  	<body>
		<form class="form-signin" action="" method="post">
  			<div class="text-center mb-4">
				<h1 class="h3 mb-3 font-weight-normal">Change</h1>
				<p>This page created to answer the question number 4 from <strong>Arkademy Grand Bootcamp 2</strong>.</p>
		  	</div>

		  	<div class="form-label-group">
		  		<input type="text" id="bill" class="form-control" name="bill" placeholder="$1000" required>
		  		<label for="bill">Bill</label>
		  	</div>

		  	<div class="form-label-group">
				<input type="text" id="total_money" class="form-control" name="total_money" placeholder="$1000" required>
				<label for="total_money">Total Money</label>
		  	</div>

		  	<?php if(isset($_SESSION['a']) || isset($_SESSION['b']) || isset($_SESSION['c']) || isset($_SESSION['d']) || isset($_SESSION['e']) || isset($_SESSION['f']) || isset($_SESSION['g'])) { ?>
			  	<div class="form-label-group">
			  		<p>Output:</p>
			  		<p>
			  			<?php 
			  				if(isset($_SESSION['a'])) echo "50000 ".number_format($_SESSION['a'])."x <br/>";
			  				if(isset($_SESSION['b'])) echo "20000 ".number_format($_SESSION['b'])."x <br/>";
			  				if(isset($_SESSION['c'])) echo "10000 ".number_format($_SESSION['c'])."x <br/>";
			  				if(isset($_SESSION['d'])) echo "5000 ".number_format($_SESSION['d'])."x <br/>";
			  				if(isset($_SESSION['e'])) echo "2000 ".number_format($_SESSION['e'])."x <br/>";
			  				if(isset($_SESSION['f'])) echo "1000 ".number_format($_SESSION['f'])."x <br/>";
			  				if(isset($_SESSION['g'])) echo "500 ".number_format($_SESSION['g'])."x <br/>";

			  				unset($_SESSION['a']);
			  				unset($_SESSION['b']);
			  				unset($_SESSION['c']);
			  				unset($_SESSION['d']);
			  				unset($_SESSION['e']);
			  				unset($_SESSION['f']);
			  				unset($_SESSION['g']);
			  			?>
				  	</p>
			  	</div>
			<?php } ?>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
  			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Wahyu Adi Kurniawan</p>
		</form>
	</body>
</html>