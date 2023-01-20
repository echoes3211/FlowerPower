<?php







    require_once 'conn.php';




    $email = $_POST['email'];
    $password = $_POST['wachtwoord'];






    if (strlen($password) != 0) {





    } else {
        echo 'Waar is je wachtwoord';

        exit();
    }



    try
    {

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $passcheck = $conn->query("SELECT password FROM klantinfo WHERE password = '$password'");
        $passcheck = $passcheck->fetch();
        $emailcheck = $conn->query("SELECT email FROM klantinfo WHERE email = '$email'");
        $emailcheck = $emailcheck->fetch();





        if ($emailcheck == true && $passcheck == true) {

            if ($emailcheck[0] == 'berdj@gmail.com' && $passcheck[0] == 'berdj123'){

                echo 'Ingelogd als admin';

            } else {
                echo 'Je bent ingelogd';
            }



        } else {
        echo 'User bestaat niet.';
        exit();
    }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }




    $conn = null;








?>