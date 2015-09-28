<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop</title>
		<?php
            //Dr. Mark E. Lehr
            //Date:  Sept 21st, 2015
            //Purpose:  Logical Operators
        ?>
    </head>
    
    <body>
		<?php
		     //Declare Variables
			 $nYears=50;  //Number of years in table
			 $iRate=0.06; //Interest Rate
			 $prin=100;   //Initial Balance in $'s
			 //Create headings in the table
			 echo '<table width="300" border="1">';
			 echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th></tr>';
			 //Fill the table by using a for-loop row by row
			 for($year=1;$year<=$nYears;$year++){
				 $prin*=(1+$iRate);
				 $prin=((int)($prin*100))/100;//Limiting to pennies with truncation
				 echo '<tr>';
				 	echo "<td>$year</td>";
					echo '<td>$'.number_format($prin,2).'</td>';
				 echo '</tr>';
			 }
        	 echo '</table>';
        ?>
    </body>
</html>