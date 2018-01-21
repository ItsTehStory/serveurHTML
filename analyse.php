<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST["id"] == "test"){
		echo "Voici la réponse";
		return;
	}else{
		echo $_POST["id"];
	}
	echo "<--- id";
}?>