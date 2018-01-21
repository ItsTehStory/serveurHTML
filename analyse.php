<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST["id"] == "test"){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "Hackaton";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// sql to create table
		$sql = "CREATE TABLE events (
		nom VARCHAR(30) PRIMARY KEY,
		typesport VARCHAR(30) NOT NULL, 	//nom, choix sport, nb personne, time and date, position (lat et lgt)
		nombrepersonne int NOT NULL,
		heure VARCHAR(30)NOT NULL,
		date VARCHAR(30)NOT NULL,
		latitude FLOAT NOT NULL,
		longitude FLOAT NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table MyGuests created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
}

		$conn->close();
		return;
	}else{
		echo $_POST["id"];
	}
	echo "<--- id";
}?>