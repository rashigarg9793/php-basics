<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed:". $conn->connect_error);
}



$sql = "Insert into MyGuests (firstname, lastname, email)
VALUES ('Luis', 'Mark', 'Luis@example.com')";


if ($conn->query($sql) === TRUE) {
	echo "New record created uccessfully";
} else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}


$conn->close();

?>