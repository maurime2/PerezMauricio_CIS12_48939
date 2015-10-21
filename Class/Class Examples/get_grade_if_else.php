<html>
 <?php /*
 	RCC Class PHP
	Sept 14th, 2015
	Purpose:  If-Else Example
	   */
 ?>
 <body>
	 <?php // sets letter grade variable to NULL and sets grade variable from form data
        $let_grade = "NULL";
        $score = $_GET['score'];
     ?>
     
    <p>With a grade of <?php echo $_GET["score"];?>. Your letter grade would be 
     
	<?php // Uses the if_else construct
            
            if($score<0)        $grade="You have entered an invalid grade.";
            else if($score<60)  $grade="F";
            else if($score<70)  $grade="D";
            else if($score<80)  $grade="C";
            else if($score<90)  $grade="B";
            else if($score<=100)$grade="A";
            else                $grade="You have entered an invalid grade.";
                   
            echo $grade;
    ?>
    
    .</p>

 </body>
</html>
