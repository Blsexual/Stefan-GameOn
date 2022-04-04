<?php
$server = 'localhost';
$user = 'root'; // På dator
$password = '';
//$user = 'ntigskov_go2'; // På serer
//$password = '';
$db = 'ntigskov_go2';

$connect = new mysqli($server, $user, $password, $db);

$sql = "SELECT * FROM anvandare;";
$result = $connect->query($sql);
?>