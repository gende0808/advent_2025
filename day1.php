<?php

function part1(){
    $input = explode(PHP_EOL, file_get_contents("test.txt"));
    $needle_position = 50;
    $counter = 0;
    foreach($input as $line){
        $value = str_replace(["L","R"], ["-",""],$line);
        $needle_position += intval($value);
        $needle_position = $needle_position % 100;
        $counter += ($needle_position == 0) ? 1 : 0;
    }
    echo $counter;
}
function part2()
{
    $input = explode(PHP_EOL, file_get_contents("test.txt"));
    $needle_position = 50;
    $counter = 0;
    foreach ($input as $line) {
        $value = str_replace(["L", "R"], ["-", ""], $line);
        for ($i = 0; $i < abs(intval($value)); $i++) {
            $needle_position += ($value < 0) ? -1 : 1;
            $needle_position = $needle_position % 100;
            $counter += ($needle_position == 0) ? 1 : 0;
        }
    }
    echo $counter;
}