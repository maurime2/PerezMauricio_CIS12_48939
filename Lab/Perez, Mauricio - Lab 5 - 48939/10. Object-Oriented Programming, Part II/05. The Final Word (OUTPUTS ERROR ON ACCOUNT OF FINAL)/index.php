<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
        final public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        class Bicycle extends Vehicle{
            
            //Method
          public function honk(){
                return "Beep beep!";
            }
        }
        
        //Instance
        $bicycle = new Bicycle();
        echo $bicycle->honk();
        
      ?>
    </p>
  </body>
</html>