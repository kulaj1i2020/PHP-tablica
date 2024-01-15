<?php

function suma($a,$b)
{
    $sum=0;
    for($i=0;$a<=$b;$i++)
    {
        $table[$i]=$a;
        $a++;
        $sum=$sum+$table[$i];
      
        
    }
    
    return json_encode($table). " suma: ". $sum;
}

print suma(4,10);

?>