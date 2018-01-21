<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST["id"] == "test"){
		echo "Voici la réponse";
		return;
	}
	echo "Ceci n'est pas ce que je veux voir";
}?>