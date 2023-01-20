<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>FlowerPower</title>
    <script defer src="loginScript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<body>
    <nav>
        <header id="header">
        <div class="header-banner"></div>
        <nav class="header-nav"></nav>
        <div class="usps-bar">
            <div class="container">
                <ul>
                    <li>
                        <a href="#homepage">
                            <i class="vink">&#x221A</i>
                            "Bloemen voor 13:00 besteld, vandaag bezorgd*"
                        </a>
                    </li>
                    <li>
                        <a href="#homepage">
                            <i class="vink">&#x221A</i>
                            "Gratis levering*"
                        </a>
                    </li>
                    <li>
                        <a href="#homepage">
                            <i class="klok">&#128337;</i>
                            "1d 2h 4min Black friday deals*"
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="container-logobar">
        <div class="row2">

        <div class="menu">
                <ul>
                    <li>
                        <a href="#homepage">
                            <i class="textmenu">Home</i>

                        </a>
                    </li>
                    <li>
                        <a href="#homepage">
                            <i class="textmenu">Bestellingen</i>

                        </a>
                    </li>
                    <li>
                        <a href="#homepage">
                            <i class="textmenu">Contact</i>

                        </a>
                    </li>


                    <li>
                        <a href="#homepage">
                            <i class="fa-solid fa-cart-shopping" style="font-size: xx-large; color: rgb(255, 255, 255);"></i>

                        </a>
                    </li>

                    <li>
                        <a href="#homepage">
                            <i class="fa-solid fa-user" style="font-size: xx-large; color: rgb(255, 255, 255);">
                            <p style="font-size: small;">INLOGGEN</p>
                            </i>

                        </a>
                    </li>

                </ul>
        </div>

        <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <ul>
        <div class="logo-icon">
            <ul>
                <li>
                    <a href="#homepage">
                        <img src="fp.png" alt="" height="50">
                    </a>
                </li>

        </div>
    </ul>

</div>

    </nav>

        <nav class="mobile-nav">
            <a href="#">Home</a>
            <a href="#">Bestellingen</a>
            <a href="#">Contacten</a>
            <a href="#">Inloggen</a>

            <a href="#homepage">
                <i class="vink">&#x221A</i>
                "Bloemen voor 13:00 besteld, vandaag bezorgd*"
            </a>
            <a href="#homepage">
                <i class="vink">&#x221A</i>
                "Gratis levering*"
            </a>
            <a href="#homepage">
                <i class="klok">&#128337;</i>
                "1d 2h 4min Black friday deals*"
            </a>

        </nav>

        <script src="homepage.js"></script>
        </div>
                <ul>
                    <div class="logo-icon">
                        <ul>
                            <li>
                                <a href="#homepage">
                                    <img src="fp.png" alt="" height="50">
                                </a>
                            </li>

                    </div>
                </ul>

        </div>

    </header>

<!-- hero start -->

<div class="containerflexbox">
<div class="containerr">

        <div class="container2">

            <header>
                <h1>Login</h1>
            </header>

            <p id="message">
            <?php

            function message($username, $pass) {



            }

            ?>

            </p>
            <form action="#" method="post" id="manage_user">
                <fieldset>

                    <label for="email">Email
                        <input type="email" name="email" id="email">
                    </label>
                    <label for="wachtwoord">Wachtwoord
                        <input type="password" minlength="8" name="wachtwoord" id="wachtwoord">
                    </label>
                    <button class="btn btn-success" type="submit" id="submit">Submit</button>
                </fieldset>

            </form>
        </div>
    </div>
</div>


<!-- hero end -->


</body>
</html>
