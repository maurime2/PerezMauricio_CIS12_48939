<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop Correction 2</title>
		<?php
        	/*	Mauricio S. Perez
				Date:  		Sept 21st, 2015
				Purpose:	Logical Operators
							Complete Dr. Lehr's Savings For-Loop Correction V.2 Table.
							Add 7%,8%,9%,and 10% columns.
			*/
        ?>
    </head>
    
    <body>
		<?php
		     //Declare Variables
			 $initial=100; //Initial Value
			 $nYears=50;  //Number of years in table
			 $iRate=0.06; 		//Interest Rate  6%
			 $iRate7=0.07; 	   //Interest Rate  7%
			 $iRate8=0.08; 	  //Interest Rate  8%
			 $iRate9=0.09; 	 //Interest Rate  9%
			 $iRate10=0.10; //Interest Rate 10%
			 $prin=$initial;   		//Initial Balance in $'s
			 $prin7=$initial;      //Initial Balance in $'s
			 $prin8=$initial;  	  //Initial Balance in $'s
			 $prin9=$initial;    //Initial Balance in $'s
			 $prin10=$initial;  //Initial Balance in $'s
			 
			 //Create headings in the table
			 echo '<table width="300" border="1">';
			 
			 //Add 7%,8%,9%,and 10% columns
			 echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th><th>'.($iRate7*100).'% Savings</th><th>'.($iRate8*100).'% Savings</th><th>'.($iRate9*100).'% Savings</th><th>'.($iRate10*100).'% Savings</th></tr>';
			 
			 //Fill the table by using a for-loop row by row
			 for($year=1;$year<=$nYears;$year++){
				 $prin*=(1+$iRate);
				 $prin=number_format($prin,2,'.','');//Limiting to pennies with truncation
				 
				 //Calculate new column interest rate for 7%,8%,9%,and 10% columns
				 $prin7*=(1+$iRate7);
				 $prin7=number_format($prin7,2,'.','');//Limiting to pennies with truncation
				 $prin8*=(1+$iRate8);
				 $prin8=number_format($prin8,2,'.','');//Limiting to pennies with truncation
				 $prin9*=(1+$iRate9);
				 $prin9=number_format($prin9,2,'.','');//Limiting to pennies with truncation
				 $prin10*=(1+$iRate10);
				 $prin10=number_format($prin10,2,'.','');//Limiting to pennies with truncation
				 
				 echo '<tr>';
				 	echo "<td>$year</td>";			//Print Year Number
					echo '<td>$'.$prin.'</td>';		//Print 6% interest rate of year
					
					//Echo Print 7%,8%,9%,and 10% columns
					echo '<td>$'.$prin7.'</td>';	   //Print 7% interest rate of year
					echo '<td>$'.$prin8.'</td>';	  //Print 8% interest rate of year
					echo '<td>$'.$prin9.'</td>';	 //Print 9% interest rate of year
					echo '<td>$'.$prin10.'</td>';	//Print 10% interest rate of year
				
				//Close ROW	
				 echo '</tr>';
			 }//END FOR LOOP
			 
			 //CLOSE TABLE
        	 echo '</table>';
        ?>
    </body>
</html>