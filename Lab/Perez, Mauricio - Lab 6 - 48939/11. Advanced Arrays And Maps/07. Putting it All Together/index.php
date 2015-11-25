<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
<?php
    // On the line below, create your own associative array:
    $tech = array('laptop', 'phone', 'tv');
    $myArray = array('laptop', 'phone', 'tv');
    $feat = array('64 Gigs' => 'with',
               'Data Plan' => 'without',
               'Backup Battery' => 'with');

    // On the line below, output one of the values to the page:
    $length = count($myArray);
    for ($i = 0; $i < $length; $i++) {
        echo $myArray[$i] . '<br />';
    }
      $i--;
        echo '<br /><br />I want my '. $myArray[$i] .' with:<br />'; 
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
        foreach ($feat as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br /><br />';
     
     
?>
    </p>
  </body>
</html>