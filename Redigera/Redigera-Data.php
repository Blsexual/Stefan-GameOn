<?php
  require_once('../db.php');
?>

<?php
  // Uppdatera Anvandare
    if (!empty($_GET["Namn"])) {
      echo $_GET["Namn"];
      echo $_GET["AID"];
      $sql = "UPDATE `anvandare` SET `Namn` = '".$_GET["Namn"]."' WHERE `anvandare`.`AID` = ".$_GET["AID"].";";
      $result = $con ->query($sql);
    } 
?>

<?php
  // Uppdatera Kategorier
    if (!empty($_GET["Kategorier"])) {
      echo $_GET["Kategorier"];
      echo $_GET["KID"];
      $sql = "UPDATE `kategorier` SET `Kategorier` = '".$_GET["Kategorier"]."' WHERE `kategorier`.`KID` = ".$_GET["KID"].";";
      $result = $con ->query($sql);
    } 
?>

<?php
  // Uppdatera Spel
    if (!empty($_GET["Spel"])) {
      echo $_GET["Spel"];
      echo $_GET["SID"];
      $sql = "UPDATE `spel` SET `Spel` = '".$_GET["Spel"]."' WHERE `spel`.`SID` = ".$_GET["SID"].";";
      $result = $con ->query($sql);
    } 
?>

<?php
  // Anvandare
    $name = NULL;
    $sql = "SELECT anvandare.Namn, anvandare.AID FROM `anvandare`";
    $result = $con ->query($sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row   
      while($row = mysqli_fetch_assoc($result)) {
        echo "<div id=''>";
        echo $row["Namn"];
          ?>
          <form action="Redigera-Data.php" method="get" > 
            <?php
              echo '<input type="input" name="Namn" value="'.$row["Namn"].'" placeholder="'.$row["Namn"].'">';
              echo '<input type="hidden" name="AID" value="'.$row["AID"].'">';
              echo '<br>';
              echo '<input type="submit" value="Redigera">';
            ?>
          </form>
          <?php
        echo "</div>";
      }
    }
?>  
<br>
<?php
  // Kategorier
    $name = NULL;
    $sql = "SELECT kategorier.Kategorier, kategorier.KID FROM `kategorier`";
    $result = $con ->query($sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row   
      while($row = mysqli_fetch_assoc($result)) {
        echo "<div id=''>";
        echo $row["Kategorier"];
          ?>
          <form action="Redigera-Data.php" method="get" > 
            <?php
              echo '<input type="input" name="Kategorier" value="'.$row["Kategorier"].'" placeholder="'.$row["Kategorier"].'">';
              echo '<input type="hidden" name="KID" value="'.$row["KID"].'">';
              echo '<br>';
              echo '<input type="submit" value="Redigera">';
            ?>
          </form>
          <?php
        echo "</div>";
      }
    }
?>  
<br>
<?php
  // Spel
    $name = NULL;
    $sql = "SELECT spel.Spel, spel.SID FROM `spel`";
    $result = $con ->query($sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row   
      while($row = mysqli_fetch_assoc($result)) {
        echo "<div id=''>";
        echo $row["Spel"];
          ?>
          <form action="Redigera-Data.php" method="get" > 
            <?php
              echo '<input type="input" name="Spel" value="'.$row["Spel"].'" placeholder="'.$row["Spel"].'">';
              echo '<input type="hidden" name="SID" value="'.$row["SID"].'">';
              echo '<br>';
              echo '<input type="submit" value="Redigera">';
            ?>
          </form>
          <?php
        echo "</div>";
      }
    }
?>  