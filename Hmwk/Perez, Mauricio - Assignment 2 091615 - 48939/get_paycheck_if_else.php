<html>
 <?php /*
 	Mauricio S. Perez
	Sept 15th, 2015
	Purpose:  Paycheck with If-Else Construct
	   */
 ?>
 <body>
	 <?php // sets letter paycheck variable to NULL and sets paycheck variable from form data
        $paycheck = "NULL";
        $hours = $_GET['hours'];
		$rate = (float)$_GET['rate'];
		$rateD = (float)$rate*2;
		$rateT = (float)$rate*3;
     ?>
    <!--
	 Prompt hours worked with total
	 -->
    <p>With <?php echo $_GET["hours"];?> hours worked, Your paycheck this week is: $ 
    
	<!--
	IF-ELSE Switch Statement in PHP: Will result in total paycheck amount
	-->
	<?php // Uses the if_else construct
            if($hours<0)						$paycheck="0.00 - You cannot work negative hours!!!";
            else if($hours == 0)				$paycheck="0.00 - Did you work this week???";
            else if($hours>0 && $hours<=20)		$paycheck=($rate*$hours);
			else if($hours>20 && $hours<=40)	$paycheck=(($rate*20)+($rateD*($hours-20)));
			else if($hours>40 && $hours<=72)	$paycheck=(($rate*20)+($rateD*20)+($rateT*($hours-40)));
			else if($hours>72)					$paycheck="0.00 - YOU CANNOT WORK MORE THAN 72 HOURS";
            else                				$paycheck="0.00 - Invalid Input";
            echo $paycheck;
    ?>
    
    .</p>

 </body>
</html>
