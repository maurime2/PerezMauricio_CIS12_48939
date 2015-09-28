<html>
 <?php /*
 	Mauricio S. Perez
	Sept 15th, 2015
	Purpose:  Ternary Operator Example
	   */
 ?>
	 <body>
		 <?php 						// sets letter grade variable to NULL and sets grade variable from form data
			$let_grade = "NULL";
			$score = $_GET['score'];
		 ?>
		 
		<!-- // Prompt user with letter grade
		-->
		<p>With a grade of <?php echo $_GET["score"];?>. Your letter grade would be 
		 
				<?php // Uses the ternary operator
						
						$grade=(($score<0)?"You have entered an invalid grade.":
							   (($score<60)?"F":
							   (($score<70)?"D":
							   (($score<80)?"C":
							   (($score<90)?"B":
							   (($score<=100)?"A":
							   "You have entered an invalid grade."))))));
							   
						echo $grade;
				?>    

				.</p>

	 </body>
</html>
