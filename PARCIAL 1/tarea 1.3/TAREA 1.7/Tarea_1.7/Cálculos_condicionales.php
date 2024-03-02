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

    <form action="Cálculos_condicionales.php" method="post">
        <input type="text" name="txtN" placeholder="Numero">
        <input type="submit" name="btnEnviar">
    </form>

    <?php
    $N=0;
    $cont=0;
    $x=0;
    $cifras=0;
    $y=0;
        if($_POST)
        {
            $N=$_POST['txtN'];
            $y=array($N);
            for($i=0; $i<$y; $i++)
           {
                $cifras++;
           }
        }
//PARA 2 O MAS CIFRAS N
        
           if($cifras >=3)
                {
                    $x=$N/100;
                    $cont++;
                    echo $x . " " . $cont . "<br>";
                }
                elseif($cifras==2)
                {
                    $x=$N/10;
                    $cont++;
                    echo $x . " " . $cont . "<br>";
                }
//PARA %=0 Ó NO SEA DIVISIBLE ENTRE 2
            if($N%2==0)
            {
                $x=$N/2;
                $cont++;
                echo $x . " " . $cont . "<br>";
            }
            else
            {
                $x=$N+1;
                $cont++;
                echo $x . " " . $cont . "<br>";
            }
    ?>
</body>
</html>