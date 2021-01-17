<?php
	//get the data from the form
	$first_number = $_GET['first_number'];

		//get number of decimal places
	if (is_numeric($first_number)) {
	$decimal_count = strlen(explode('.',$first_number)[1]);
}

 	//validate float number entered
 	if (empty($first_number)) {
 		$error_message = 'Please enter a value.';
 	} else if (!is_numeric($first_number)) {
 		$error_message = 'Please enter a numeric value.';
 	} else if ($decimal_count > 3) {
 		$error_message = 'Please enter a float value with 3 decimal places or less';
 	}
 	else {
 		$error_message = '';
 	}
 	

 	if ($error_message != ''){
 		include ('index.html');
 		exit();
 	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>The Second Number Getter</title>
	<link rel = "stylesheet" type = "text/css" href = "a2.css" />
</head>

<body>
	<h1>Addition: Second Number</h1>

	<?php if (!empty($err_message)) { ?>
		<p class="error"><?php echo $err_message; ?></p>
	<?php } ?>

	<div class = "fdata">
		<h3>Input your second float</h3>
		<form id = "first_number" action = "AddNumbers.php" method = "post">

			<div id = "snum">
				<label>Enter a number (format : 999999.999) :</label>
				<input type = "text" name = "second_number"/><br />

			
				<input type = "hidden" name = "first_number" 
    				value = "<?php echo $first_number ?>" />


				<input type = "submit"
					value = "SubmitNumber" />
			</div>
		</form>
	</div>
</body>
</html>

