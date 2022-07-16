<?php
 $x =2;
 $y =5;
 $z = rec_area($x, $y);

// echo nw('Ali');


// function nw($name){
//     echo "This is first function " . $name;
// }

function cal($x, $y){
    $z = $x + $y;
    echo $z;
}
echo "<br>";

function rec_area($x, $y){
    $area = ($x+ $y) * 2;
    echo $area;
}



?>