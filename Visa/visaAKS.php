<?php
  require_once('../db.php');
?>

<?php
$sql = "SELECT anvandare.Namn FROM `anvandare`";
$result = $con ->query($sql);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<td>'.$row["Namn"].'</td>';
    }
    echo '</table>';
}
?>
<br>
<?php
$sql = "SELECT kategorier,Kategorier FROM `kategorier`";
$result = $con ->query($sql);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<td>'.$row["Kategorier"].' </td>';
    }
    echo '</table>';
}
?>
<br>
<?php
$sql = "SELECT spel,Spel FROM `spel`";
$result = $con ->query($sql);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<th>'.$row["Spel"].'</th>';
    }
    echo '</table>'; 
} 
?>
