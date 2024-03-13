<?php
    if($_POST)
    {
        echo "<h3>IMPRIME LA FRASE EN ESCALERA</h3>";
        $frase=$_POST["txtfrase"];
        $t=strlen($frase);
        for($i=0; $i<$t; $i++)
        {
            for($j=0; $j<=$i; $j++)
            {
                echo $frase[$j];
            }
            echo "<br>";
        }
    }
?>