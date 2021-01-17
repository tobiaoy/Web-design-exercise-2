<?php
	//get the data from the form
	$first_number = $_POST['first_number'];
	$second_number = $_POST['second_number'];

	//get number of decimal places
	if (is_numeric($second_number)) {
	$decimal_count = strlen(explode('.',$second_number)[1]);
}


 	//validate float number entered
 	if (empty($second_number)) {
 		$err_message = 'Please enter a value.';
 	} else if (!is_numeric($second_number)) {
 		$err_message = 'Please enter a numeric value.';
 	} else if ($decimal_count > 3) {
 		$err_message = 'Please enter a float value with 3 decimal places or less';
 	}
 	else {
 		$err_message = '';
 	}
 	

 	if ($err_message != ''){
 		include ('GetNumber2.php');
 		exit();
 	}

 	//sum of first and second number
 	$sum = $first_number + $second_number;

 ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Addition of Numbers</title>
	<link rel = "stylesheet" type = "text/css" href = "a2.css" />
</head>

<body>
	<div class = "fdata">
		<label>Your number 1:</label>
		<span><?php echo $first_number; ?></span><br/>

		<label>Your number 2:</label>
		<span><?php echo $second_number; ?></span><br/>

		<label>The sum of the 2 numbers:</label>
		<span><?php echo $sum; ?></span>	
	</div>
</body>
</html>