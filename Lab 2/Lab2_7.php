<?php 

    $temp=3;
    $elements = ['A','B','C','D','E','F'];

    for ($i = 0; $i < $temp; $i++) 
    {
        for ($j = 0; $j <= $i; $j++) 
        {
             echo " * ";
        }
    echo "<br>";

    }

    for ($i = 0; $i < $temp; $i++) 
    {
        for ($j = 0; $j <= $i; $j++) 
        {
             echo $elements[$j];
        }
    echo "<br>";
    
    }


?>
