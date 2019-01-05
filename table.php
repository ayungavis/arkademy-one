<?php 
	$mysqli = new mysqli("localhost", "root", "", "arkademy");
	$query = "SELECT a.`name` AS product_name, a.`category_id` AS category_id, b.`id` AS cat_id, b.`name` AS category_name FROM products a INNER JOIN categories b ON a.`category_id` = b.`id`";
	$data = $mysqli->query($query);

	$x = 1;
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Wahyu Adi Kurniawan">
		<meta name="generator" content="">
		<title>Table Database</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
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
  		<div class="form-signin">
			<div class="text-center mb-4">
				<h1 class="h3 mb-3 font-weight-normal">Table Database</h1>
				<p>This page created to answer the question number 7 from <strong>Arkademy Grand Bootcamp 2</strong>.</p>
		  	</div>

		  	<table class="table">
		  		<thead>
		            <tr>
						<th>#</th>
						<th>Category Name</th>
						<th>Products</th>
		            </tr>
	          	</thead>
	          	<tbody>
	          		<?php if ($data->num_rows > 0) { ?>
	          			<?php while ($row = $data->fetch_assoc()) { ?>
	          				<tr>
		            			<td><?php echo $x; $x++; ?></td>
		            			<td><?php echo $row['category_name']; ?></td>
		            			<td><?php echo $row['product_name']; ?></td>
	            			<tr>
	            		<?php } ?>
	            	<?php } ?>
	            </tbody>
		  	</table>
		  	
  			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Wahyu Adi Kurniawan</p>
  		</div>
	</body>
</html>