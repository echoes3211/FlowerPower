<?php

$conn = new PDO('mysql:host=localhost;dbname=flowerpower', 'root', '');
if(!$conn){
	die("Fatal Error: Connection Failed!");
}
?>