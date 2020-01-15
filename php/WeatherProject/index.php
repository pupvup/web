<?php
	if ($_GET['city']) {
		$forecast = file_get_contents("https://www.gismeteo.com/weather-".$_GET['city']."-744/now/");
		$one = explode('</div></div><h1>', $forecast);
		$two = explode('</h1></div>', $one[1]);
		$three = explode('<span class="js_value tab-weather__value_l">', $forecast);
		$four = explode('<span class="tab-weather__value_m">.', $three[1]);
		$weather = '<div class="alert alert-warning" role="alert">'.$two[0].$four[0].'°</div>';
	}
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Weather</title>
		<style type="text/css">
			html {
				background: url(bg.jpg) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			body {
				background: none;
				color: #FFE0BC;

			}
			.container {
				text-align: center;
				margin-top: 200px;
				width: 480px;
			}
			button {
				margin: 20px 0;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>What's the Weather?</h1>
			<form>
				<fieldset class="form-group">
					<label for="city">Enter the name of a city.</label>
					<input type="text" class="form-control" name="city" id="city" placeholder="e.g. London, Paris">
				</fieldset>
				<button type="submit" class="btn btn-primary">Explore</button>
			</form>
			<div id="weather"><?php
				if ($weather) {
					echo $weather;
				}
			?></div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>