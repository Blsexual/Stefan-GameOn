<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ntigskov_go2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
$namn = $_POST['namn'];
$kategori = $_POST['kategori'];
$spel = $_POST['spel'];
$sqla = "INSERT INTO `anvandare` (`Namn`) VALUES ($namn)";
$sqlk = "INSERT INTO `kategorier` (`Kategorier`) VALUES ($kategori)";
$sqls = "INSERT INTO `spel` (`Spel`) VALUES ($spel)";

if ($conn->query($sqla) === TRUE) {
    echo "Clone created";
}   else {
    echo "Error no go: " . $conn->error;
}

$conn->close();
?>
