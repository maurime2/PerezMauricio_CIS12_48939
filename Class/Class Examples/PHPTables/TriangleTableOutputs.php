<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Output the Triangle Math Array</title>
<?php include 'Functions.php'; ?>
</head>

<body>

<?php
//Dr. Mark E. Lehr
//March 22nd, 2010
//Examples of Tables, For Loops, Functions, and Include Statments

	//Fill the input array
	$x=operand(1,2,$_GET);
	$y=operand(3,4,$_GET);
	//Create the Triangular Array
	echo '<h1 align="center">Our Triangular Math Table </h1>';
	$table=triangle($x,$y);
	display_triangle($x,$y,$table);
?>

</body>
</html>
