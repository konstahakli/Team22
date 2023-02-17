<?php
$poistettava = isset($_GET["poistettava"]) ? $_GET["poistettava"] : "";

if (empty($poistettava)) {
    header("Location:testi.php");
    exit;
}

mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);

try {
    $yhteys = mysqli_connect("db", "root", "password", "hTiedotkanta");
} catch (Exception $e) {
    header("Location:../html/yhteysvirhe.html");
    exit;
}

$sql = "delete from hakemus where id=?";

$stmt = mysqli_prepare($yhteys, $sql);
//Sijoitetaan muuttujat oikeisiin paikkoihin
mysqli_stmt_bind_param($stmt, 'i', $poistettava);
//Suoritetaan sql-lause
mysqli_stmt_execute($stmt);
mysqli_close($yhteys);
header("Location:vaatiikirjautumisen.php");
exit;
?>