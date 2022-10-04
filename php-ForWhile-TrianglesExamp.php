<?php

function triangle($value){
    for($i=1; $i<$value; $i++){
        $counter=0;
        while($counter < $i){
            echo "0";
            $counter++;
        }
        echo "<br>";
    }
}
triangle(15);