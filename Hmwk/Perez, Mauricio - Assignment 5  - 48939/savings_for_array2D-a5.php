<!doctype html>
<html>
    <head>
	
    <meta charset="utf-8">
    <title>Savings For-Loop</title>
		<?php
            //Mauricio S. Perez
            //Date:  Sept 21st, 2015
            //Purpose:  Logical Operators
			include 'functions.php';		//Includes Functions File
        ?>
    </head>
    
    <body>
		<?php
		//Test Connection to function.php
		//echo test();
		     //Declare Variables
			 $nYears=100;  //Number of years in table
			 $prin=100;   //Initial Balance in $'s
			 $intBeg=0.05;//Beginning interest rate
			 $intEnd=0.17;//Ending interest rate
			 $intInc=0.02;//Interest increment 
			 //Declare 1 Dim Parallel Arrays
			 $iRate=array();
			 $years=array();
			 $savings=array();//The Dimension for year
			 
			 //Fill the interest rate array - WITH FUNCTIONS
				 //fillIntArr($intBeg,$intEnd,$intInc,$iRate,$savings);
				 $iRate = fillIntArr($intBeg,$intEnd,$intInc);
				 //Fill Savings Index
				 $savings = TwoDArr($savings,$intEnd);
				 $years = fillYear($years,$nYears); 
				 //Fill the arrays - Year And Savings
				 $savings = fillSavings($nYears,$years,$iRate,$savings,$prin);

				 //Create headings in the table - AND CALL WITH FUNCTIONS
				 printTable($iRate,$nYears,$years,$savings);
        ?>
    </body>
</html>