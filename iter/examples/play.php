<?php
require __DIR__ . '/../../vendor/autoload.php';

$start = microtime(true);

$nums = iter\range(1, pow(10, 6), 1);
$i = 0;
foreach ($nums as $num) $i++;
dump($i);
echo
"\nMemory: ", (memory_get_peak_usage(true) / pow(2, 10)), "kB consumed.\n",
"Took: ", (microtime(true) - $start), ' seconds.';
