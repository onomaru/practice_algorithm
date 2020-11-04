<?php

function selectionSort(&$array, $n)
{
    $count = 0;
    for ($i = 0;$i < $n-1;$i++) {
        $minj = $i;
        for ($j = $i;$j < $n;$j++) {
            if ($array[$minj] > $array[$j]) {
                $minj = $j;
            }
        }
        $t = $array[$i];
        $array[$i] = $array[$minj];
        $array[$minj] = $t;
        if ($i != $minj) {
            $count += 1;
        }
    }
    return $count;
}

$n = intval(trim(fgets(STDIN)));
$line_input = fgets(STDIN);
$array = explode(" ", $line_input);
$count = selectionSort($array, $n);

for ($i = 0;$i < $n;$i++) {
    if ($i > 0) {
        echo " ";
    }
    printf("%d", $array[$i]);
}
echo "\n";
echo $count;
echo "\n";
