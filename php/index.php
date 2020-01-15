 <?php

	$names = array("Mick", "Fiona", "Emma", "Monica");
	
	if ($_POST) {
		$isFound = false;
		foreach ($names as $value) {
			if ($value == $_POST["name"]) {
				echo "<p style=\"color: green\">[OK]</p>";
				$isFound = true;
			}
		}
		if (!$isFound) {
			echo "<p style=\"color: red\">[KO]</p>";

		}
	}
?>
<p>Your name:</p>
<form method="post">
	<input name="name" type="text">
	<input type="submit" value="GO">
</form>