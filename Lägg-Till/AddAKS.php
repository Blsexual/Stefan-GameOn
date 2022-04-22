<?php
require_once('../db.php');
?>


<?php
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