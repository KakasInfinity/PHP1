<html>
    <body>
        <?php
        
            $a=array();
            //SE DECLARA EL ARREGLO
            $b=rand(1,10);
            //metodo para dar una cantidad entre 1 a 100 numeros.
            $x=0;
            $contadorDeAlumnos=0;
            $contadorDeAlumnosVajos=0;
            for($i=0;$i<=$b;$i++)
            {
                array_push($a, rand(0,10));
                //PARA PONER UN LIMITE DE QUE TIPO DE NUMEROS TE DARÁ.
                echo $a[$i], " ";//IMPRIMIR EL ARREGLO.
                
            }
            //ESCRIBE EL TOTAL DE LOS NUMEROS QUE SE GENERARON ALEATORIAMENTE.
            echo "<br>";
            echo "Numeros generados: ", $b+1, "<br>";
            for($j=0;$j<=$b;$j++)
            {
                $x=$a[$j]+$x;
            }
            $promedio=$x/$b;
            //ESCRIBE EL PROMEDIO DE TODOS LOS NUMEROS RANDOM.
            echo "EL PROMEDIO DE TODO ES: ",round($promedio,2) ,"<br>";
            for($y=0;$y<$b;$y++)
            {
                if($a[$y]>=$promedio)
                {
                    $contadorDeAlumnos=$contadorDeAlumnos+1;
                }
                else
                {
                    $contadorDeAlumnosVajos=$contadorDeAlumnosVajos+1;
                }
            }
            $contadorDeAlumnosVajos=$contadorDeAlumnosVajos+1;
            $w=0;
            for($k=0;$k<$b;$k++)
            {
                $e=($a[$k]-$promedio);
                $e=($e*$e)+$w;
            }
            $m=$w/($b-1);
            $n=sqrt($m);
            echo "LA DESVIACION ESTANDAR ES DE: ",$n,"<br>";

            $n=($contadorDeAlumnosVajos/$b)*100;
            echo "EL PORCENTAJE DE ALUMNOS REPROBADOS ES DEL: ",round($n,2) ,"%","<br>";
            echo "EL TOTAL DE ALUMNOS MENORES AL PROMEDIO SON: ",round($contadorDeAlumnosVajos,2),"<br>";
            //IMPRIME EL TOTAL DE ALUMNOS MAYORES Y MENORES AL PROMEDIO.
            $z=($contadorDeAlumnos/$b)*100;
            echo "EL PORCENTAJE DE ALUMNOS APROBADOS ES DEL: ",round($z,2),"%","<br>";
            echo "EL TOTAL DE ALUMNOS MAYORES AL PROMEDIO SON: ",round($contadorDeAlumnos,2),"<br";
            
            
        ?>
    </body>
</html>