<?php

$n = intval(trim(fgets(STDIN)));

for ($i = 0;$i < $n;$i++) {
    $a[$i] = intval(trim(fgets(STDIN)));
}
$maxv = $a[1]-$a[0];
for ($j = 1;$j < $n;$j++) {
    for ($i = 0;$i < $n;$i++) {
        if ($j > $i) {
            $maxv = max($maxv, ($a[$j]-$a[$i]));
        }
    }
}
echo $maxv;
