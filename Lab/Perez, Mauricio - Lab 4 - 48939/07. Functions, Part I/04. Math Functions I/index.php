<html>
    <p>
    <?php
    // Try rounding a floating point number to an integer
    // and print it to the screen
    $number = 7.2659;
    $round = round($number);
    print $round;  // prints 3
    ?>
    </p>
    <p>
    <?php
    // Try rounding a floating point number to 3 decimal places
    // and print it to the screen
    $round_pi = round(M_PI, 3);
    print $round_pi; // prints 3.1416
    ?>
    </p>
</html>