<?php
  require_once('../db.php');
?>

<link rel="stylesheet" href="test.css">
<div class="top"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210.363" height="49" viewBox="0 0 210.363 49"><clipPath id="a"><path d="m0 0h210.363v49h-210.363z"/></clipPath><g clip-path="url(#a)"><path d="m202.115 32.437v-18.416h-6.872l.262-1.212h14.857l-.262 1.212h-6.719v18.416zm-9.676-1.211h-10.174v-8.419h8.956l.262-1.212h-9.218v-7.575h9.912l.262-1.21h-11.439v19.626h11.178zm-17.567-18.417h-1.266v19.628h1.266zm-7.32 10.857a4.272 4.272 0 0 0 -1.4-1.118 6.939 6.939 0 0 0 -2.2-.652l-2.618-.382a9.605 9.605 0 0 1 -1.822-.418 2.887 2.887 0 0 1 -1.121-.685 2.4 2.4 0 0 1 -.59-1.087 6.784 6.784 0 0 1 -.174-1.666 4.39 4.39 0 0 1 .345-1.841 2.9 2.9 0 0 1 1-1.186 4.542 4.542 0 0 1 1.654-.653 11.6 11.6 0 0 1 2.272-.2 14.4 14.4 0 0 1 2.547.2 13.234 13.234 0 0 1 2.03.529l.1.034.361-1.119-.089-.033a15.982 15.982 0 0 0 -2.018-.59 12.329 12.329 0 0 0 -2.711-.262 8.318 8.318 0 0 0 -5.039 1.289 4.346 4.346 0 0 0 -1.718 3.667v.274a7.67 7.67 0 0 0 .249 2.087 3.486 3.486 0 0 0 .816 1.475 4 4 0 0 0 1.44.938 9.024 9.024 0 0 0 2.11.511l2.539.354a6.269 6.269 0 0 1 1.932.523 3.024 3.024 0 0 1 1.1.87 2.749 2.749 0 0 1 .5 1.185 8.634 8.634 0 0 1 .122 1.5 5.536 5.536 0 0 1 -.281 1.822 3.169 3.169 0 0 1 -.888 1.333 4.039 4.039 0 0 1 -1.612.823 9.455 9.455 0 0 1 -2.5.284 19.894 19.894 0 0 1 -2.768-.164 15.233 15.233 0 0 1 -2.358-.541l-.106-.034-.23 1.15.081.03a13.279 13.279 0 0 0 2.31.577 17.716 17.716 0 0 0 2.88.22 10.759 10.759 0 0 0 3.072-.387 5.7 5.7 0 0 0 2.11-1.1 4.2 4.2 0 0 0 1.2-1.7 6.207 6.207 0 0 0 .375-2.2v-.354a8.039 8.039 0 0 0 -.194-1.783 3.8 3.8 0 0 0 -.715-1.513m-21.845-10.798 7.2 19.563h-1.361l-.024-.068-2.267-6.181h-8.781l-2.267 6.249h-1.279l7.2-19.629h1.56zm-.858 1.312-3.922 10.764h7.869zm-13.142 16.127-10.728-17.5h-1.331v19.623h1.212v-17.451l10.728 17.451h1.329v-19.627h-1.21zm-25.982-4.477-6.593-12.973-.025-.054h-1.256v19.627h1.21v-16.927l6.059 11.77h1.16l6.03-12.007v17.164h1.211v-19.627h-1.281zm-19.318-2.785-5.968-10.242h-1.408l6.733 11.369v8.259h1.266v-8.286l6.872-11.342h-1.411zm-15.294.436h3.98v7.626a8.625 8.625 0 0 1 -1.587.276c-.621.053-1.228.081-1.805.081a13.1 13.1 0 0 1 -3.275-.35 4.182 4.182 0 0 1 -2.089-1.221 5.338 5.338 0 0 1 -1.136-2.357 16.831 16.831 0 0 1 -.351-3.769v-2.074a18.066 18.066 0 0 1 .351-3.907 5.3 5.3 0 0 1 1.149-2.41 4.354 4.354 0 0 1 2.122-1.239 12.906 12.906 0 0 1 3.315-.364 12.354 12.354 0 0 1 1.989.148 11.407 11.407 0 0 1 1.581.364l.1.032.329-1.118-.091-.032a12.555 12.555 0 0 0 -1.7-.426 11.325 11.325 0 0 0 -2.147-.208 12.355 12.355 0 0 0 -4.127.58 5.767 5.767 0 0 0 -2.554 1.735 6.474 6.474 0 0 0 -1.289 2.855 19.659 19.659 0 0 0 -.343 3.881v2.182a26.127 26.127 0 0 0 .233 3.644 6.324 6.324 0 0 0 1.081 2.84 5.367 5.367 0 0 0 2.5 1.823 12.608 12.608 0 0 0 4.416.634c.292 0 .647-.018 1.06-.055s.828-.083 1.231-.136.816-.124 1.208-.207a6.124 6.124 0 0 0 1.013-.292l.058-.024v-9.75h-4.958zm-19.361 8.925h3.926v-19.6h-3.926zm-8.811 0v-15.703h4.886v-3.9h-13.7v3.9h4.886v15.7zm-23.717-10.679 9.937 11.091h1.046v-20.013h-3.955v11.088l-9.91-11.529h-1.044v20.04h3.926zm1.963-17.807v-3.927h-21.18v21.99c0 15 7.59 19.79 19.976 26.371l1.2.639v-4.448l-.149-.08c-11.237-6.004-17.102-9.731-17.102-22.482v-18.063z" fill="#fff"/></g></svg></div>
<body>
    <h2>L??gg till anv??ndare</h2>
    <form method="POST" action="test.php">

        <div id= "NamnDrop" class="dropdown">
            <span class="dropbtn">Namn</span>
            <div class="dropdown-content">
                <?php
                    $sql = "SELECT Namn,AID FROM `anvandare`";
                    $result = $con ->query($sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $Name = $row["Namn"];
                            if ($row["AID"]) {
                            echo '<input type = "checkbox" name="Namn" value="'.$Name.'">'.$Name.'</input> <br>';
                            }
                        } 
                    }
                ?>
            </div>
        </div>
        <div id = "KatDrop" class="dropdown">
            <span class="dropbtn">Kategorier</span>
            <div class="dropdown-content">
                <?php
                $num = NULL;
                    $sql = "SELECT Kategorier FROM `kategorier`";
                    $result = $con ->query($sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $Kategori = $row["Kategorier"];
                            $num += 1;
                            echo '<input type = "checkbox" name="Kategori'."$num".'" value="'.$Kategori.'">'.$Kategori.' </input> <br>';
                        }
                    }
                ?>
            </div>
        </div>
        <input type="submit" value="skicka din j??vel!">

        
    </form>
    <div class="tempruta">
    <?php
    // if (empty($_POST)){
    //     echo "<script>alert('Du m??ste v??lja n??gonting')</script>";
    // }

    if (!empty($_POST["Namn"])) {
        $num = NULL;
        foreach($_POST as $query_string_variable => $value) {
            $num += 1;
            if ($num == 1){
                $namn = $value;
                $sql = "SELECT AID FROM anvandare WHERE anvandare.Namn = '$namn'";
                $result = $con ->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $AID = $row["AID"];
                        // echo $AID;
                    }
                }
                // echo "$namn namn<br>";
            }
            else {
                $kategori = $value;
                $sql = "SELECT KID FROM kategorier WHERE kategorier.Kategorier = '$kategori'";
                $result = $con ->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $KID = $row["KID"];
                        // echo $KID;
                    }
                }

                $sql = "SELECT SID FROM `spel`";
                $result = $con ->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $SID = $row["SID"];
                        $sqlInsert = "INSERT INTO `resultat` (`AID`, `SID`, `KID`, `Poang`,`ID`) VALUES ('$AID', '$SID', '$KID', 0, NULL)";
                        $resultInsert = $con ->query($sqlInsert);
                        // echo $sqlInsert;
                    }
                }
            }
        }
    } 
    

    if (!empty($_POST["Namn"])) {
        echo '<script>window.location.href = "test.php";</script>';
    }

    


    $sql = "SELECT anvandare.Namn FROM `anvandare`,`resultat` WHERE anvandare.AID = resultat.AID";
    $result = $con ->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $Namn = NULL;
        while($row = mysqli_fetch_assoc($result)) {
            if ($Namn != $row["Namn"]) {
                $Namn = $row["Namn"];
                echo '<div class = "anvandare">';
                echo '<h1>'.$Namn.'</h1>';
                    $sql2 = "SELECT anvandare.Namn, kategorier.Kategorier FROM `anvandare`,`kategorier`,`resultat` WHERE anvandare.AID = resultat.AID AND kategorier.KID = resultat.KID";
                    $result2 = $con ->query($sql2);
                    if (mysqli_num_rows($result2) > 0) {
                        $test = NULL;
                        while($row2 = mysqli_fetch_assoc($result2)) {
                            if ($test != $row2["Namn"].$row2["Kategorier"]) {
                                echo '<ul>';
                                if ($Namn == $row2["Namn"]){
                                    echo '<li><p1>'.$row2["Kategorier"].'</p1></li>';
                                    echo '<br>';    
                                } 
                                echo '</ul>';
                            }
                            $test = $row2["Namn"].$row2["Kategorier"];
                        }
                    }
                echo '</div>';
                
            }
            $Namn = $row["Namn"];
        }
        echo "<div class = 'space'></div>"; 
    }
    

    ?>
    </div>
