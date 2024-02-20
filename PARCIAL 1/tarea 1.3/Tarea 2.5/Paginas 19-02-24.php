<html>
    <body>
        <h1>13433. Estaciones del Año</h1>

        <h2>Descripción</h2>
        <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta <br>
            por un día y un mes M según lo siguiente: <br>
            1_Winter del 21 de diciembre al 20 de marzo. <br>
            2_Spring del 21 de marzo al 21 de junio. <br>
            3_Summer del 22 de junio al 22 de septiembre. <br>
            4_Fall del 23 de septiembre al 20 de diciembre. <br>
            Considerando la siguiente cantidad de días para cada mes: <br>
            Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días,Abril, Junio, Septiembre  <br> 
            y Noviembre 30 días,Febrero 28 días.Cualquier fecha fuera de estos rangos debe considerarse como no existente. <br>
            Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.
        </p>
        <h3>Entrada</h3>
        <p>Dos números enteros D y M separados por un espacio que corresponden al día y mes de una fecha determinada. <br></p>
        <h3>Salida</h3>
        <p>Una cadena S que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida</p>
        <table border="1">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>15 10</td>
                <td>Fall</td>
            </tr>
            <tr>
                <td>22 3</td>
                <td>Spring</td>
            </tr>
            <tr>
                <td>31 4</td>
                <td>no existe la fecha</td>
            </tr>
        </table>
        <?php
            echo "NO HAY PROCEDIMIENTO HECHO <BR>";
        ?>
        <br>
        <h1>7341. El mayor de tres números</h1>
        <h2>Descripción</h2>
        <p>Realiza un problema que imprima el mayor de tres números. <br></p>
        <h3>Entrada</h3>
        <p>Escribe tres números enteros a,b y c. <br> </p>
        <h3>Salida</h3>
        <p>El número entero mayor de los tres números introducidos. <br></p>
        <table border="1">
            <tr>
                <td>
                    Entrada
                </td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>10 <br>8 <br>-7</td>
                <td>10</td>
            </tr>
            <tr>
                <td>10 <br> 81 <br> 101</td>
                <td>101</td>
            </tr>
            <tr>
                <td>11 <br> 11 <br> 11</td>
                <td>11</td>
            </tr>
            <tr>
                <td>10 <br> 810 <br>101</td>
                <td>810</td>
            </tr>
            
        </table>
        <?php
                $a=10;
                $b=8;
                $c=-7;
                echo "LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c;
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }

                $a=10;
                $b=81;
                $c=-101;
                echo "LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c,"<br>";
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }

                $a=11;
                $b=11;
                $c=11;
                echo "LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c,"<br>";
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }

                $a=10;
                $b=810;
                $c=101;
                echo "LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c,"<br>";
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }
            ?>
        <br>
        <h1>7294. ¿Cuántos valen 7? </h1>
        <h2>Descripción</h2>
        <p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7. <br> </p>
        <h3>Entrada</h3>
        <p>Dos enteros en el rango de -1000 a 1000. <br></p>
        <h3>Salida</h3>
        <p>La cantidad de enteros iguales a 7.</p>
        <table border="1">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>-3 8</td>
                <td>0</td>
            </tr>
            <tr>
                <td>7 57</td>
                <td>1</td>
            </tr>
            <tr>
                <td>62 7</td>
                <td>1</td>
            </tr>
            <tr>
                <td>7 7</td>
                <td>2</td>
            </tr>
        </table>
        <?php
            $a=-3;
            $b=8;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }

            $a=7;
            $b=57;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }

            $a=62;
            $b=7;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }

            $a=7;
            $b=7;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }
        ?>
    </body>
</html>