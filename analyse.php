<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST["id"] == "test"){
		$servername = "localhost";
		$username = "username";
		$password = "password";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
		//echo "Voici la réponse";
		return;
	}else{
		echo $_POST["id"];
	}
	echo "<--- id";
}?>