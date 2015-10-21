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
            <tr>
              <?php
			      $x=true;
				  $y=true;
				  echo "<td>".($x?"T":"F")."</td>";
				  echo "<td>".($y?"T":"F")."</td>";
				  echo "<td>".(!$x?"T":"F")."</td>";
				  echo "<td>".(!$y?"T":"F")."</td>";
				  echo "<td>".($x&&$y?"T":"F")."</td>";
			  ?>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
			<?php
			      $x=true;
				  $y=false;
				  echo "<td>".($x?"T":"F")."</td>";
				  echo "<td>".($y?"T":"F")."</td>";
				  echo "<td>".(!$x?"T":"F")."</td>";
				  echo "<td>".(!$y?"T":"F")."</td>";
				  echo "<td>".($x&&$y?"T":"F")."</td>";
			  ?>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
			  <?php
			      $x=false;
				  $y=true;
				  echo "<td>".($x?"T":"F")."</td>";
				  echo "<td>".($y?"T":"F")."</td>";
				  echo "<td>".(!$x?"T":"F")."</td>";
				  echo "<td>".(!$y?"T":"F")."</td>";
				  echo "<td>".($x&&$y?"T":"F")."</td>";
			  ?>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
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
            </tr>
      	  </tbody>
    	</table>

    </body>

</html>