<?php
ini_set('memory_limit', '1024M');
//Simple Program To Test Execution Time Of PHP
$startTime = microtime(true);

$numbers = range(1, 10000000);

$sum = 0;

foreach( $numbers as $number ){
    $sum += $number;
}

unset($numbers);

$endTime = microtime(true);

$executionTime = ($endTime - $startTime);

$executionTime *= 1000;

echo "PHP => Execution Time : $executionTime miliseconds" 

?>