<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'ntigskov_go2';

$con = new mysqli($server, $user, $password, $db);
if(!$con){
    die("Yeetus deletus".Mysqli_connect_error());
}
?>

