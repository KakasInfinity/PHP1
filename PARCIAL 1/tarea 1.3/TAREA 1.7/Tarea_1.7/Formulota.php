<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="Cálculos_condicionales.php">Cálculos condicionales</a></li>
        <li><a href="Formulota.php">Formulota</a></li>
        <li><a href="El_lado_más_corto.php">El lado más corto</a></li>
        <li><a href="Escalera_de_asteriscos.php">Escalera de asteriscos</a></li>
    </ul>

    <form action="Formulota.php" method="post">
        <input type="text" name="txtX" placeholder="Numero x">
        <input type="text" name="txtY" placeholder="Numero y">
        <input type="text" name="txtZ" placeholder="Numero z">
        <input type="submit" name="btnEnviar">
    </form>

    <?php
    $x=0;
    $y=0;
    $z=0;
    $r1=0;
    $r2=0;
    $r3=0;
    $r4=0;
    if($_POST)
    {
        $x=$_POST['txtX'];
        $y=$_POST['txtY'];
        $z=$_POST['txtZ'];
//PROCEDIMIENTO
        $r1=($x+$y)/(2*$x);
        $r2=( ($x*$x*$x)+($y*$y*$y) )/( ($x*$x)+($y*$y) );
        $r3=($x*$x)+($y*$y)+($z*$z);

        $r4=($r1+$r2)/$r3;
        echo $x . ", " . $y . ", " . $z . ", " . round($r4,6) . "<br>";
    }

    ?>
</body>
</html>