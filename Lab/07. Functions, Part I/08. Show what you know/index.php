<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
        $array = array();
        array_push($array,"Mauri");
        array_push($array, "Kathy");
        array_push($array, "Jessi");
        array_push($array, "Lucy");
    	// Sort the list
        sort($array);
        print join(", ", $array);
        // prints in order
	// Randomly select a winner!
        $winner = rand (0,count($array));
	// Print the winner's name in ALL CAPS
	print '<br/>';
	print (strtoupper($array[$winner]));
	print " winns!";
	?>
	</p>
</html>