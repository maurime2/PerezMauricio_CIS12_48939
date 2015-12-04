<?php
//Mauricio S. Perez
//December 03rd, 2015
//Functions From another function.
	function test(){				//Created to test connection to functions file
		return 'Test Works!';
	}
	
	function fillIntArr($intBeg,$intEnd,$intInc){				//Fill Interest Array
			 for($index=0,$int=$intBeg;$int<=$intEnd;$index++,$int+=$intInc){
				 $iRate[$index]=$int;		
			 }
	 
		return $iRate;
	}
	
	function TwoDArr($arr,$intEnd){
		for($i=0;$i<$intEnd; $i++){
			$arr[$i]=array();//Creates $arr as a 2-Dimensional Array for interest
		}
		return $arr;
	}

	function fillYear($year,$final){
		for($year=0;$year<=$final;$year++){
			$years[$year]=$year;
		}
		return $years;
	}
	
	function fillSavings($nYears,$years,$iRate,$savings,$prin){
			for($year=0;$year<=$nYears;$year++){
				 $years[$year]=$year;
				 for($index=0;$index<count($iRate);$index++){
				 	$savings[$index][$year]=$prin*pow((1+$iRate[$index]),$year);
				 	$savings[$index][$year]=number_format($savings[$index][$year],2,'.','');
				 }
			 }
		return $savings;
	}
	
	function printTable($iRate,$nYears,$years,$savings){
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
		
	}
	
	
	function dispArr(){				//Created to test connection to functions file
		return 'Test Works!';
	}
	
	
	
	
	
	
	
?>