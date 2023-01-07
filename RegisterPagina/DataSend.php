<?php





require_once 'conn.php';

$name = $_POST['gebruikersnaam'];
$password = $_POST['wachtwoord'];
$repeatpassword = $_POST['wwherhalen'];
$email = $_POST['email'];


if ($password === $repeatpassword) {}
else {
	exit();
}

try{
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO klantinfo(name, password, email) VALUES ('$name', '$password', '$email')";
	$conn->exec($sql);
}
catch(PDOException $e){
	echo $e->getMessage();
}

$conn = null;










?>