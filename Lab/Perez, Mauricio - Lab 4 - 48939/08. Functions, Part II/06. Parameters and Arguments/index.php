<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function greetings($name)
        {
        echo "Greetings, " . $name . "!";
        }
        $name = "Mauricio S. Perez";
        
        greetings($name);
        ?>
      </p>
    </body>
</html>