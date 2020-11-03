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
function insertionSort($array, $n)
{
    for ($i = 1;$i < $n;$i++) {
        $v = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $v) {
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $v;
        trace($array, $n);
        // print_r($array);
    }
}

$n = intval(trim(fgets(STDIN)));

// 標準入力からの入力値を変数に代入します
$line_input = fgets(STDIN);
// 取得した入力値を半角スペースで分解します
$array = explode(" ", $line_input);
// 単一行の入力の場合はこれだけで各入力値が配列の要素として使えます
print_r($array);
trace($array, $n);
insertionSort($array, $n);
/////////////////////////////////////////
