<html>
  <head>
    <title>Modifying Elements</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        
        //echo $languages[1];
        // Write the code to modify
        // the $languages array!
        $languages[1] = "C++";
        echo $languages[1];
      ?>
    </p>
  </body>
</html>