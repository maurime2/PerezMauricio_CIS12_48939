<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Get Stock Quotes</title>
	<style type="text/css" title="text/css" media="all">
        .error {
                color: #F30;
        }
        .quote {
                font-weight : bold;
        }
    </style>
    <?php
        function readStockFile($fileName){
            $lines = file($fileName);
            // Loop through our array, show HTML source as HTML source; and line numbers too.
            foreach ($lines as $line_num => $line) {
                //echo "Line #<b>{$line_num}</b> :" . htmlspecialchars($line) . "<br />\n";
                $sym["$line_num"]=trim($line);
                //echo "Line #<b>{$line_num}</b> :" . $sym["$line_num"] . "<br />\n";
            }
        return $sym;
        }
    ?>

</head>

<body>
<?php # Script 9.1 - get_quote.php
set_time_limit(600);
/*	This page retrieves a stock price from Yahoo!.
 */

if (isset($_GET['symbol']) && !empty($_GET['symbol'])) { // Handle the form.
    if($_GET['symbol']=="all"){
        $symbols=readStockFile('SandP500.txt');
        echo '<table border="10" align="center">';
        $heading="<tr><th> Stock </th>
                  <th> Symbol </th>
                  <th> Day Span </th>
                  <th> 52 Week Span </th>
                  <th> Price </th>
                  <th> Daily Multi</th>
                  <th> Yearly Multi</th>
                  <th> Price  %</th>
                  <th> 50  MA %</th>
                  <th> 200 MA %</th>
              </tr>";
        echo $heading;
       //Create table data colors
            $RED='<td bgcolor="#FF0000">';
            $GREEN='<td bgcolor="#00FF00">';
            $BLUE='<td bgcolor="#0000FF">';
       //Put a new heading every 20 lines
            $cntHead=0;
        foreach ($symbols as $num => $symbol) {
            //echo "Line #<b>{$num}</b> :" . $symbol . "<br />\n";
            // Identify the URL:
            $url = sprintf('http://quote.yahoo.com/d/quotes.csv?s=%s&f=nl1ghjkm3m4', $symbol);
            // Open the "file".
            $fp = @fopen ($url, 'r') or die ('<div align="center" class="error">Cannot access Yahoo!</div></body></html>');    
            // Get the data:
            $read = fgetcsv ($fp);
            // Close the "file":
            fclose ($fp);
            //if((fmod($read[1],5.0)< 0.5 || fmod($read[1],5.0) > 4.5) && $read[1] > 2.5){
                $dspan=$read[3] - $read[2];
                $yspan=$read[5] - $read[4];
                $dvol=0.0;
                $yvol=0.0;
                $priceper=0.0;
                $dayma50=0.0;
                $dayma200=0.0;
                if($yspan>0&&$dspan>0){
                    $dvol=number_format($read[1]/$dspan,2);
                    $yvol=number_format($read[1]/$yspan,2);
                    $priceper=number_format(($read[1]-$read[4])/$yspan*100,2);
                    $dayma50=number_format(($read[6]-$read[4])/$yspan*100,2);
                    $dayma200=number_format(($read[7]-$read[4])/$yspan*100,2);
                    $tabStr="<tr><td> $read[0] </td>
                          <td> $symbol  </td>
                          <td> $dspan   </td>
                          <td> $yspan   </td>";
                    if($read[1]<75)$tabStr.=$RED;
                    else $tabStr.=$GREEN;
                         $tabStr.=" $read[1] </td>";
                    if($dvol>25)$tabStr.=$RED;
                    else $tabStr.=$GREEN;
                         $tabStr.=" $dvol </td>";
                    if($yvol>1)$tabStr.=$RED;
                    else $tabStr.=$GREEN;
                         $tabStr.=" $yvol </td>";
                    if($dayma50<$priceper)$tabStr.=$RED;
                    else $tabStr.=$GREEN;
                         $tabStr.=" $priceper </td>";
                    if($dayma200<$dayma50)$tabStr.=$RED;
                    else $tabStr.=$GREEN;
                         $tabStr.="$dayma50 </td>";
                    if($dayma200>50)$tabStr.=$RED;
                    else $tabStr.=$GREEN;
                         $tabStr.=" $dayma200</td>
                         </tr>";
                    echo $tabStr;
                    If(++$cntHead >= 23){
                        $cntHead=0;
                        echo $heading;
                    }

                }
            //}
        }
        echo "</table>";
    }else{
	// Identify the URL:
	$url = sprintf('http://quote.yahoo.com/d/quotes.csv?s=%s&f=nl1', $_GET['symbol']);

	// Open the "file".
	$fp = @fopen ($url, 'r') or die ('<div align="center" class="error">Cannot access Yahoo!</div></body></html>');
		    
	// Get the data:
	$read = fgetcsv ($fp);
		
	// Close the "file":
	fclose ($fp);
	
	// Check the results for improper symbols:
	if (strcasecmp($read[0], $_GET['symbol']) != 0) {
		// Print the results:
		echo '<div align="center">The latest value for <span class="quote">' . $read[0] . '</span> (<span class="quote">' . $_GET['symbol'] . '</span>) is $<span class="quote">' . $read[1] . '</span>.</div><br />';	
	} else {
		echo '<div align="center" class="error">Invalid symbol!</div>';
	}
    }

}

// Show the form:
?>
  <form action="get_quote.php" method="get">
     <table border="0" cellspacing="2" cellpadding="2" align="center">
	<tr align="center" valign="top">
		<td align="center" valign="top" colspan="2">Enter a NYSE stock symbol to get the latest price:</td>
	</tr>
	<tr align="center" valign="top">
		<td align="right" valign="top">Symbol:</td>
		<td align="left" valign="top"><input type="text" name="symbol" size="5" maxlength="5" /></td>
	</tr>
	<tr>
		<td align="center" valign="top" colspan="2"><input type="submit" name="submit" value="Fetch the Quote!" /></td>
	</tr>
     </table>
  </form>

</body>
</html>
