<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggningsformulär AdminX</title>
    <link rel="stylesheet" href="adminx.css">
</head>
<body>

<?php
session_start();

$inloggad_html = '';

if (!empty($_POST)) {
    $varden = $_POST;
    $inloggad = false;
    if ($varden['username'] == 'gw' && $varden['password'] == '112') {
        $inloggad = true;
    }
    if ($varden['username'] == 'ap' && $varden['password'] == '200') {
        $inloggad = true;
    }
    if ($varden['username'] == 'pa' && $varden['password'] == '1337') {
        $inloggad = true;
    }

    if ($inloggad == true) {
        $_SESSION['username'] = $varden['username'];
        $inloggad_html = 'Du är inloggad ' . $varden['username'] . '. Cool';
        $inloggad_html .= 'Gå vidare till användareprofil';
        $inloggad_html .= '<a href="anvandarprofil.php?username=' . $varden['username'] . '">nu</a>.';
    }

}
?>

    <?php echo $inloggad_html;?>
    <form method="POST" action="index.php">
        <input type="text" id="username" name="username" placeholder="Användarnamn">
        <br><input type="password" id="password" name="password" placeholder="Lösenord">
        <br><input type="submit" value="Logga in">
    </form>
</body>
</html>