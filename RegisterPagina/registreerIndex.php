

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registreerStyle.css">
    <title>Register</title>
</head>
<div id="noreload">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</div>
<body>
    <div class="container">
        <header>
            <h1>Registreer</h1>
        </header>
        <div class="container2">
            <p id="message">
            <?php

            function message($username, $pass) {



            }

            ?>

            </p>
            <form action="#" method="post" id="manage_user">
                <fieldset>
                    <label for="Gebruikersnaam">Gebruikersnaam
                        <input type="text" name="gebruikersnaam" id="gebruikersnaam">
                    </label>
                    <label for="wachtwoord">Wachtwoord
                        <input type="password" minlength="8" name="wachtwoord" id="wachtwoord">
                    </label>
                    <label for="wwherhalen">Wachtwoord Herhalen
                        <input type="password" name="wwherhalen" id="wwherhalen">
                    </label>
                    <label for="email">Email
                        <input type="email" name="email" id="email">
                    </label>
                </fieldset>
                <button class="btn btn-success" type="submit" id="submit">Submit</button>
            </form>
        </div>
    </div>


</body>
<script src="registreerscript.js"></script>
</html>

