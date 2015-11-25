<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
       $i = 0;
    
    switch ($i):
        case 0:
            echo '$i is 0.';
            break;
        case 1:
            echo '$i is 1';
            break;
        case 2:
            echo '$i is 2';
            break;
        case 3:
            echo '$i is 3';
            break;
        default:
            echo "I don't know how much \$i is.";
    endswitch;
    ?>
	</body>
</html>