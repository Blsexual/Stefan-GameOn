<?php
session_start();
$user = '';
if (!empty($_SESSION['username'])) {
    $user = $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Användarprofil</title>
</head>
<body>
    <?php echo "Välkommen " . $user;?>
</body>
</html>