<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Wahyu Adi Kurniawan">
		<meta name="generator" content="">
		<title>Password Validation</title>

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

	  		.invalid {
			    padding-left:22px;
			    line-height:24px;
			    color:#ec3f41;
			}
			.valid {
			    padding-left:22px;
			    line-height:24px;
			    color:#3a7d34;
			}

	  		#password_info {
			    position:absolute;
			    bottom:-235px;
			    bottom: -115px\9; /* IE Specific */
			    right:40px;
			    width:300px;
			    padding:15px;
			    background:#fefefe;
			    font-size:.875em;
			    border-radius:5px;
			    box-shadow:0 1px 3px #ccc;
			    border:1px solid #ddd;
			    display: none;
			}

			#password_info h4 {
			    margin:0 0 10px 0;
			    padding:0;
			    font-weight:normal;
			}

			#password_info::before {
			    content: "\25B2";
			    position:absolute;
			    top:-12px;
			    left:45%;
			    font-size:14px;
			    line-height:14px;
			    color:#ddd;
			    text-shadow:none;
			    display:block;
			}
		</style>
		<!-- Custom styles for this template -->
		<link href="vendor/floating-labels.css" rel="stylesheet">
	</head>
  	<body>
		<form class="form-signin" action="" method="post">
  			<div class="text-center mb-4">
				<h1 class="h3 mb-3 font-weight-normal">Password Validation</h1>
				<p>This page created to answer the question number 2 from <strong>Arkademy Grand Bootcamp 2</strong>.</p>
		  	</div>

		  	<div class="form-label-group">
				<input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
				<label for="password">Password</label>
				<div id="password_info">
				    <p>Password must meet the following requirements:</p>
				    <ul>
				        <li id="letter" class="invalid">At least <strong>one lowercase letter</strong></li>
				        <li id="capital" class="invalid">At least <strong>one uppercase letter</strong></li>
				        <li id="number" class="invalid">At least <strong>one number</strong></li>
				        <li id="special" class="invalid">At least <strong>one special character</strong></li>
				        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
				    </ul>
				</div>
		  	</div>

			<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
  			<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - Wahyu Adi Kurniawan</p>
		</form>

		<script>
			$(document).ready(function() {
				$('input[type=password]').keyup(function() {
				    var password = $(this).val();
					// validate the length
					if (password.length < 8) {
					    $('#length').removeClass('valid').addClass('invalid');
					} else {
					    $('#length').removeClass('invalid').addClass('valid');
					}

					// validate letter
					if (password.match(/[a-z]/)) {
					    $('#letter').removeClass('invalid').addClass('valid');
					} else {
					    $('#letter').removeClass('valid').addClass('invalid');
					}

					// validate capital letter
					if (password.match(/[A-Z]/)) {
					    $('#capital').removeClass('invalid').addClass('valid');
					} else {
					    $('#capital').removeClass('valid').addClass('invalid');
					}

					// validate number
					if (password.match(/\d/)) {
					    $('#number').removeClass('invalid').addClass('valid');
					} else {
					    $('#number').removeClass('valid').addClass('invalid');
					}

					// validate special characters
					if (password.match(/[!*^?()?=.*\+\-\_\@\#\$\%\&]/)) {
						$('#special').removeClass('invalid').addClass('valid');
					} else {
						$('#special').removeClass('valid').addClass('invalid');
					}
				}).focus(function() {
				    $('#password_info').show();
				}).blur(function() {
				    $('#password_info').hide();
				});
			});
		</script>
	</body>
</html>