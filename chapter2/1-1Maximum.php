<?php

$n = intval(trim(fgets(STDIN)));

for ($i = 0;$i < $n;$i++) {
    echo "n".$n.PHP_EOL;
    echo "i".$i.PHP_EOL;

    $a[$i] = intval(trim(fgets(STDIN)));
}
$maxv = -2000000000;
$minv = $a[0];
for ($i = 1;$i < $n;$i++) {
    $maxv = max($maxv, $a[$i]-$minv);
    $minv = min($minv, $a[$i]);
}
echo $maxv;
