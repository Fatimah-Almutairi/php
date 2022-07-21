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


$myname = "Fatimah \r\n Mohammed \n\r Al-Mutairi";
echo strlen($myname);   // يعد كم حرف بالنص مع المسافة
echo "<br>";
echo str_word_count($myname);  // يعد كم كلمة
echo "<br>";

echo strrev($myname);   // يعكس الكلام
echo "<br>";

echo strpos($myname , 'Mohammed');  // اعطيه اسم المتغير والكلمة اللي ببحث عنها ويطلع لي وين تبدا من اي رقم 

echo "<br>";

echo str_replace('Fatimah' , 'Bassam', $myname); // يبدل البرم الاول بقيمة البرم الثاني في المتغير المكتوب اسمه في البرم الثالث

echo "<br>";

echo nl2br($myname); // اذا فيه \n\r ينزل سطر جديد 
echo "<br>";
$brdate = '30-9-1995';
$new_date = explode('-', $brdate);  // هنا كلما شاف داش ـ بيفصل النص او الارقام ويخليها خانه لحاله من الarray 
print_r($new_date); // اتوقع يحول المتغير لمصفوفه
echo "<br>";
echo "Your day is :" . $new_date[0]; // يطلع لي اي index من المصفوفه احدده

echo "<br>";

$grades = array(23, 4, 6, 1, 66, 35, 72);

echo count($grades);   // فايدتها تعد كم انديكس في المصفوفه

echo "<br>";

echo array_sum($grades); //    يجمع كل القيم الموجودة في المصفوفه
echo "<br>";

echo "<pre>"; // يرتب طباعة المصفوفه بحيث كل خانه سطر جديد
print_r(array_count_values($grades)); // يطبع المصفوفه
echo "</pre>";


echo "<br>";
array_push($grades, '0');  // يضيف قيمة نهاية المصفوفه وهنا القيمه الجديدة صفر 

echo "<br>";
array_pop($grades);  // في الحالة هذي بيحذف اخر قيمه من المصفوفه
echo "<br>";




echo "<pre>"; // يرتب طباعة المصفوفه بحيث كل خانه سطر جديد
print_r($grades); // يطبع المصفوفه
echo "</pre>";

echo "<br>";
echo time(); // يطلع لي الوقت بالثواني من اول مابدت اللغه السبعينات اتوقع

echo "<br>";
echo date("y / m / d");  // يطبع التاريخ بالصيغة سنة شهر يوم باستخدام / وممكن وضع الداش -

echo "<br>";

echo date("y / m / d H:i:s");  // هنا اضفنا الوقت اذا كبتل يعني الساعة نظام ٢٤ و i يعني الدقايق

echo "<br>";

echo date("y / m / d h:i:sa");  // هنا صار الاتش سمول يعني نظام ١٢ ساعة واما صباح او مساء يطلع وقت السيرفر مو الجهاز

echo "<br>";

$d = "2022-07-21";
echo strtotime($d);   // فايدته يحول من التاريخ العادي الى تاريخ يفهمه الجهاز

echo "<br>";


?>