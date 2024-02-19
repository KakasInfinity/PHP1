<html>
    <head>
        <title>Problema-OmegaUp</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1 class="titulos">5630. Colegiatura</h1>
        <table class="tabla1" border="1" align="center">
            <tr>
                <td><h4>Puntos</h4></td>
                <td>11.64</td>
                <td><h4>Límite de memoria</h4></td>
                <td>32 <br> Mib</td>
            </tr>
            <tr>
                <td><h4>Límite de <br> tiempo (caso)</h4></td>
                <td>1s</td>
                <td><h4>Límite de <br> tiempo (total)</h4></td>
                <td>1m0s</td>
            </tr>
            <tr>
                <td><h4>Tamaño límite de <br> entrada (bytes)</h4></td>
                <td>10 <br> Kib</td>
            </tr>
        </table>
        <h3>Descripcion</h3>
        <p class="p1">La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este: <br>
            <h4 class="h4uni">Plan de pagos:</h4> <br>
             1- La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada una de las materias es de $1600. <br>
             2- Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%. <br>

        </p>
        <h3>Entrada</h3>
        <p>
        El numero de materias A
        que Esteban va a cursar. Y un numero con decimales B
        que es el promedio de Esteban.
        </p>
        <h3>Salida</h3>
        <p>
        Un numero entero C 
        con el precio a pagar. Debe de ir con un $.
        </p>
        <h3>Ejemplo: </h3>
        <table class="tabla2" border="1">
            <tr>
                <td><h4>Entrada</h4></td>
                <td><h4>Salida</h4></td>
            </tr>
            <tr>
                <td>5 <br> 9.6</td>
                <td>$5600</td>
            </tr>
            <tr>
                <td>8 <br> 7.8</td>
                <td>$14848</td>
            </tr>
            <tr>
                <td>2 <br> 8</td>
                <td>$3712</td>
            </tr>
        </table>
        <h3>Límites: </h3>
        <h4>1< A < 20 <br> 0 < B < 11 <br></h4>
    <?php 
        $x=5;
        echo "Valor de x: ",$x,"<br>";
        $y=9.6;
        echo "Calificacion del alumno: ",$y,"<br>";
        if($y >= 9)
        {
            $a=(1600 * $x);
            $r=($a * 0.3);
            $b=$a - $r;
            echo "EL TOTAL A PAGAR ES: ","$",$b,"<br>";
        }
        else
        {
            $a=(1600 * $x);
            $r=($a * 1.16);
            echo "EL TOTAL A PAGAR ES: ","$",$r,"<br>";
        }
        $x=8;
        echo "Valor de x: ",$x,"<br>";
        $y=7.8;
        echo "Calificacion del alumno: ",$y,"<br>";
        if($y >= 9)
        {
            $a=(1600 * $x);
            $r=($a * 0.3);
            $b=$a - $r;
            echo "EL TOTAL A PAGAR ES: ","$",$b,"<br>";
        }
        else
        {
            $a=(1600 * $x);
            $r=($a * 1.16);
            echo "EL TOTAL A PAGAR ES: ","$",$r,"<br>";
        }
        $x=2;
        echo "Valor de x: ",$x,"<br>";
        $y=8;
        echo "Calificacion del alumno: ",$y,"<br>";
        if($y >= 9)
        {
            $a=(1600 * $x);
            $r=($a * 0.3);
            $b=$a - $r;
            echo "EL TOTAL A PAGAR ES: ","$",$b,"<br>";
        }
        else
        {
            $a=(1600 * $x);
            $r=($a * 1.16);
            echo "EL TOTAL A PAGAR ES: ","$",$r,"<br>";
        }
    ?>
    </body>
</html>
