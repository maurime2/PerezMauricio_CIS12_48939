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
			 //Declare 1 Dim Parallel Arrays
			 $years=array();
			 $savings=array();
			 //Fill the arrays
			 for($year=0;$year<=$nYears;$year++){
				 $years[$year]=$year;
				 $savings[$year]=$prin*pow((1+$iRate),$year);
				 $savings[$year]=number_format($savings[$year],2,'.','');
			 }
			 //Create headings in the table
			 echo '<table width="300" border="1">';
			 echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th></tr>';
			 //Fill the table by using a for-loop row by row
			 for($year=0;$year<=$nYears;$year++){
				 echo '<tr>';
				 	echo "<td>".$years[$year]."</td>";
					echo '<td>$'.$savings[$year].'</td>';
				 echo '</tr>';
			 }
        	 echo '</table>';
        ?>
    </body>
</html>