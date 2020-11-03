<?php

function bubbleSort(&$array, $n)
{
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 1; $j < $n-$i; $j++) {
            // 隣接要素を比較し大小が逆なら入替える
            if ($array[$j-1] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1] = $temp;
                $count++;
            }
        }
    }


    return $count;
}


$n = intval(trim(fgets(STDIN)));
$line_input = fgets(STDIN);
$array = explode(" ", $line_input);
$count = bubbleSort($array, $n);

for ($i = 0;$i < $n;$i++) {
    if ($i > 0) {
        echo " ";
    }
    printf("%d", $array[$i]);
}
echo "\n";
echo $count;
echo "\n";
/////////////////////
