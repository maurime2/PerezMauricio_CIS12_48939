<?php
	//Creates short variable names
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	$find = $_POST['find'];
?>


<html>
<head>
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1> Bob's Auto Parts</h1>
<h2>Order Results</h2>
	<?php
		echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";	//Start Printing Order
	
	//Prints Quantity's
	echo '<p>Your order is as follows: </p>';
	echo $tireqty.' tiers <br />';
	echo $oilqty.' Bottles of oil <br />';
	echo $sparkqty.' Spark Plugs<br />';
	
	$totalqty = 0;
	$totalqty = $tireqty + $oilqty + $sparkqty;
	echo "Items ordered: ".$totalqty."<br />";
	$totalamount = 0.00;
	
	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);
	
	$totalamount = $tireqty * TIREPRICE
				+ $oilqty * OILPRICE
				+ $sparkqty * SPARKPRICE;
				
	echo "Subtotal; $".number_format($totalamount,2)."<br />";
	
	$taxrate = 0.10; // local salestax is 10%
	$totalamount = $totalamount * (1 + $taxrate);
	echo "Total including tax: $" .number_format($totalamount,2)."<br />";
	
	if($totalqty == 0)
		echo 'you did not order anything in the previous page!<br />';
	
	/*echo 'isset($tireqty): '.isset($tireqty).'<br />';
	echo 'isset($nothere): '.isset($nothere).'<br />';
	echo 'empty($tireqty): '.empty($tireqty).'<br />';
	echo 'empty($nothere): '.empty($nothere).'<br />';
	*/
	
		switch ($find){
			case "a":
				echo "<p>Regular Customer.</p>";
				break;
			case "b":
				echo "<p>Customer referred by TV advert.</p>";
				break;
			case "c":
				echo "<p>Customer referred by phone directory.</p>";
				break;
			case "d":
				echo "<p>Customer referred by word of mouth.</p>";
				break;
			default;
				echo "<p>We don't know how this customer found us.</p>";
				break;				
	}
	?>
	
	
	
	
</html>