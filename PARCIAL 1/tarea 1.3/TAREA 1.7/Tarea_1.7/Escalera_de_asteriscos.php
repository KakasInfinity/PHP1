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

    <form action="Escalera_de_asteriscos.php" method="post">
        <input type="text" name="txtN" placeholder="Cantidad">
        <input type="submit" name="btnEnviar">
    </form>
    <?php
    $n=0;
        if($_POST)
        {
            $n=$_POST['txtN'];
            for($i=1; $i<=$n; $i++)
            {
                for($j=1; $j<=$i; $j++)
                {
                    echo "#";
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>