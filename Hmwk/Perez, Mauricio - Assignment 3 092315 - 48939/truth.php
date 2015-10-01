<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Truth Table</title>
		<?php
        	//Dr. Mark E. Lehr
        	//Date:  Sept 21st, 2015
        	//Purpose:  Logical Operators
        ?>
    </head>
    
    <body>
        <table width="700" border="1">
      	   <tbody>
			<!-- ROW OF COLUMN TYPES: 13 TOTAL -->
		   <tr>
              <td>X</td>
              <td>Y</td>
              <td>!X</td>
              <td>!Y</td>
              <td>X&&Y</td>
              <td>X||Y</td>
              <td>X^Y</td>
              <td>X^Y^Y</td>
              <td>X^Y^X</td>
              <td>!(X&&Y)</td>
              <td>!X||!Y</td>
              <td>!(X||Y)</td>
              <td>!X&&!Y</td>
            </tr>
            
			<!--ROW 1: TRUE TRUE -->
			<tr>
              <?php
			    $x=true;
				$y=true;
				echo "<td>".($x?"T":"F")."</td>";
				echo "<td>".($y?"T":"F")."</td>";
				echo "<td>".(!$x?"T":"F")."</td>";
				echo "<td>".(!$y?"T":"F")."</td>";
				echo "<td>".($x&&$y?"T":"F")."</td>";
				
				//Missing Part of the Table
  				echo "<td>".($x||$y?"T":"F")."</td>";
				echo "<td>".($x^$y?"T":"F")."</td>";
  				echo "<td>".($x^$y^$y?"T":"F")."</td>";
   				echo "<td>".($x^$y^$x?"T":"F")."</td>";
				echo "<td>".(!($x&&$y)?"T":"F")."</td>";
				echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";
				echo "<td>".(!($x||$y)?"T":"F")."</td>";
				echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";
			  ?>
            </tr>
			
			<!--ROW 2: TRUE FALSE -->
            <tr>
			<?php
			      $x=true;
				  $y=false;
				  echo "<td>".($x?"T":"F")."</td>";			//x
				  echo "<td>".($y?"T":"F")."</td>";			//y
				  echo "<td>".(!$x?"T":"F")."</td>";		//NOT x
				  echo "<td>".(!$y?"T":"F")."</td>";		//NOT y
				  echo "<td>".($x&&$y?"T":"F")."</td>";		//x AND y
				  
				//Missing Part of the Table
  				echo "<td>".($x||$y?"T":"F")."</td>";		//x OR Y
				echo "<td>".($x^$y?"T":"F")."</td>";		//x Exclusive OR y
  				echo "<td>".($x^$y^$y?"T":"F")."</td>";		//x Exclusive OR y Exclusive OR y
   				echo "<td>".($x^$y^$x?"T":"F")."</td>";		//x Exclusive OR y Exclusive OR x
				echo "<td>".(!($x&&$y)?"T":"F")."</td>";	//NOT (x AND y)
				echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";	//NOT x) OR (NOT y)
				echo "<td>".(!($x||$y)?"T":"F")."</td>";	//NOT(x OR y)
				echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";	//(NOT x) AND (NOT Y)
			  ?>
			  
			  <!-- Redacted
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
			  -->
            </tr>
			
			<!--ROW 3: FALSE TRUE-->
            <tr>
			  <?php
			      $x=false;
				  $y=true;
				  echo "<td>".($x?"T":"F")."</td>";			//x
				  echo "<td>".($y?"T":"F")."</td>";			//y
				  echo "<td>".(!$x?"T":"F")."</td>";		//NOT x
				  echo "<td>".(!$y?"T":"F")."</td>";		//NOT y
				  echo "<td>".($x&&$y?"T":"F")."</td>";		//x AND y
				  
				//Missing Part of the Table
  				echo "<td>".($x||$y?"T":"F")."</td>";		//x OR Y
				echo "<td>".($x^$y?"T":"F")."</td>";		//x Exclusive OR y
  				echo "<td>".($x^$y^$y?"T":"F")."</td>";		//x Exclusive OR y Exclusive OR y
   				echo "<td>".($x^$y^$x?"T":"F")."</td>";		//x Exclusive OR y Exclusive OR x
				echo "<td>".(!($x&&$y)?"T":"F")."</td>";	//NOT (x AND y)
				echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";	//NOT x) OR (NOT y)
				echo "<td>".(!($x||$y)?"T":"F")."</td>";	//NOT(x OR y)
				echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";	//(NOT x) AND (NOT Y)
			  ?>
			  
			  <!-- REDACTED
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
			  -->
            </tr>
			
			<!--ROW 4: FALSE FALSE -->
            <tr>
			
			<!--Missing Part of the Table-->
			<?php
			    $x=false;
				$y=false;
				echo "<td>".($x?"T":"F")."</td>";			//x
				echo "<td>".($y?"T":"F")."</td>";			//y
				echo "<td>".(!$x?"T":"F")."</td>";			//NOT x
				echo "<td>".(!$y?"T":"F")."</td>";			//NOT y
				echo "<td>".($x&&$y?"T":"F")."</td>";		//x AND y
  				echo "<td>".($x||$y?"T":"F")."</td>";		//x OR Y
				echo "<td>".($x^$y?"T":"F")."</td>";		//x Exclusive OR y
  				echo "<td>".($x^$y^$y?"T":"F")."</td>";		//x Exclusive OR y Exclusive OR y
   				echo "<td>".($x^$y^$x?"T":"F")."</td>";		//x Exclusive OR y Exclusive OR x
				echo "<td>".(!($x&&$y)?"T":"F")."</td>";	//NOT (x AND y)
				echo "<td>".((!$x)||(!$y)?"T":"F")."</td>";	//NOT x) OR (NOT y)
				echo "<td>".(!($x||$y)?"T":"F")."</td>";	//NOT(x OR y)
				echo "<td>".((!$x)&&(!$y)?"T":"F")."</td>";	//(NOT x) AND (NOT Y)
			  ?>
			  
			  <!-- Redacted
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
			  -->
            </tr>
      	  </tbody>
    	</table>

    </body>

</html>