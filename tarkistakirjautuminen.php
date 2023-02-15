<?php
session_start();

if (isset($_POST["tunnus"]) && isset($_POST["salasana"])) {
    $tunnus = $_POST["tunnus"];
    $salasana = $_POST["salasana"];
} else {
    header("Location:kirjaudu.php");
    exit;
}
$yhteys = mysqli_connect("db", "root", "password", "kayttajatunnukset");
$sql = "select * from tunnukset where tunnus=? and salasana=MD5 (?)";
$stmt = mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, "ss", $tunnus, $salasana);
mysqli_execute($stmt);
$tulos = mysqli_stmt_get_result($stmt);

if ($rivi = mysqli_fetch_object($tulos)) {
    $_SESSION ["user_ok"] = "ok";
    header("Location:".$_SESSION["paluuosoite"]);
    exit;
}
else {
    header("Location:kirjaudu.php");
    exit;
}
?>