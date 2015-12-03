<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Output the Sum Array</title>
<?php include 'Functions.php'; ?>
</head>

<body>

<?php
//Dr. Mark E. Lehr
//March 22nd, 2010
//Examples of Tables, For Loops, Functions, and Include Statments

	//Input the Arrays
	$x=operand(1,2,$_GET);
	$y=operand(3,4,$_GET);
	//Create and display the sum Array
	echo '<h1 align="center">Our Sum Table </h1>';
	$table=sumit($x,$y);
	display_sum_table($table);
?>

</body>
</html>
