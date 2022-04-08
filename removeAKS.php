<?php
$server = 'localhost';
$user = 'root'; // På dator
$password = '';
//$user = 'ntigskov_go2'; // På serer
//$password = '';
$db = 'ntigskov_go2';

$connect = new mysqli($server, $user, $password, $db);


  $name = NULL;
  $sql = "SELECT anvandare.Namn, anvandare.AID, spel.Spel, kategorier.Kategorier, resultat.Poang FROM `anvandare`,`spel`,`kategorier`,`resultat` WHERE anvandare.AID = resultat.AID AND spel.SID = resultat.SID AND kategorier.KID = resultat.KID";
  $result = $connect ->query($sql);
  echo "<table>";
  if (mysqli_num_rows($result) > 0) {
      // output data of each row   
    echo "<th class='test'>Namn</th> <th class='test'>Spel</th> <th class='test'>Kategori</th> <th class='test'>Poäng</th>";
    while($row = mysqli_fetch_assoc($result)) {
      ?> <tr <?php echo 'class = "'.$row["Namn"].' Table"' ?>><td> <?php echo $row["Namn"]. "</td><td>". $row["Spel"]. "</td><td>". $row["Kategorier"]. "</td><td>". $row["Poang"]. "</td></tr>";
    }
  }
  echo "</table>";