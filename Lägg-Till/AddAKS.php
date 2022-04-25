<?php
require_once('../db.php');
?>


<?php

if (!empty($_POST['namn'])) {
    echo $_POST['namn'];
    $namn = $_POST['namn'];
    $sql = "INSERT INTO `anvandare` (`AID`,`Namn`) VALUES (NULL,'".$namn."')";
    $result = $con ->query($sql);
    echo '<script>window.location.href = "addAKS.html";</script>';
}

if (!empty($_POST['kategori'])) {
    echo $_POST['kategori'];
    $kategori = $_POST['kategori'];
    $sql = "INSERT INTO `kategorier` (`KID`,`Kategorier`) VALUES (NULL,'".$kategori."')";
    $result = $con ->query($sql);
    echo '<script>window.location.href = "addAKS.html";</script>';
}

if (!empty($_POST['spel'])) {
    echo $_POST['spel'];
    $spel = $_POST['spel'];
    $sql = "INSERT INTO `spel` (`SID`,`Spel`) VALUES (NULL,'".$spel."')";
    $result = $con ->query($sql);
    echo '<script>window.location.href = "addAKS.html";</script>';
}


$con->close();
?>