<?php
session_start();
if (!isset($_SESSION['pequeños'])) {
    $_SESSION['pequeños'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
}
if (!isset($_SESSION['grandes'])) {
    $_SESSION['grandes'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
}
?>
<span>Parking donde se ubica el coche y numero de plaza</span>
<form action="retirar.php" method="post" name="unpark">
    <input type="radio" id="grande" name="opcion" value="grande">
    <label for="grande">Grande</label><br>
    <input type="radio" id="pequeño" name="opcion" value="pequeño">
    <label for="pequeño">Pequeño</label><br>
    <input type="number" id="plaza" name="plaza">
    <label for="plaza">Numero de plaza</label><br>
    <p><input type="submit" /></p>
</form>
<?php
if(isset($_POST['opcion']) && isset($_POST['plaza'])){
    $tipo = $_POST['opcion'];
    $small = $_SESSION['pequeños'];
    $big = $_SESSION['grandes'];
    $plaza = $_POST['plaza'];
    if ($tipo == 'grande'){
        if ($big[$plaza] == 1){
            $big[$plaza] = 0;
            $_SESSION['grandes'] = $big;
            echo "Coche retirado";
        } else {echo "No hay ningún coche aparcado en esta plaza";}
    }
    if ($tipo == 'pequeño'){
        if ($small[$plaza] == 1){
            $small[$plaza] = 0;
            $_SESSION['pequeños'] = $small;
            echo "Coche retirado";
        } else {echo "No hay ningún coche aparcado en esta plaza";}
    }
}
