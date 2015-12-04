<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Electromagnetic Spectrum Band: No Arrays </title
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
			$row=1;				   //Row Number
			$xp=3;				  //Exponential Value
			$waveL=1*(10^($xp)); //Wavelength Start
			$total=12;			//Total Rows

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
        ?>
    </body>
</html>