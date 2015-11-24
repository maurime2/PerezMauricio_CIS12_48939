<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    print "Random is: " . rand();
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $name = "Mauricio";
    
    $val = strlen($name); // Value of 8
    $max = $val;
    $min = strlen(substr($name,0,1));
    //print "Min is: " . $min . '<br/>';
    //substr($string, 0, 5);
    
    //$partial = substr($name, 0, 5);
    //print '<br/>' . $partial;
    //print strlen($name);
    
    print "Random Character from name is: " .  $name[rand((strlen(substr($name,0,1))),strlen($name))];
    ?>
    </p>
</html>