<?php

$json = isset($_POST["hakemus"]) ? $_POST["hakemus"] : "";
$hakemus = json_decode($json, false);

mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);

try {
    $yhteys = mysqli_connect("db", "root", "password", "hTiedotkanta");
} catch (Exception $e) {
    print "Yhteysvirhe";
    exit;
}

$sql = "insert into hakemus (etunimi, sukunimi, puhelinnumero, osoite, postinumero, postitoimipaikka, syntymaaika, sahkoposti, lisatietoja) " .
    "values(?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param( $stmt,'sssssssss', $hakemus->etunimi, $hakemus->sukunimi, $hakemus->puhelinnumero, $hakemus->osoite, $hakemus->postinumero, $hakemus->postitoimipaikka, $hakemus->syntymaaika, $hakemus->sahkoposti, $hakemus->lisatietoa,
);
mysqli_stmt_execute($stmt);
mysqli_close($yhteys);
print "<h2>Kiitos hakemuksestasi!</h2>";
print "Olemme yhteydessä teihin, mikäli valintamme kohdistuu teihin!";
?>

