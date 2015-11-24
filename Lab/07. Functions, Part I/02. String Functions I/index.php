<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $myname = "Mauricio";
    $partial = substr($myname, 0, 5);
    print $partial;
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    $uppercase = strtoupper($myname);
    print $uppercase;
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    $lowercase = strtolower($uppercase);
    print $lowercase;
    ?>
  </p>
</html>