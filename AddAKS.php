<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ntigskov_go2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
$X = NULL;
$sqla = "INSERT INTO `anvandare` (`Namn`) VALUES ($X)";
$sqlk = "INSERT INTO `kategorier` (`Kategorier`) VALUES ()";
$sqls = "INSERT INTO `spel` (`Spel`) VALUES ()";

if ($conn->query($sqla) === TRUE) {
    echo "Clone created";
}   else {
    echo "Error no go: " . $conn->error;
}

$conn->close();
?>
