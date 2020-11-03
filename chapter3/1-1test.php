<?php

function trace($array, $n)
{
    for ($i = 0;$i < $n;$i++) {
        if ($i > 0) {
            echo " ";
        }
        printf("%d", $array[$i]);
    }
    printf("\n");
}

function insertion($array, $n)
{
    for ($i = 1;$i < $n;$i++) {
        $target = $array[$i];
        $tempindex = $i-1;
        while ($tempindex >= 0 && $array[$tempindex] > $target) {
            $array[$tempindex+1] = $array[$tempindex];
            $tempindex--;
        }
        $array[$tempindex+1] = $target;
        trace($array, $n);
    }
}

$n = intval(trim(fgets(STDIN)));
$input = fgets(STDIN);
$array = explode(" ", $input);
insertion($array, $n);
