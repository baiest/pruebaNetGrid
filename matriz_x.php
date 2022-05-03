<?php
function matrizX($num)
{
  if ($num == 0) {
    echo "ERROR";
    return;
  }
  $row = str_repeat("_", $num);
  for ($i = 0; $i < $num; $i++) {
    $newRow = $row;
    $newRow[$i] = "X";
    $newRow[$num - ($i + 1)] = "X";
    echo $newRow . "\n";
  }
}
