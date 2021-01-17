<?php
	//get the data from the form
 	$user_number = $_GET['float_value'];
 	$decimal_points = $_GET['nd_dp'];

	//get number of decimal places
	if (is_numeric($user_number)) {
	$decimal_count = strlen(explode('.',$user_number)[1]);
}


 	//validate float number entered
 	if (empty($user_number)) {
 		$error_message = 'Please enter a value.';
 	} else if (!is_numeric($user_number)) {
 		$error_message = 'Please enter a numeric value.';
 	} else if ($decimal_count > 4) {
 		$error_message = 'Please enter a float value with 4 decimal places or less';
 	}
 	else {
 		$error_message = '';
 	}
 	

 	if ($error_message != ''){
 		include ('index.html');
 		exit();
 	}

 	//Truncation/Addition or T1
 	$standardized_number = number_format($user_number, $decimal_points);

 	//Reversal or T2
 	$stand_number = sprintf($standardized_number);
 	$rev_number = '0';

 	for ($i = strlen($stand_number) - 1; $i >= 0; $i--) {
 		$rev_number .= $stand_number{$i};
 	}

 	//$reversed_number = (float)$rev_number;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Float Transformer</title>
	<link rel = "stylesheet" type = "text/css" href = "a2.css" />
</head>

<body>
	<div class = "fdata">
		<label>Your transformed number is:</label>
		<span><?php echo $rev_number; ?></span>
	</div>
</body>
</html>