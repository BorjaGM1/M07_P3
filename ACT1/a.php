<?php
session_start();
if (!isset($_SESSION['random_number']))
{
    $_SESSION['random_number'] = rand(0,100);
}
?>
<form action="a.php" method="post">
    <label for="numero">Acierta el numero</label>
    <input type="number" id="numero" name="numero"><br>
    <p><input type="submit" /></p>
</form>
<?php
if (isset($_POST['numero'])){
    $numero = (int)$_POST['numero'];
    if ($numero > $_SESSION['random_number']){
        echo "Te has pasado";
    }
    elseif ($numero < $_SESSION['random_number']){
        echo "Te has quedado corto";
    }
    elseif ($numero == $_SESSION['random_number']){
        echo "Has acertado";
    }
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
echo $_SESSION['random_number'];
?>
<br>
<span>Nota: Este es el número secreto aleatorio, mostrado para simplificar</span>
<br>
<span>El número cambiará al acertar</span>
<?php
if ($_POST['numero'] == $_SESSION['random_number']){
        session_destroy();
        header("Refresh:0");
        echo "<script> location.href='a.php'; </script>";
        exit;
    }