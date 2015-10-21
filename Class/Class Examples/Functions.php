<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Ways to write functions</title>
			<?php
				function save1($pv,$int,$n){
					for($year=1;$year<=$n;$year++){
						$pv*=(1+$int);
					}
					return $pv;
				}
				
				function save2($pv,$int,$n){
					return $pv*pow(1+$int,$n);
				}
				
				function save3($pv,$int,$n){
					return $pv*exp($n*log(1+$int));
				}
				function save4($pv,$int,$n){
					if($n<=0)return $pv;
					return save4($pv,$int,$n-1)*(1+$int);
				}	
				function save5($pv,$n,$int=0.06){
					for($year=1;$year<=$n;$year++){
						$pv*=(1+$int);
					}
					return $pv;
				}
				function save6($pv,$int,$n,&$fv){
					$fv=$pv*exp($n*log(1+$int));
				}
			function save7($pv,$int,$n){
				//Declare an array
				$fv=array();
				//Fill the array
				$fv[0]=$pv;
				for($year=1;$year<=$n;$year++){
					$fv[$year]=$fv[$year-1]*(1+$int);
				}
				return $fv;
			}
			function display($fv){
				echo '<table width="200" border="1">';
				echo "<tr><th>Year</th><th>Savings</th></tr>";
				for($year=0;$year<count($fv);$year++){
					echo "<tr>";
					echo "<td>".$year."</td>";
					echo "<td>".number_format($fv[$year],2)."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}

				
			?>
			</head>
			<body>
			<?php
			//Declare Variables
			$pv=100;	//Present Value $'s
			$int=0.06;	//interest rate %
			$nYears=12;	//Number of compounding Periods years

					//Use the function to calculate the value
					$fv1=save1($pv,$int,$nYears);	//Future Value Calculation
					$fv2=save2($pv,$int,$nYears);	//Future Value Calculation
					$fv3=save3($pv,$int,$nYears);	//Future Value Calculation
					$fv4=save4($pv,$int,$nYears);	//Future Value Calculation
					$fv5=save5($pv,$nYears);	//Future Value Calculation
					$fv6;	//Declare Value to be returned
					save6($pv,$int,$nYears,$fv6);//Future value calculation
					$fv7=save7($pv,$int,$nYears);	//Future Value Calculation
					
					
					//Display Results
					echo "<p>Present Value   = $".$pv."</p>";
					echo "<p>Interest Rate   = $".($int*100)."</p>";
					echo "<p>Number of Years = $".$nYears."</p>";
					echo "<p>Future Value1   = $".number_format($fv1,2)."</p>";
					echo "<p>Future Value2   = $".number_format($fv2,2)."</p>";
					echo "<p>Future Value3   = $".number_format($fv3,2)."</p>";
					echo "<p>Future Value4   = $".number_format($fv4,2)."</p>";
					echo "<p>Future Value5   = $".number_format($fv5,2)."</p>";
					echo "<p>Future Value6   = $".number_format($fv6,2)."</p>";
					display($fv7);
			?>
			</body>
</html>