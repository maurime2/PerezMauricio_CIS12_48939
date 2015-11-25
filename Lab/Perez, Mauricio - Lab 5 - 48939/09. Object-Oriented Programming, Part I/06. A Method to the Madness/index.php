<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
    <?php
        //<!-- Your code here -->
        class Person {
        public $isAlive  = true;
        public $firstname;
        public $lastname;
        public $age;
        
        public function __construct($firstname, $lastname,$age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        }
        
        public function greet(){
         return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
        }
        
        }
        
        $teacher2 = new Person("Ron","Calderon",50);
        $teacher = new Person("boring","12345",12345);
        //$teacher -> fistname = "Ron";
        //$teacher -> lastname = "Calderon";
          echo $teacher -> isAlive;
          
        $student = new Person("Mauricio","S. Perez",29);
        echo  $teacher->greet();
        echo '<br/>';
        echo  $student->greet();    
            //echo '<br/>';
           // print ($student -> firstname) . " " . ($student -> lastname).": Age" . ($student -> age);
             //echo $student -> age; 
    ?>
      </p>
    </body>
</html>