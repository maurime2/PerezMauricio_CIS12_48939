<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Powers of 10</title>
    </head>
    
    <body>
		<?php
			//Do-While divide by 10
			echo "<h1>Do-While divide by 10</h1>";
			$wavLen=1e3;
			do{
				echo "<p>Wave Length = ".$wavLen."</p>";
				$wavLen/=10;
			}while($wavLen>1e-12);
			//For-Loop divide by 10
			echo "<h1>For Loop divide by 10</h1>";
			for($wavLen=1e3;$wavLen>1e-12;$wavLen/=10){
				echo "<p>Wave Length = ".$wavLen."</p>";
			}
			//Power of 10
			$ten=10;
			echo "<h1>Power function of 10</h1>";
			for($p10=3;$p10>=-12;$p10--){
				$wavLen=pow($ten,$p10);
				echo "<p>Wave Length = ".$wavLen."</p>";
			}
        ?>	
    </body>
</html>