<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "registration_form";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$name = $_POST["name"];
$uname = $_POST["uname"];
$password = $_POST["password"];
$sql = "update users set name='$name', uname='$uname', password='$password' where name='$name'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$name."-".$password;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>