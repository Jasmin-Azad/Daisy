<?php


$student_name = $_POST['student_name'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl02');

$query = "SELECT courses.title 
			from courses
			INNER JOIN student_courses
			ON student_courses.course_id = courses.course_id
			INNER JOIN students 
			ON student_courses.student_id = students.student_id 
			where students.name = '$student_name'  
			";			
	 
$result = mysql_query($query);

echo '<select name="course_title" multiple>';
	while ($row = mysql_fetch_assoc($result)) 
	{
	    echo "<option value='" . $row['title'] ."'>" . $row['title'] ."</option>";
	}
echo '</select>';

?>
