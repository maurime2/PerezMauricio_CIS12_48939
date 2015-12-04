<?php
//Mauricio S. Perez
//December 03rd, 2015
//Functions From another function.
	function test(){				//Created to test connection to functions file
		return 'Test Works!';
	}
	
	//Functions for Savings File
		//Fill Array: Interest
		function fillIntArr($intBeg,$intEnd,$intInc){	//Fill Interest Array
				 for($index=0,$int=$intBeg;$int<=$intEnd;$index++,$int+=$intInc){
					 $iRate[$index]=$int;		
				 }
		 
			return $iRate;
		}
		
		//Fill Array: Interest
		function TwoDArr($arr,$intEnd){
			for($i=0;$i<$intEnd; $i++){
				$arr[$i]=array();//Creates $arr as a 2-Dimensional Array for interest
			}
			return $arr;
		}

		//Fill Array: Year
		function fillYear($year,$final){
			for($year=0;$year<=$final;$year++){
				$years[$year]=$year;
			}
			return $years;
		}
		
		//Fill Array: Savings
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
		
		//Display Table
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
	
	//Wavelength Functions
		//Wavelength Function: Display - Wavelength Table-a5.php
		function dispTable($row,$xp,$waveL,$total){
				
				//Create headings in the table
			echo '<table width="200" border="1">';
			 
			//CREATE TOP ROW: "ROW"	"WAVELENGTH"	"BAND"
			echo '<tr><th>Row</th> <th>Wavelength</th> <th>Band</th> </tr>';

			//Print Rows
			do{
				echo '<tr>';						  //START OF ROW
					echo "<td>$row</td>";			 //Prints ROW Column Value
						echo "<td>10^$xp</td>";		//Prints WAVELENGTH Column Value
							
							//Last Column
							echo '<td>';
								//Use Dummy Variable to Print Column
								$type=(($xp>=1)?"Radio":
										(($xp==0)?"Radio/Microwave":
										((($xp<=-1)&&($xp>=-3))?"Microwave":
										(($xp==-4)?"Microwave/InfraRed":
										(($xp==-5)?"InfraRed":
										(($xp==-6)?"Visiable":
										(($xp==-7)?"Visiable/Ultraviolet":
										(($xp==-8)?"Ultraviolet":
										(($xp==-9)?"Ultraviolet/X-Ray":
										(($xp==-10)?"X-Ray":
										(($xp==-11)?"X-Ray/GamaRay":
										(($xp<=-12)?"GamaRay":
										"Unknown."))))))))))));
								echo $type;	
							echo '</td>';	//END OF LAST COLUMN
				echo '</tr>';			   //END OF ROW
				$xp--;					  //Decrement Wavelength
			}while(++$row<=$total);      //Points to next row until total reached
			echo '</table>';			//END OF TABLE
			}
	
		//Wavelength Function: Fill $rowArr- Wavelength Table-array1D-a5.php
		function fillrowArr($rowArr,$row,$xp,$xpArr,$typeArr,$total){
			//Fill Arrays - Print Rows on Table 1
			do{
			$rowArr[$row]=$row;					//Array saves row
			$xpArr[$row]=$xp;			 	   //Array saves Exmonent
						//Use Dummy Variable to Print Column
						$type=(($xp>=1)?"Radio":
								(($xp==0)?"Radio/Microwave":
								((($xp<=-1)&&($xp>=-3))?"Microwave":
								(($xp==-4)?"Microwave/InfraRed":
								(($xp==-5)?"InfraRed":
								(($xp==-6)?"Visiable":
								(($xp==-7)?"Visiable/Ultraviolet":
								(($xp==-8)?"Ultraviolet":
								(($xp==-9)?"Ultraviolet/X-Ray":
								(($xp==-10)?"X-Ray":
								(($xp==-11)?"X-Ray/GamaRay":
								(($xp<=-12)?"GamaRay":
								"Unknown."))))))))))));
						//Save Type in array and echo.
						$typeArr[$row]=$type;			//Array saves Type
				$xp--;					  //Decrement Wavelength
			}while(++$row<=$total);      //Points to next row until total reached
			return $rowArr;	
		}
	
		//Wavelength Function: Fill $xpArr - Wavelength Table-array1D-a5.php
		function fillxpArr($rowArr,$row,$xp,$xpArr,$typeArr,$total){
			//Fill Arrays - Print Rows on Table 1
			do{
			$rowArr[$row]=$row;					//Array saves row
			$xpArr[$row]=$xp;			 	   //Array saves Exmonent
						//Use Dummy Variable to Print Column
						$type=(($xp>=1)?"Radio":
								(($xp==0)?"Radio/Microwave":
								((($xp<=-1)&&($xp>=-3))?"Microwave":
								(($xp==-4)?"Microwave/InfraRed":
								(($xp==-5)?"InfraRed":
								(($xp==-6)?"Visiable":
								(($xp==-7)?"Visiable/Ultraviolet":
								(($xp==-8)?"Ultraviolet":
								(($xp==-9)?"Ultraviolet/X-Ray":
								(($xp==-10)?"X-Ray":
								(($xp==-11)?"X-Ray/GamaRay":
								(($xp<=-12)?"GamaRay":
								"Unknown."))))))))))));
						//Save Type in array and echo.
						$typeArr[$row]=$type;			//Array saves Type
				$xp--;					  //Decrement Wavelength
			}while(++$row<=$total);      //Points to next row until total reached
			return $xpArr;	
		}

			//Wavelength Function: Fill - Wavelength Table-array1D-a5.php
		function filltypeArr($rowArr,$row,$xp,$xpArr,$typeArr,$total){
			//Fill Arrays - Print Rows on Table 1
			do{
			$rowArr[$row]=$row;					//Array saves row
			$xpArr[$row]=$xp;			 	   //Array saves Exmonent
						//Use Dummy Variable to Print Column
						$type=(($xp>=1)?"Radio":
								(($xp==0)?"Radio/Microwave":
								((($xp<=-1)&&($xp>=-3))?"Microwave":
								(($xp==-4)?"Microwave/InfraRed":
								(($xp==-5)?"InfraRed":
								(($xp==-6)?"Visiable":
								(($xp==-7)?"Visiable/Ultraviolet":
								(($xp==-8)?"Ultraviolet":
								(($xp==-9)?"Ultraviolet/X-Ray":
								(($xp==-10)?"X-Ray":
								(($xp==-11)?"X-Ray/GamaRay":
								(($xp<=-12)?"GamaRay":
								"Unknown."))))))))))));
						//Save Type in array and echo.
						$typeArr[$row]=$type;			//Array saves Type
				$xp--;					  //Decrement Wavelength
			}while(++$row<=$total);      //Points to next row until total reached
			return $typeArr;	
		}
		
	//Print Table
		function printTable2($rowArr,$xpArr,$typeArr,$total){
			
			//PRINT Arrays Into Table 2
			//Echo Table 2
			echo '<tr><th>Table 2: 1D Array Table</th> </tr>';
			echo '<table width="200" border="1">';
			//CREATE TOP ROW: 	"ROW"		"WAVELENGTH"		"BAND"
			echo '<tr><th>Row</th> <th>Wavelength</th> <th>Band</th> </tr>';
			$row=1;
			do{
				echo '<tr>';
				echo '<td>'.$rowArr[$row].'</td>';		  // Prints Row Array
				echo "<td>10^$xpArr[$row]</td>";		 // Prints Exponent Array
				echo '<td>'.$typeArr[$row].'</td>';		// Prints Type of Wavelength
				echo '</tr>';
			}while(++$row<=$total);
			echo '</table>';						//END OF TABLE 2
			
			
		}
		
?>