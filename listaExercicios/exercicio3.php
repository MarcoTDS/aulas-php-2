<?php
    
echo "<h1>Anos bissextos entre 1980 e 2024</h1><br>";

for($i=1984;$i<2024;$i+=4){
    if($i%4==0 && $i%100!=0){
        echo $i." é um ano Bissexto<br>";
    }
    elseif($i%4==0 && $i%400==0){
        echo $i." é um ano Bissexto<br>";
    }
}