<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];

    $operation=$_POST['gridRadios'];

    $result='';
if(is_numeric($num1) && is_numeric($num2)) {
    switch($operation) {
        case 'add':
            $result=$num1+$num2;
            break;
        case 'subtract':
            $result=$num1-$num2;
            break;
        case 'multiply':
            $result=$num1*$num2;
            break;
        case 'divide':
            $result=$num1/$num2;
            break;
        default:
            $result='Invalid Operation';
    }
    echo "The input is : $result";
} else {
   echo "please enter valid number";
}
}
?>