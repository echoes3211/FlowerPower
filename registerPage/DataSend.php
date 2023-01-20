<?php







    require_once 'conn.php';




    $name = $_POST['gebruikersnaam'];
    $password = $_POST['wachtwoord'];
    $repeatpassword = $_POST['wwherhalen'];
    $email = $_POST['email'];


    if (strlen($password) != 0) {


        if (strlen($password) < 21 || strlen($password > 7)) {


            if ($password === $repeatpassword) {


            } else {
                echo "Wachtwoorden komen niet overeen";

                exit();
            }


        } else {
            echo 'Wachtwoord moet min 8 tekens en max 20';
            exit();
        }


    } else {
        echo 'Waar is je wachtwoord';

        exit();
    }



    try
    {

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $namecheck = $conn->query("SELECT name FROM klantinfo WHERE name = '$name'");
        $namecheck = $namecheck->fetch();
        $emailcheck = $conn->query("SELECT email FROM klantinfo WHERE email = '$email'");
        $emailcheck = $emailcheck->fetch();




        $ex = false;
        $a = '';
        if ($emailcheck == true && $namecheck == true) {
            $a = 'Gebruikersnaam en Email bestaan al';
            $ex = true;
        }
        elseif ($namecheck) {
            $a = 'Gebruikersnaam bestaat al';
            $ex = true;
        }
        elseif ($emailcheck) {
            $a = 'Email bestaat al';
            $ex = true;
        }

        else {
            $sql = "INSERT INTO klantinfo(name, password, email) VALUES ('$name', '$password', '$email')";
            $conn->exec($sql);
            echo 'You\'re logged in, ' . $name;
        }
        if ($ex == true) {
            echo $a;
        }


    } catch (PDOException $e) {
        echo $e->getMessage();
    }




    $conn = null;








?>