<html>
    <p>
	<?php
	// Create an array and push 5 elements on to it, then 
    // print the number of elements in your array to the screen
        $fav_bands = array();
        array_push($fav_bands, "Maroon 5");
        array_push($fav_bands, "Bruno Mars");
        array_push($fav_bands, "Nickelback");
        array_push($fav_bands, "Katy Perry");
        array_push($fav_bands, "Macklemore");
        print count($fav_bands); // prints 5
	?>
	</p>
</html>