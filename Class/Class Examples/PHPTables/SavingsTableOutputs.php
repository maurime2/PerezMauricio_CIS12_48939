<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Output the Savings Table</title>
<?php include 'Functions.php';?>
</head>

<body>

<?php
//Dr. Mark E. Lehr
//March 22nd, 2010
//Examples of Tables, For Loops, Functions, and Include Statments

	//Fill the input arrays
	$i=operand(1,2,$_GET);//Interest column array
	$n=operand(3,4,$_GET);//Years column array
	//Create Savings Table Array and Output the Contents
	echo '<h1 align="center">Our Savings Table </h1>';
	$p=$_GET[5];//Principle
	$sav_table=savings($p,$i,$n);
	display_savings($i,$n,$sav_table);
?>

</body>
</html>
