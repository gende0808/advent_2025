<?php
$input = explode(PHP_EOL, file_get_contents("test.txt"));
$answer = 0;
foreach ($input as $key => $batteryRow) {
    $batteryArray = str_split($batteryRow);
    $highestFirstNumberIndex = array_search(max(array_slice($batteryArray, 0, -1)), array_slice($batteryArray, 0, -1));
    $highestSecondNumber = max(array_slice($batteryArray,$highestFirstNumberIndex+1));
    $answer += $batteryArray[$highestFirstNumberIndex].$highestSecondNumber;
}
echo $answer;