<?php error_reporting (E_ALL ^ E_NOTICE); 
// Get the score from the form
$score = $_POST['score'];
$name=$_POST['username'];

// Insert the score into the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hangman";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO scores (name,score) VALUES ($name,$score)";

if ($conn->query($sql) === TRUE) {
  echo "Score saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Display the result on a new webpage
echo "<script>window.open('result.php?score=$score', '_blank');</script>";
?>
