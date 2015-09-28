<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables and Operators</title>
<?php
/*
	Dr. Mark E. Lehr
	Sept 9th, 2015
	Purpose:  Investigate variables and operators
*/
?>
</head>

<body>
<?php
	//Create variables of all primitive data types
	$ix=(int)(9/5);  //Integer
	$fx=(float)(9/5);//Float
	$fy=3.12e1;      //Double Scientific Notation
	$fz=3120e-2;     //Double Scientific Notation
	$hx=0xFF;        //Hex
	$ox=077;         //Octal
	$bx=0b11;        //Binary
	$boolx=true;     //Boolean
	$booly=false;    //Boolean
	$sx="This is"." a great day!";//String
	$sy='This is'.' a great day!';//String
	$sz='\'"This is a great day!\'"';//String
	$mx=10%3;        //Mod operator
	//Output using echo
	echo "<p> $ix </p>";
	echo '<p> $ix </p>';
	echo "<p> $fx </p>";
	echo "<p> $fy </p>";
	echo "<p> $fz </p>";
	echo "<p> $hx </p>";
	echo "<p> $ox </p>";
	echo "<p> $bx </p>";
	echo "<p> $boolx $booly</p>";
	echo "<p> $sx</p>";
	echo "<p> $sy</p>";
	echo "<p> $sz</p>";
	echo "<p> $mx</p>";
	echo '<p>'.$mx.'</p>';
	//Utilize the ternary operator
	$hours=30;//Hours worked
	$payRate=15;//Pay rate $/hr
	$payChk=$hours<0  ?               0:
	        ($hours<20? $hours*$payRate:
			 20*$payRate+2*($hours-20)*$payRate);
	echo "<p> Paycheck = $$payChk</p>";
?>
</body>
</html>