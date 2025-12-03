<?php
part1();
function part1()
{
    $answer = 0;
    $input = explode(",", file_get_contents("test.txt"));
    foreach ($input as $line) {
        $numbers = explode("-", $line);
        for ($i = $numbers[0]; $i <= $numbers[1]; $i++) {
            if (strlen($i) % 2 == 0) {
                $halves = str_split($i, (strlen($i) / 2));
                if ($halves[0] == $halves[1]) {
                    $answer += $i;
                }
            }
        }

    }
    echo $answer;
}
function part2()
{
    $input = explode(",", file_get_contents("test.txt"));
    $answer = 0;
    foreach ($input as $line) {
        $numbers = explode("-", $line);
        for ($i = $numbers[0]; $i <= $numbers[1]; $i++) {
            $halfStringSize = floor(strlen($i) / 2);
            for ($j = $halfStringSize; $j > 0; $j--) {
                $splitnumbers = str_split($i, $j);
                if (count(array_unique($splitnumbers, SORT_REGULAR)) === 1) {
                    $answer += $i;
                    break;
                }
            }
        }
    }
    echo $answer;
}