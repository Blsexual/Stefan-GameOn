<?php
session_start();
$user = '';
if (!empty($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

?>

    <meta charset="UTF-8">
    <title>Användarprofil</title>
    <?php echo "Välkommen " . $user;?>

