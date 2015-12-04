<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Electromagnetic Spectrum Band: 2D Arrays</title
		<?php
		/*	Mauricio S. Perez
			Date:  		October 4th, 2015
			Purpose:	Wavelength Table
						Output the electromagnetic spectrum band from 
						10^3 to 10^-12 in 10^-1 increments.
						
							- Column 1 -> row number 1,2,3,4,5,6....to 16
							- Column 2 -> wavelength from 10^3 to 10^-12
							- Column 3 -> Band from radio to gamma
							
						In 3 separate pages:
							- 1) no arrays (calculation and display has to be done simultaneously)
							- 2) 1 - Dimension arrays (logic calculation then display)
							- 3) 2 - Dimensional table (logic calculation then display) 
									 for those that already know how to program
		*/
				include 'functions.php';		//Includes Functions File
        ?>
    </head>
    
    <body>
		<?php
		    //Declare Variables
			$row=1;				  //Row Number
			$xp=3;				 //Exponential Value
			$total=12;			//Total Rows
			$rowArr=array();	   // Row Array
			$xpArr=array();		  // Exponent Array
			$typeArr=array();	 // Type of Wavelength Array
			$array2d[$total]=array();//Creates array2d as a 2-Dimensional Array for Exponent and Type
			
			//Echo Table 1
			echo '<tr><th>Table 1: No Array</th> </tr>';
			//Create headings in the table
			echo '<table width="200" border="1">';
			 
			//CREATE TOP ROW: "ROW"	"WAVELENGTH"	"BAND"
			echo '<tr><th>Row</th> <th>Wavelength</th> <th>Band</th> </tr>';

			//Fill Arrays - Print Rows on Table 1
			do{
				echo '<tr>';						  	//START OF ROW
					$rowArr[$row]=$row;				   		//Array saves row
					echo "<td>$rowArr[$row]</td>";		   //Prints ROW Column Value
						$xpArr[$row]=$xp;			 	  //Array saves Exmonent
						echo "<td>10^$xpArr[$row]</td>"; //Prints WAVELENGTH Column Value
							
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
								//Save Type in array and echo.
								$typeArr[$row]=$type;			//Array saves Type
								echo $typeArr[$row];
							echo '</td>';	//END OF LAST COLUMN
				echo '</tr>';			   //END OF ROW
				$xp--;					  //Decrement Wavelength
			}while(++$row<=$total);      //Points to next row until total reached
			echo '</table>';			// End Table 1
			
			
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
        ?>
    </body>
</html>