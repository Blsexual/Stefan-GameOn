<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'ntigskov_go2';

$con = new mysqli($server, $user, $password, $db);
if(!$con){
    die("Connection failed, see error: ".Mysqli_connect_error());
}
?>

