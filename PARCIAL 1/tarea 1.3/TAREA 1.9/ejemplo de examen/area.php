<?php
    if($_POST)
    {
        echo "<H3>CALCULA UN AREA DE UN TRIANGULO</H3>";
        $base=$_POST["txtbase"];
        $altura=$_POST["txtaltura"];
        $resultado=($base*$altura);
        echo "EL AREA ES:" . $resultado . "<BR>";
    }
?>