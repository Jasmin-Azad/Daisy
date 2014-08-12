<?php include("config.php"); ?>
<?php


$course_title = $_POST['course_title'];

mysql_connect('localhost','root','');

mysql_select_db('ftfl02');

mysql_query("INSERT into courses (title) values ('$course_title')");

//echo "Data has sucessfully inserted.<br />";


?>
