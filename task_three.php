<?php


function getResult($num1, $num2, $num3 = 5) {

    return $num1 * $num2 * $num3;


}

$answer = getResult(2, 2);

echo $answer;


echo "<pre>";
var_dump($_SERVER);
echo "</pre>"

?>