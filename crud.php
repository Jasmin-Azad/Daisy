<?php include("config.php"); ?>
<?php


$student_name = $_POST['student_name'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl02');

mysql_query("INSERT into students (name) values ('$student_name')");

//echo "Data has sucessfully inserted.<br />";


?>


