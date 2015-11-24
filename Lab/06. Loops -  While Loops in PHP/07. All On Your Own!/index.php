<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
         $i = 0;
         $condition = true;
        //write your do-while loop below
        do{
        for($j=0; $j<=100; $j++){
                echo $i . ", ";
                $i++;
        }
            if($i==101){
            //echo "In if";
            $condition = false;
            }
        } while ($condition);    
    ?>
    </body>
</html>