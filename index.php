<!DOCTYPE html>
<html>
<title>Maxime est vrm cho</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
static $max = "Max est vrm cho";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = test_input($_POST["fname"]);
  $lastName = test_input($_POST["lname"]);
  $max = "maxime à changé";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<body>
<p><?php echo $max;?></p
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
