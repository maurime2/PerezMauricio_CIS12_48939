<html>
 <?php /*
 	Mauricio S. Perez
	Sept 15th, 2015
	Purpose: Paycheck with Ternary Operator Construct.
	   */
 ?>
 <body>
	 <?php // sets paycheck variable to NULL and sets hour variable from form data
        $paycheck = "NULL";
        $hours = $_GET['hours'];
		$rate = (float)$_GET['rate'];
		$rateD = (float)($rate*2);
		$rateT = (float)($rate*3);
     ?>
    <!--
	//Prompt hours worked with total	
    -->
	<p>With <?php echo $_GET["hours"];?> hours worked, your paycheck this week is: $

	<!--
	//Ternary Statement in PHP: Will result in total paycheck amount
	-->
	<?php // Uses the ternary operator to calculate paycheck
            $paycheck=(($hours<0)?"0.00 - You cannot work Negative Hours.":
                   (($hours==0)?"0.00 - Did you work this week???":
                   (($hours<=20)?($rate*$hours):
                   (($hours<=40)?(($rate*20)+(($rateD*($hours-20)))):
                   (($hours<=72)?(($rate*20)+($rateD*20)+((($rateT*($hours-40))))):
                   (($hours>72)?"0.00 - You cannot work more than 72 hours a week!!!":
                   "0.00 - You have entered an invalid hours worked."))))));
            echo $paycheck;
    ?>
    .</p>
 </body>
</html>
