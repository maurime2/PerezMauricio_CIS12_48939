<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
    <?php
        //<!-- Your code here -->
        class Dog {
            //Public Properties
            public $numLegs = 4;
            public $name ;
            
            // Assigning the values
            public function __construct($name) {
              $this->name = $name;
            }//End Constructor
                
            //Methods
            public function bark(){
                return "Woof!"; 
            }//End function bark()
            
            public function greet(){
                return "Hello, my name is " . $this->name . "." . $this->bark();
            }//End function greet()
            
        }//End Class Dog  
            //Creating Instances
            $dog1 = new Dog("Barker");
            $dog2 = new Dog("Amigo");
            
            //Calling Class
            echo $dog1->bark();
            echo "<br/>";
            echo $dog2->greet();
    ?>
      </p>
    </body>
</html>