<?php
	$con=new mysqli("localhost:3306","root","","hangman");
	error_reporting(E_ALL);
	ini_set('display errors','1');
	if($con->connect_error)
	{
		die("Failed to connect".$con->connect_error);
	}
	else
	{
  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) 
  {
	$name=$_POST['p_name'];
    $score=$_POST['score'];
	$query = "INSERT INTO players(name,score) VALUES (;
    if(mysqli_query($con, $query)) {
		header("location:score.html");
		exit;
    } else {
      echo "illa";
    }
  }
	}
?>
