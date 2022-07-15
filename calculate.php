<?php

// $no1 = $_POST['no1'];
//  echo"<br>";
// $no2 = $_POST['no2'];
// echo"<br> <br>";

// first code 
$arthematic_operation = $_POST['arth_operation'];
echo $arthematic_operation . "<br>";
// Using if Condition

if($arthematic_operation == 'sum_operation') {
    $cal_val = $no1 + $no2;
}else if($arthematic_operation == 'sub_operation') {
    $cal_val = $no1 - $no2;
}else if($arthematic_operation == 'multiple_operation') {
    $cal_val = $no1 * $no2;
}else {
    $cal_val = $no1 / $no2;
}
echo $cal_val;
?>