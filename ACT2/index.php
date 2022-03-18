<?php
    session_start();
    if (!isset($_SESSION['pequeños'])) {
        $_SESSION['pequeños'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
    }
    if (!isset($_SESSION['grandes'])) {
        $_SESSION['grandes'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
    }
?>
<form action="index.php" method="post" name="myform">
    <input type="radio" id="aparcar" name="opcion" value="aparcar">
    <label for="aparcar">Aparca el coche</label><br>
    <input type="radio" id="retirar" name="opcion" value="retirar">
    <label for="retirar">Retira el coche</label><br>
    <input type="radio" id="status" name="opcion" value="status">
    <label for="status">Consulta el estado del parking</label><br>
    <p><input type="submit" /></p>
</form>
<?php
if(isset($_POST['opcion'])){
    $selected = $_POST['opcion'];
    if ($selected == 'aparcar'){
        echo '<script>window.location.replace("aparcar.php");</script>';
    }
    if ($selected == 'retirar'){
        echo '<script>window.location.replace("retirar.php");</script>';
    }
    if ($selected == 'status'){
        echo '<script>window.location.replace("status.php");</script>';
    }
}