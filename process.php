<?php

$num_one = $_POST['number_one'];
$number_two = $_POST['number_two'];

$anser = $num_one + $number_two

//echo $anser
header ("location:summation.php?number=".$anser);

?>