<?php
$servername= $_POST["servername"]; 
$username=$_POST["username"]; 
$password=$_POST["password"]; 
$dbname=$_POST["dbname"];
$firstname=$_POST["firstname"]; 
$lastname=$_POST["lastname"]; 
$email=$_POST["email"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname','$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>