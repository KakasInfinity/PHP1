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

    <form action="El_lado_más_corto.php" method="post">
        <input type="text" name="txtX1" placeholder="cord x1"> 
        <input type="text" name="txtY1" placeholder="cord y1"> <br>

        <input type="text" name="txtX2" placeholder="cord x2"> 
        <input type="text" name="txtY2" placeholder="cord y2"> <br>

        <input type="text" name="txtX3" placeholder="cord x3"> 
        <input type="text" name="txtY3" placeholder="cord y3"> <br>

        <input type="text" name="txtX4" placeholder="cord x4"> 
        <input type="text" name="txtY4" placeholder="cord y4">
        <input type="submit" name="btnEnviar">
    </form>
    <?php
    $x1=0;
    $y1=0;
    $x2=0;
    $y2=0;
    $x3=0;
    $y3=0;
    $x4=0;
    $y4=0;
    $l1=0;
    $l2=0;
    $l3=0;
    $l4=0;

        if($_POST)
        {
            $x1=$_POST['txtX1'];
            $y1=$_POST['txtY1'];
            $x2=$_POST['txtX2'];
            $y2=$_POST['txtY2'];
            $x3=$_POST['txtX3'];
            $y3=$_POST['txtY3'];
            $x4=$_POST['txtX4'];
            $y4=$_POST['txtY4'];

            $l1=sqrt(pow($x1-$x2,2)+pow($y1-$y2,2));
            $l2=sqrt(pow($x2-$x3,2)+pow($y2-$y3,2));
            $l3=sqrt(pow($x3-$x4,2)+pow($y3-$y4,2));
            $l4=sqrt(pow($x1-$x4,2)+pow($y1-$y4,2));

            if($l1<$l2 && $l1<$l3 && $l1<$l4)
            {
                echo "EL LADO MAS CORTO ES: " . $l1;
            }
            elseif($l2<$l1 && $l2<$l3 && $l2<$l4)
            {
                echo "EL LADO MAS CORTO ES: " . $l2;
            }
            elseif($l3<$l2 && $l3<$l1 && $l3<$l4)
            {
                echo "EL LADO MAS CORTO ES: " . $l3;
            }
            else
            {
                echo "EL LADO MAS CORTO ES: " . $l4;
            }
        }
    ?>
</body>
</html>