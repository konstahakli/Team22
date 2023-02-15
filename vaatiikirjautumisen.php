<?php session_start();
if (!isset($_SESSION["user_ok"])) {
    $_SESSION["paluuosoite"] = "vaatiikirjautumisen.php";
    header("Location:kirjaudu.php");
}
?>
<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lounasravintola Havu - työhakemukset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="assets/css/rekrystyle.css" rel="stylesheet" type="text/css">
    <style>
        body {
            margin-right: 240px;
            margin-left: 240px;
            background-image: url(assets/images/backgroundFood.jpg);
            background-repeat: repeat;

        }

        ul {
            display: block;
            margin: auto;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Lounasravintola Havu</h1>
    <header class="row">
        <nav class="navbar navbar-expand-lg bg-secondary-subtle rounded-pill ">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div></div>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html"><b>Etusivu</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="ruokalista.html"><b>Ruokalista</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tietoameista.html"><b>Tietoa meistä</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="yhteystiedot.html"><b>Yhteystiedot</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rekry.html"><b>Rekry</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kirjauduulos.php"><b>Kirjaudu ulos</b></a>
                        </li>
                </div>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <article>
        <?php
        print "<h2>Vaatiikirjautumisen.php</h2>";
        ?>
    </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>