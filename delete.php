<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed:". $conn->connect_error);
}



$sql = "Delete From MyGuests Where id=14";

if ($conn->query($sql) === TRUE) {
	echo "Record deleted successfully";
} else{
	echo "Error deleting record:" . $conn->error;
}


$conn->close();

?>