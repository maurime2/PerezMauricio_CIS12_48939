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
        
        }
        
        $teacher = new Person();
        $teacher -> fistname = "Ron";
        $teacher -> lastname = "Calderon";
        
        //$student = new Person();
        echo $teacher -> isAlive;
    ?>
      </p>
    </body>
</html>