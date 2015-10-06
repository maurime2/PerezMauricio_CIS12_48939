<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop</title>
		<?php
        	/*	Mauricio S. Perez
				Date:  		Sept 21st, 2015
				Purpose:	Logical Operators
							Complete Dr. Lehr's Savings_for_array1D Table.
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
			 
			 //Declare 1 Dim Parallel Arrays
			 $years=array();
			 $years7=array();
			 $years8=array();
			 $years9=array();
			 $years10=array();
			 $savings=array();
			 $savings7=array();
			 $savings8=array();
			 $savings9=array();
			 $savings10=array();
			 
			 
			 
			 //Fill the arrays
			 for($year=0;$year<=$nYears;$year++){
				 $years[$year]=$year;
				 $savings[$year]=$prin*pow((1+$iRate),$year);
				 $savings[$year]=number_format($savings[$year],2,'.','');
				 
				 $savings7[$year]=$prin7*pow((1+$iRate7),$year);
				 $savings7[$year]=number_format($savings7[$year],2,'.','');
				 
				 $savings8[$year]=$prin8*pow((1+$iRate8),$year);
				 $savings8[$year]=number_format($savings8[$year],2,'.','');
				 
				 $savings9[$year]=$prin9*pow((1+$iRate9),$year);
				 $savings9[$year]=number_format($savings9[$year],2,'.','');
				 
				$savings10[$year]=$prin10*pow((1+$iRate10),$year);
				 $savings10[$year]=number_format($savings10[$year],2,'.','');
			 }

			 
			 //Create headings in the table
			 echo '<table width="300" border="1">';
			 echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th><th>'.($iRate7*100).'% Savings</th><th>'.($iRate8*100).'% Savings</th><th>'.($iRate9*100).'% Savings</th><th>'.($iRate10*100).'% Savings</th></tr>';
			 //Fill the table by using a for-loop row by row
			 for($year=0;$year<=$nYears;$year++){
				 echo '<tr>';
				 	echo "<td>".$years[$year]."</td>";
					echo '<td>$'.$savings[$year].'</td>';
					echo '<td>$'.$savings7[$year].'</td>';
					echo '<td>$'.$savings8[$year].'</td>';
					echo '<td>$'.$savings9[$year].'</td>';
					echo '<td>$'.$savings10[$year].'</td>';
				 echo '</tr>';
			 }
        	 echo '</table>';
        ?>
    </body>
</html>