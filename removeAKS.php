<?php
$server = 'localhost';
$user = 'root'; // På dator
$password = '';
//$user = 'ntigskov_go2'; // På serer
//$password = '';
$db = 'ntigskov_go2';

$connect = new mysqli($server, $user, $password, $db);

  if (!empty($_GET["Namn"])) {
    $sql = "DELETE FROM `anvandare` WHERE `anvandare`.`Namn` = '".$_GET["Namn"]."'";
    $result = $connect ->query($sql);
    echo $sql;
  } 



  $name = NULL;
  $sql = "SELECT anvandare.Namn, anvandare.AID FROM `anvandare`";
  $result = $connect ->query($sql);
  echo "<table>";
  if (mysqli_num_rows($result) > 0) {
      // output data of each row   
    echo "<th class='test'>Namn</th>";
    while($row = mysqli_fetch_assoc($result)) {
      ?> <tr <?php echo 'id = "'.$row["Namn"].'"' ?>><td> <?php echo $row["Namn"]. "</td> <td>"
      ?>
      <form action="removeAKS.php" method="get">
            <?php
            echo '<input type="hidden" name="Namn" value="'.$row["Namn"].'">';
            echo '<input type="submit" value="Show '.$row["Namn"].' results">';
            ?>
            </form>
      <?php  "</td></tr>";
      
    }
  }
  echo "</table>";
  ?>
