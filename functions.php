<?php


 $x = 5;
 $y = 5;
 $pi_val = 2;
//  $area = cal ( $x , $y );
//  echo $area;
// echo nw('Ali');
echo "<br>";

echo gettype($x); // يطلع نوع المتغير هل هو int or srtring or float
echo "<br>";

echo var_dump($y);  // يطبع نوع المتغير و قيمته
echo "<br>";
echo isset($x); // يطلع لي اذا المتغير فيه قيمة او فاضي null
echo "<br>";

echo empty($x); // يطلع لي اذا المتغير empty او لا

echo "<br>";
$a = -3;
// $b = +5;
echo abs($a);  // يطلع القيمةالسالبة موجبه يحول السالب  لموجب فقط
echo "<br>";
// echo abs ($b);

$rand_val = rand(2,5); // فايدتها يطببع رقم عشوائي بين القيم هذي كل مره يتغيير
echo "This is rand number ". $rand_val;

echo "<br>";

echo "This is max number " . max(3, 5, 1, 19, 22, 12);
echo "<br>";

echo "This is min number " . min(3, 0, 1, 19, 22, 12);
echo "<br>";

echo "this is the sqrt for number 12 " . sqrt(12);  // الجذر التربيعي

// function nw($name){
//     echo "This is first function " . $name;
// }

function cal($x, $y){
    global $pi_val;
    $z = ( $x + $y ) * $pi_val;
    return $z;
}
echo "<br>";

function rec_area($x, $y){ // يحسب مساحه  المستطيل مثلاً نفس الفانكشين اللي فوق
    $area = ( $x + $y ) * 2;
    echo $area;
}


$myname = "Fatimah Mohammed Al-Mutairi";
echo strlen($myname);   // يعد كم حرف بالنص مع المسافة
echo "<br>";
echo str_word_count($myname);  // يعد كم كلمة
echo "<br>";

echo strrev($myname);   // يعكس الكلام
echo "<br>";



?>