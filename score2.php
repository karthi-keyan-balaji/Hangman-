<?php
error_reporting(E_ALL);
	ini_set('display errors','1');
	$con=new mysqli("localhost:3306","root","","hangman");
	if($con->connect_error)
	{
		die("Failed to connect".$con->connect_error);
	}
	else
	{
		$name=$_POST['name'];
		$score=$_POST['score'];
		$query="INSERT INTO scores VALUES('$name','$score')";
		if(mysqli_query($con,$query))
		{
			echo "YES";
		}
		else
		{
			echo "NO";
			
			}
	}
?>
