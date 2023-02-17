<?php 
$id = isset($_POST["id"]) ? $_POST["id"] : "";
$etunimi = isset($_POST["etunimi"]) ? $_POST["etunimi"] : "";
$sukunimi = isset($_POST["sukunimi"]) ? $_POST["sukunimi"] : "";
$puhelinnumero = isset($_POST["puhelinnumero"]) ? $_POST["puhelinnumero"] : "";
$osoite = isset($_POST["osoite"]) ? $_POST["osoite"] : "";
$postinumero = isset($_POST["postinumero"]) ? $_POST["postinumero"] : "";
$postitoimipaikka = isset($_POST["postitoimipaikka"]) ? $_POST["postitoimipaikka"] : "";
$syntymaaika = isset($_POST["syntymaaika"]) ? $_POST["syntymaaika"] : "";
$sahkoposti = isset($_POST["sahkoposti"]) ? $_POST["sahkoposti"] : "";
$lisatietoja = isset($_POST["lisatietoja"]) ? $_POST["lisatietoja"] : "";


if (empty($etunimi) || empty($id)) {
    header("location:./poistatiedot.php");
    exit;
}

mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);

try {
    $yhteys = mysqli_connect("db", "root", "password", "hTiedotkanta");
} catch (Exception $e) {
    header("Location:./poistatiedot.php");
    exit;
}
$sql = "update hakemus set etunimi=?, sukunimi=?, puhelinnumero=?, osoite=?, postinumero=?, postitoimipaikka=?, syntymaaika=?, sahkoposti=?, lisatietoja=? where id=?";

$stmt = mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, 'sssssssssi', $etunimi, $sukunimi, $puhelinnumero, $osoite, $postinumero, $postitoimipaikka, $syntymaaika, $sahkoposti, $lisatietoja, $id);
mysqli_stmt_execute($stmt);
mysqli_close($yhteys);
header("Location:./vaatiikirjautumisen.php");
?>