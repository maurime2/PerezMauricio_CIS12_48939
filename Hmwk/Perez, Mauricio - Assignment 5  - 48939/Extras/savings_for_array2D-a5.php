<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop</title>
		<?php
            //Mauricio S. Perez
            //Date:  Sept 21st, 2015
            //Purpose:  Logical Operators
			//			- Now with Functions
        ?>
    </head>
    
    <body>
		<?php
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
			 //Fill the interest rate array
			 for($index=0,$int=$intBeg;$int<=$intEnd;$index++,$int+=$intInc){
				 $iRate[$index]=$int;
				 $savings[$index]=array();//Creates Savings as a 2-Dimensional Array for interest
			 }
			 //Fill the arrays
			 for($year=0;$year<=$nYears;$year++){
				 $years[$year]=$year;
				 for($index=0;$index<count($iRate);$index++){
				 	$savings[$index][$year]=$prin*pow((1+$iRate[$index]),$year);
				 	$savings[$index][$year]=number_format($savings[$index][$year],2,'.','');
				 }
			 }
			 //Create headings in the table
			 echo '<table width="300" border="1">';
			 echo '<tr><th>Years</th>';
			 for($index=0;$index<count($iRate);$index++){
			 	echo '<th>'.($iRate[$index]*100).'% Savings</th>';
			 }
			 echo '</tr>';
			 //Fill the table by using a for-loop row by row
			 for($year=0;$year<=$nYears;$year++){
				 echo '<tr>';
				 	echo "<td>".$years[$year]."</td>";
					for($index=0;$index<count($iRate);$index++){
						echo '<td>$'.$savings[$index][$year].'</td>';
					}
				 echo '</tr>';
			 }
        	 echo '</table>';
        ?>
    </body>
</html>