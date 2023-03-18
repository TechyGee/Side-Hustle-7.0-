<?php

$eligableAge = 18;
$age = 13;
$card = 'pvc';
$ward = 020;

if ($age >= 18 && $card === 'pvc' && $ward === 020) {

    echo 'Voter is eligible to vote';

} else {
    echo 'Voter is uneligable to vote </br>';
    echo 'Please kindly check for complete detials </br> 1.' . $eligableAge,' Years and above</br> 2. ' . $card,' Availablity </br> 3. ward confirmation';
}

?>