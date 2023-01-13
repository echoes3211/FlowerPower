
<?php









$conn = new PDO('mysql:host=localhost;dbname=flowerpower', 'root', '');
if(!$conn){
	die("Fatal Error: Connection Failed!");
}



$name = $_POST['gebruikersnaam'];



$namecheck = '';

$namecheck = $conn->query("SELECT name FROM klantinfo WHERE name = '$name'");

$namecheckk = '';

$namecheckk = $namecheck->fetch();


echo $name;

$namecheckkk = '';

if (is_array($namecheckk)) {

    foreach ($namecheckk as $namecheckkk) {


            echo $namecheckkk;


        break;
    }

} else {
        echo 'Null';
}

    $conn = null;










?>