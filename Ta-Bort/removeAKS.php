<?php
  require_once('../db.php');
?>
<!-- Uppdatera tabellen -->
  <?php
  // Uppdatera Användare
    if (!empty($_GET["Namn"])) {
      $sql = "DELETE FROM `anvandare` WHERE `anvandare`.`Namn` = '".$_GET["Namn"]."'";
      $result = $con ->query($sql);
      echo $sql;
      echo '<script>window.location.href = "removeAKS.php";</script>';
    } 
  ?>

  <?php
  // Uppdatera Kategorier
    if (!empty($_GET["Kategorier"])) {
      $sql = "DELETE FROM `kategorier` WHERE `kategorier`.`Kategorier` = '".$_GET["Kategorier"]."'";
      $result = $con ->query($sql);
      echo $sql;
      echo '<script>window.location.href = "removeAKS.php";</script>';
    } 
  ?>

  <?php
  // Uppdatera Spel
    if (!empty($_GET["Spel"])) {
      $sql = "DELETE FROM `spel` WHERE `spel`.`Spel` = '".$_GET["Spel"]."'";
      $result = $con ->query($sql);
      echo $sql;
      echo '<script>window.location.href = "removeAKS.php";</script>';
    } 
  ?>


<!-- Moderera tabellen -->
  <?php
  // Användare 
    $name = NULL;
    $sql = "SELECT anvandare.Namn, anvandare.AID FROM `anvandare`";
    $result = $con ->query($sql);
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
              echo '<input type="submit" value="Ta bort '.$row["Namn"].'">';
              ?>
              </form>
        <?php  "</td></tr>";
        
      }
    }
    echo "</table>";
  ?>

  <?php
  // Kategorier
    $name = NULL;
    $sql = "SELECT kategorier.Kategorier, kategorier.KID FROM `kategorier`";
    $result = $con ->query($sql);
    echo "<table>";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row   
      echo "<th class='test'>Kategori</th>";
      while($row = mysqli_fetch_assoc($result)) {
        ?> <tr <?php echo 'id = "'.$row["Kategorier"].'"' ?>><td> <?php echo $row["Kategorier"]. "</td> <td>"
        ?>
        <form action="removeAKS.php" method="get">
              <?php
              echo '<input type="hidden" name="Kategorier" value="'.$row["Kategorier"].'">';
              echo '<input type="submit" value="Ta bort '.$row["Kategorier"].'">';
              ?>
              </form>
        <?php  "</td></tr>";
        
      }
    }
    echo "</table>";
  ?>  

  <?php
  // Spel
    $name = NULL;
    $sql = "SELECT spel.Spel, spel.SID FROM `spel`";
    $result = $con ->query($sql);
    echo "<table>";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row   
      echo "<th class='test'>Spel</th>";
      while($row = mysqli_fetch_assoc($result)) {
        ?> <tr <?php echo 'id = "'.$row["Spel"].'"' ?>><td> <?php echo $row["Spel"]. "</td> <td>"
        ?>
        <form action="removeAKS.php" method="get">
              <?php
              echo '<input type="hidden" name="Spel" value="'.$row["Spel"].'">';
              echo '<input type="submit" value="Ta bort '.$row["Spel"].'">';
              ?>
              </form>
        <?php  "</td></tr>";
        
      }
    }
    echo "</table>";
  ?>  
