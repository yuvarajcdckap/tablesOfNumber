<?php
function tablesOfanNumber($num){
    for ($i=1; $i <=10 ; $i++) { 
        $j=$i;

        echo $j.'*'.$num.'='.$num*$i."\n";
    }
}
tablesOfanNumber(4);
?>