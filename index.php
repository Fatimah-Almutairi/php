
   <?php 

   $students = array(
       "Ahmed"  => 99,
       "Ali"    => 95,
       "Amjad"  => 93,
       "May"    => 88,
       "X"      => 80
   );

   if($students > 95){
       echo $students;
   }

// -----------------------
// Mulatidimensional array

// $months = array(
//     array('Jan', 1, 31),
//     array('Feb', 1, 28),
//     array('Mar', 1, 30),
//     array('Apr', 1, 31)
// );

// echo "<pre>";
// print_r($months);
// echo "</pre>";

// // echo $months[2][0];

// foreach($months as $month){
//     echo $month[0]."<br>";
//     echo $month[1]."<br>";
//     echo $month[2]."<br>";

// }
// ----------------------

//    associative arrays

// $students = array(
//     "Amal"    => 6,
//     "Fatimah" => 8,
//     "aysha"   => 6
// );

// foreach($students as $name => $age){
//     echo "Your name is " . $name . " has ". $age ." years old <br>";
// }

// index array
// $days = array('Sun', 'Mon', 'Tus', 'Wed');

// foreach($days as $day){
//     echo $day. "<br>";
// }

// echo "<pre>";
// print_r($days);
// echo "</pre>";

//--------------------------
// $s = 6;
// for ($i = 1; $i<= $s; $i++){
//     for($j = 1; $j<=(2*$s)-1; $j++){
//         if($j>=$s-($i-1) && $j<= $s+($i-1)){
//             echo "*";
//         }else{
//             echo "&nbsp;"."&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// for ($a=1 ; $a<=7; $a++){
//     echo $a . "<br>";
//     for($b = 1; $b <= 10; $b++){
//         echo $a ."." . $b . "<br>"; 
//     }
// }
/* $month_Number = 123;

     switch($month_Number){
         case 1:
            echo "January";
        break;
        case 2:
            echo "Feb";
        break;
        case 3:
            echo "Mar";
        break;
        case 4:
            echo "Apr";
        break;
        case 5:
            echo "May";
        break;
        case 6:
            echo "Jun";
        break;
        case 7:
            echo "Jul";
        break;
        case 8:
            echo "Agu";
        break;
        case 9:
            echo "Spt";
        break;
        case 10:
            echo "Oct";
        break;
        case 11:
            echo "Nov";
        break;
        case 12:
            echo "Dec";
        break;
        default:
            echo "Check for the correct Month Number";
        break;
        
     } */
     
//    $birth_month = 13;

//    if($birth_month == 2 || $birth_month == 3 || $birth_month == 4){
//        echo " Your birth is on Fall";

//    }elseif($birth_month == 5 || $birth_month == 6 || $birth_month == 7){

//     echo " Your birth in on Spring ";
//    }elseif($birth_month == 8 || $birth_month == 9 || $birth_month == 10){
//     echo " Your birth in on Summer ";


//    }elseif($birth_month == 11 || $birth_month == 12 || $birth_month == 1){

//     echo " Your birth in on Winter ";

//    }else{
//        echo " check your Birth Month";
//    }
//    $a = 5;
//    $b = 6;
//    $c = $a + $b;
//    $d = $a - $b;

//    $b -= 3;
// //    echo $b;
//    echo "<br>";
//    $c += $a;
//    echo $c;

//    echo "<br>";
//    $first_name = 'Fatimah';
//    $last_name = 'Maohammed';

//    $full_name = $first_name . " " . $last_name;

//    echo $full_name;

//    echo "<br>";
//    echo "<br>";
//    echo "<br>";
//    if($a < $b ){
//        echo "A is smaller than B";
//    }else{
//        echo "Else";
//    }
    ?>
