<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
	//Add while loop below
    $loopCond = true;
	while ($loopCond == true){
		//Echo your message that the loop is running below
		echo "<p>The loop is running.</p>";
		
		
		$loopCond = false;
	}
	echo "<p>And now it's done.</p>";
    ?>
    </body>
</html>