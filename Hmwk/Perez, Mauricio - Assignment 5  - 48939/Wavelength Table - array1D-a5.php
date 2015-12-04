<!doctype html>

    <head>
    <meta charset="utf-8">
    <title>Electromagnetic Spectrum Band: 1D Arrays</title
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
			$waveLArr=array();	 // Wavelength Array
			$typeArr=array();	// Type of Wavelength Array
			
			//Echo Table 1: No Array
			dispTable($row,$xp,$waveL,$total);
			
			//call fill arrays - $rowArr
			$rowArr=fillrowArr($rowArr,$row,3,$xpArr,$typeArr,12);
			$xpArr = fillxpArr($rowArr,$row,3,$xpArr,$typeArr,12);
			$typeArr = filltypeArr($rowArr,$row,3,$xpArr,$typeArr,12);
			
			//Echo Table 2: 1-Dim Arrays
			printTable2($rowArr,$xpArr,$typeArr,$total);
			
        ?>
    </body>
</html>