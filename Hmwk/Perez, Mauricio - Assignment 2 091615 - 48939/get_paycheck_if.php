<html>
 <?php /*
 	RCC Class PHP
	Sept 15th, 2015
	Purpose: Paycheck with IF Paycheck Construct
	   */
 ?>
 <body>
	 <?php // sets hours worked variable to NULL and sets grade variable from form data
        $paycheck = "NULL";
        $hours = $_GET['hours'];
		$rate = (float)$_GET['rate'];		
		$rateD = (float)($rate*2);
		$rateT = (float)($rate*3);
     ?>
	 
	 

	 
     <!--
	 Prompt hours worked with total
	 -->
    <p>With <?php echo $_GET["hours"];?> hours worked, You have earned $
    
	<!--
	//IF Statement in PHP: Will result in total paycheck amount
	-->
	<?php // Uses independent if statements, implies the test needs to be 2 sided
            if($hours<0)					$total="You have entered invalid hours worked.";
			if($hours==0)					$total="0.00 - Did you work this week???";
			if($hours>0  && $hours<=20)		$total=($rate*$hours);
			if($hours>20  && $hours<=40)	$total=(($rate*20)+(($hours-20)*$rateD));
			if($hours>40  && $hours<=72)  	$total=(($rate*20)+($rateD*(20))+($hours-40)*$rateT);
			if($hours>72 && $hours<=168)   	$total="YOU ARE NOT ALLOWED TO WORK MORE THAN 72 HOURS A WEEK!!!";
			if($hours>168)					$total="THERE ARE NOT MORE THAN 168 HOURS IN A WORK WEEK!!!";
            echo $total;
    ?>
    
    .</p>

 </body>
</html>
