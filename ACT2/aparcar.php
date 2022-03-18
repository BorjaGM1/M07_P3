<?php
session_start();
if (!isset($_SESSION['pequeños'])) {
    $_SESSION['pequeños'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
}
if (!isset($_SESSION['grandes'])) {
    $_SESSION['grandes'] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,);
}
echo "<span>Indica el tamaño de tu vehiculo</span>"
?>
<form action="aparcar.php" method="post" name="park">
    <input type="radio" id="grande" name="opcion" value="grande">
    <label for="grande">Grande</label><br>
    <input type="radio" id="pequeño" name="opcion" value="pequeño">
    <label for="pequeño">Pequeño</label><br>
    <p><input type="submit" /></p>
</form>
<?php
if(isset($_POST['opcion'])){
    $small = $_SESSION['pequeños'];
    $big = $_SESSION['grandes'];
    $selected = $_POST['opcion'];
    if ($selected == 'grande'){
        for($i = 0; $i <= sizeof($big); $i++){
            if ($i == sizeof($big)){
                echo "No hay espacios disponibles";
                break;
            }
            if ($big[$i] == 0) {
                $big[$i] = 1;
                $_SESSION['grandes'] = $big;
                echo "Aparcado";
                //echo "Aparcado en posicion ";
                //$i += 1;
                //echo $i;
                break;
            }
        }
    }
    if ($selected == 'pequeño'){
        $c = 0;
        for ($h = 0; $h < sizeof($small); $h++){
            if ($small[$h] == 0) {
                $small[$h] = 1;
                $c = 1;
                $_SESSION['pequeños'] = $small;
                echo "Aparcado";
                //echo "Aparcado en posicion ";
                //$h +=1;
                //echo $h;
                //echo " del parking de pequeños";
                break;
            }
        }
        if ($c == 0)
            for($i = 0; $i <= sizeof($big); $i++){
                if ($i == sizeof($big)){
                    echo "No hay espacios disponibles";
                    break;
                }
                if ($big[$i] == 0) {
                    $big[$i] = 1;
                    $_SESSION['grandes'] = $big;
                    echo "Aparcado";
                    //echo "Aparcado en posicion ";
                    //$i +=1;
                    //echo $i;
                    //echo " del parking de grandes";
                    break;
                }
            }
    }
}