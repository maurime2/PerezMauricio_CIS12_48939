<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings While-Loop</title>
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
			 echo '<table width="200" border="1">';
			 echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th></tr>';
			 //Fill the table by using a while-loop row by row
			 $year=0;
			 while(++$year<=$nYears){
				 $prin*=(1+$iRate);
				 echo '<tr>';
				 	echo "<td>$year</td>";
					echo '<td>$'.number_format($prin,2).'</td>';
				 echo '</tr>';
			 }
        	 echo '</table>';
        ?>
    </body>
</html>