<?php

$size = 2 ** 17;

$startTime = microtime(true);

$array = array();
for ($key = 0, $maxKey = ($size - 1) * $size; $key <= $maxKey; $key += $size) {
  $array[$key] = 0;
}

$endTime = microtime(true);

echo 'Inserting ', $size, ' elements took ', $endTime - $startTime, ' seconds', "\n";
