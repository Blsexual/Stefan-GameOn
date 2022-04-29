<?php
  require_once('../db.php');
?>

<?php
  // Uppdatera Kategorier
    if (!empty($_GET["Kategorier"])) {
      echo $_GET["Kategorier"];
      echo $_GET["KID"];
    //   $sql = "";
    // $result = $con ->query($sql);
    } 
?>

<?php
  // Kategorier
    $name = NULL;
    $sql = "SELECT kategorier.Kategorier, kategorier.KID FROM `kategorier`";
    $result = $con ->query($sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row   
      while($row = mysqli_fetch_assoc($result)) {
        echo "<div id=''>";
          ?>
          <form action="Redigera-Data.php" method="get" onsubmit= "return confirm('Är du säker?');"> 
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