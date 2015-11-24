<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
        $array = array(5, 3, 7, 1);
        sort($array);
        print join(", ", $array);
        // prints "1, 3, 5, 7"
	?>
	</p>
	<p>
	<?php
	// Reverse sort your array and print the joined elements to the screen
        $array = array(5, 3, 7 ,1);
        rsort($array);
        print join(",", $array);
        // prints "7:5:3:1"
	?>
	</p>
</html>