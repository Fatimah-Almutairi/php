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
echo "<br>";
echo isset($x);
echo "<br>";

echo empty($x);

echo "<br>";
$a = -3;
// $b = +5;
echo abs($a );
echo "<br>";
// echo abs ($b);

$rand_val = rand(2,5);
echo "This is rand number ". $rand_val;

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