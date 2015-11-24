<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    strpos("Mauricio", "M");   // 0
        print strpos("Mauricio", "M");
//        print strpos("Mauricio", "u");   // 2
//        print strpos("Mauricio", "cio"); // 2  
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos("Mauricio","h") === false) {
     print "Sorry, no 'h' in 'Mauricio'";
    }
    //strpos("Mauricio", "zxc"); // false
    ?>
    </p>
</html>