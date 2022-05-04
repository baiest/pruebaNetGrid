<?php

function split_sets($array)
{
  #Convertir arreglo a string
  $str = implode("", $array);

  #Verificar vacios inicio y fin
  if ($array[0] == 0) $str = "0" . $str;
  if ($array[count($array) - 1] == 0) $str = $str . "0";

  #Remplazar vacios con X
  $new_str = str_replace("00", "0X0", $str);
  $sets = explode("0", $new_str);

  #Limpiar inicio y fin del arreglo
  if (!$sets[0]) array_shift($sets);
  if (!$sets[count($sets) - 1]) array_pop($sets);

  foreach ($sets as $items) {
    $newArray = str_split($items);
    sort($newArray);
    echo implode("", $newArray) . " ";
  }
}
