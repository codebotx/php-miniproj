<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB";

$servername= $_POST["servername"]; 
$username=$_POST["username"]; 
$password=$_POST["password"]; 
$dbname=$_POST["dbname"]; 
$category=$_POST["category"]; 
$value=$_POST["cvalue"]; 
$ucategory=$_POST["ucategory"]; 
$uvalue=$_POST["ucvalue"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET $ucategory='$uvalue' WHERE $category='$value'";
$result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
?>
