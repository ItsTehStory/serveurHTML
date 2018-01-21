<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST["id"] == "test"){
		$servername = "localhost";
		$username = "root";
		$password = "root";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully, ";
		//echo "Voici la réponse";
		$sql = "CREATE DATABASE Hackaton";
		if ($conn->query($sql) === TRUE) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . $conn->error;
		}

		$conn->close();
		return;
	}else{
		echo $_POST["id"];
	}
	echo "<--- id";
}?>