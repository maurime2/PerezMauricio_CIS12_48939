<html>
 <?php /*
 	RCC Class PHP
	Sept 14th, 2015
	Purpose:  Ternary Operator Example
	   */
 ?>
 <body>
	 <?php // sets letter grade variable to NULL and sets grade variable from form data
        $let_grade = "NULL";
        $score = $_GET['score'];
     ?>
     
    <p>With a grade of <?php echo $_GET["score"];?>. Your letter grade would be 
     
	<?php // Uses independent if statements, implies the test needs to be 2 sided
            if($score<0)                   $grade="You have entered an invalid grade.";
			if($score>=0  && $score<60)    $grade="F";
			if($score>=60 && $score<70)    $grade="D";
			if($score>=70 && $score<80)    $grade="C";
			if($score>=80 && $score<90)    $grade="B";
			if($score>=90 && $score<=100)  $grade="A";
			if($score>100)                 $grade="You have entered an invalid grade.";
                   
            echo $grade;
    ?>
    
    .</p>

 </body>
</html>
