<?php
    function myCalculator($num1, $operand, $num2){
        $result;
    
    if ($operand == "add") {
        $result = $num1 + $num2;
    }elseif ($operand == "subtract") {
        $result = $num1 - $num2;
    }elseif ($operand == "divide") {
        $result = $num1 / $num2;
    }elseif ($operand == "multiply") {
        $result = $num1 * $num2;
    }else {
        echo "There's an error";
    }
    return $result;

}

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operand = $_POST["operand"];

echo "Result: " . myCalculator($num1, $operand,$num2 );
?>