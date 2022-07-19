<?php
if(isset($_POST['no1']) && isset($_POST['no2']) && !empty($_POST['no1']) && !empty($_POST['no2'])){

// empty($x)
    $no1 = $_POST['no1'];
    //  echo"<br>";
    $no2 = $_POST['no2'];
    // echo"<br> <br>";

    // first code 
    $arthematic_operation = $_POST['arth_operation'];
    echo $arthematic_operation . "<br>";

    if (is_int($no1) && is_int($no2)){

    


        // Using if Condition

        // if($arthematic_operation == 'sum_operation') {
        //     $cal_val = $no1 + $no2;
        // }else if($arthematic_operation == 'sub_operation') {
        //     $cal_val = $no1 - $no2;
        // }else if($arthematic_operation == 'multiple_operation') {
        //     $cal_val = $no1 * $no2;
        // }else {
        //     $cal_val = $no1 / $no2;
        // }



        switch ($arthematic_operation){
            case 'sum_operation': 
                $cal_val = $no1 + $no2;
                break;
            case 'sub_operation':
                $cal_val = $no1 - $no2;
                break;
            case 'multiple_operation' :
                $cal_val = $no1 * $no2;
                break;
            default:
            $cal_val = $no1 / $no2;
            break;

        }

        echo $cal_val;
    }else{
        echo "You Should Enter Numeric Values";
    }

}else{
    echo 'Please enter your number.';
}
?>