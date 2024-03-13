<?php
    if($_POST)
    {
        $n=$_POST["txtcantidad"];
        for($i=0; $i<$n; $i++)
        {
            for($j=0; $j<$i; $j++ )
            {
                echo "_";
            }
            for($j=$i; $j<$n; $j++ )
            {
                echo "*";
            }
            echo "<br>";
        }
    }
?>