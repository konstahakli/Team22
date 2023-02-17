<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakemusten muokkaus</title>
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

        th,
        td {
            padding: 3px;
            text-align: center;
            background-color: floralwhite;
        }

        table {
            display: flex;
            flex-flow: row wrap;
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
    <body>
<?php

$muokattava = isset($_GET["muokattava"]) ? $_GET["muokattava"] : "";


if (empty($muokattava)) {
    header("Location:./vaatiikirjautumisen.php");
    exit;
}
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
try {
    $yhteys = mysqli_connect("db", "root", "password", "hTiedotkanta");
} catch (Exception $e) {
    header("Location:./vaatiikirjautumisen.php");
    exit;
}
$sql = "select * from hakemus where id=?";
$stmt = mysqli_prepare($yhteys, $sql);

mysqli_stmt_bind_param($stmt, 'i', $muokattava);
//Suoritetaan sql-lause
mysqli_stmt_execute($stmt);

$tulos = mysqli_stmt_get_result($stmt);
if (!$rivi = mysqli_fetch_object($tulos)) {
    header("Location:./vaatiikirjautumisen.php");
    exit;
}
?>
<section>
    <article>
        <h2>Muokkaa hakemusta </h2>
<form action='./paivitatiedot.php' method='post'>
    id:<input type='text' name='id' value='<?php print $rivi->id; ?>' readonly><br>
    Etunimi:<input type='text' name='etunimi' value='<?php print $rivi->etunimi; ?>'><br>
    Sukunimi: <input type='text' name='sukunimi' value='<?php print $rivi->sukunimi; ?>'><br>
    Puhelinnumero: <input type='tel' name='puhelinnumero' value='<?php print $rivi->puhelinnumero; ?>' ><br>
    Osoite: <input type='text' name='osoite' value='<?php print $rivi->osoite; ?>' ><br>
    Postinumero: <input type='text' name='postinumero' value='<?php print $rivi->postinumero; ?>' ><br>
    Postitoimipaikka: <input type='text' name='postitoimipaikka' value='<?php print $rivi->postitoimipaikka; ?>' ><br>
    Syntymäaika: <input type='date' name='syntymaaika' value='<?php print $rivi->syntymaaika; ?>' ><br>
    Sähköposti: <input type='email' name='sahkoposti' value='<?php print $rivi->sahkoposti; ?>' ><br>
    Lisätietoja: <input type='text' name='lisatietoja' value='<?php print $rivi->lisatietoja; ?>' ><br>
    <input type='submit' name='ok' value='ok'><br>
</form>
</article>
</section>
<!-- loppuun uusi php-osuus -->
<?php

mysqli_close($yhteys);
?>