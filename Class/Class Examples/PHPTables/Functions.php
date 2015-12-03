<?php
//Dr. Mark E. Lehr
//March 22nd, 2010
//Examples of Tables, For Loops, Functions, and Include Statments
//Pull information out of the array
function operand($strt,$endit,$contain){
	//Strip from contain the strt and end points for the
	//operand array
		$beg=$contain[$strt];
		$stp=$contain[$endit;
	//Fill the operand array with values
	//Range function performs the same task
	$op=array();
	for($i=$beg;$i<=$stp;$i++){
		$op[$i]=$i;
	}
	return $op;
}
//Calculate the savings
function savings($prin,$interest,$years){
	$tab=array();
	for($i=$interest[0];$i<sizeof($interest);$i++){
		$tab[$i]=array();
		for($j=0;$j as $key2 => $value2){
			$tab[$key1][$key2]=$prin*pow((1+$value1/100),$value2);
		}
	}
	return $tab;
}
//Display a savings table
function display_savings($op1,$op2,$tab){
	echo '<table align="center" border="1"><tr><td></td>';
	foreach($op1 as $key1 => $value1){
		echo "<th>$value1 %</th>";
	}
	echo "</tr>";
	foreach($op2 as $key2 => $value2){
		echo "<tr><th>$value2 years</th>";
		foreach($op1 as $key1 => $value1){
			echo "<td>".number_format($tab[$key1][$key2],2)."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
//Calculate the sum
function sumit($op1,$op2){
	//Fill the Array
	$tab=array();
	foreach($op1 as $key1 => $value1){
		$tab[$key1]=array();
		foreach($op2 as $key2 => $value2){
			$tab[$key1][$key2]=$value1+$value2;
		}
	}
	$tab['SumCol']=array();
	//Sum the array
	foreach($op1 as $key1 => $value1){
		foreach($op2 as $key2 => $value2){
			$tab['SumCol'][$key2]+=$tab[$key1][$key2];
			$tab[$key1]['SumRow']+=$tab[$key1][$key2];
		}
		$tab['SumCol']['SumRow']+=$tab[$key1]['SumRow'];
	}
	return $tab;
}
//Create a function to return all rows or column keys from a 2 dimensional table
//I added some keys so I want to go grap them all
function rowcolkeys($tab,$rowcol){
	$rckeys=array();
	if($rowcol==1){
		foreach($tab as $key1 => $value1){
			$rckeys[$key1]=$key1;
		}
	}else{
		foreach($tab as $key1 => $value1){
			foreach($tab[$key1] as $key2 => $value2){
				$rckeys[$key2]=$key2;
			}
			break;
		}
	}
	return $rckeys;
}
//Display a Sum table
function display_sum_table($tab){
	$rowlabel=rowcolkeys($tab,1);
	$collabel=rowcolkeys($tab,0);
	echo '<table align="center" border="1"><tr><td></td>';
	foreach($collabel as $key1 => $value1){
		echo "<th>$key1</th>";
	}
	echo "</tr>";
	foreach($rowlabel as $key1){
		echo "<tr><th>$key1</th>";
		//echo "<tr><th>".$collabel[$count++]."</th>";
		foreach($collabel as $key2){
			echo "<td>".$tab[$key1][$key2]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
//Fill a triangular table with elements
function triangle($op1,$op2){
	$tab=array();
	foreach($op1 as $key1 => $value1){
		$tab[$key1]=array();
		foreach($op2 as $key2 => $value2){
			$tab[$key1][$key2]=$value1+$value2;
		}
	}
	return $tab;
}
//Display a table
function display_triangle($op1,$op2,$tab){
	echo '<table align="center" border="1"><tr><td></td>';
	foreach($op1 as $key1 => $value1){
		echo "<th>$value1</th>";
	}
	echo "</tr>";
	foreach($op2 as $key2 => $value2){
		echo "<tr><th>$value2</th>";
		foreach($op1 as $key1 => $value1){
			echo "<td>".number_format($tab[$key1][$key2],2)."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>