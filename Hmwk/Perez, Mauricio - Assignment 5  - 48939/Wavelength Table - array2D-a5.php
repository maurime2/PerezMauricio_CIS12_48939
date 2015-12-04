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
			$row=1;				    //Row Number
			$xp=3;				   //Exponential Value
			$total=12;			  //Total Rows
			$waveL=1*(10^($xp)); //Wavelength Start
			$rowArr=array();	   // Row Array
			$xpArr=array();		  // Exponent Array
			$typeArr=array();	 // Type of Wavelength Array
			$array2d[$total]=array();//Creates array2d as a 2-Dimensional Array for Exponent and Type
			
			//Echo Table 1: No Array
			dispTable($row,$xp,$waveL,$total);
			
			//call fill array - $rowArr, $xpArr, $typeArr
			$rowArr = fillrowArr($rowArr,$row,$xp,$xpArr,$typeArr,$total);
			$xpArr = fillxpArr($rowArr,$row,$xp,$xpArr,$typeArr,$total);
			$typeArr = filltypeArr($rowArr,$row,$xp,$xpArr,$typeArr,$total);
			
			//Echo Table 2: 1-Dim Arrays
			printTable2($rowArr,$xpArr,$typeArr,$total);
			
			//Fill 2 Dim Array
			$array2d = fillarray2d($xpArr,$typeArr,$array2d,$row,$total);
			
			//Echo 2 Dim Array Table
			dispTable3($array2d,$total,$xp);
			
        ?>
    </body>
</html>