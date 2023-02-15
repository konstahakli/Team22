<?php
if (isset($_POST['tunnus']) && isset($_POST['salasana'])) {
    $tunnus = $_POST["tunnus"];
    $salasana = $_POST["salasana"];
} else {
    header("Location:rekisteroityminen.html");
    exit;
}
$salasanaMD5= md5($salasana);
$yhteys = mysqli_connect("db", "root", "password", "kayttajatunnukset");
$sql = "insert into tunnukset (tunnus, salasana) values(?, ?)";
$stmt = mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, "ss", $tunnus, $salasanaMD5);
mysqli_stmt_execute($stmt);

header("Location: tunnusluotu.html");

exit;
?>