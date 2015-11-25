<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
    $a = 2;
    echo "a is: ";
    echo + $a;
    if($a==1)
    {
        $a=$a+1;
    }
    else if($a==2)
    {
    $a=$a+2;
    }
    else
    {
    $a=$a-1;
    }
    echo "\na is now: ";
    echo $a;
    ?>
    </body>
</html>