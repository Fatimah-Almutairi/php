<?php


 $x = 5;
 $y = 5;
 $pi_val = 2;
 $area = cal ( $x , $y );
 echo $area;
// echo nw('Ali');
echo "<br>";

echo gettype($x);
echo "<br>";

echo var_dump($y);
// function nw($name){
//     echo "This is first function " . $name;
// }

function cal($x, $y){
    global $pi_val;
    $z = ( $x + $y ) * $pi_val;
    return $z;
}
echo "<br>";

// function rec_area($x, $y){
//     $area = ( $x + $y ) * 2;
//     echo $area;
// }



?>