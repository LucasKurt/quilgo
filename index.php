<?php

function SeculoAno($ano) {
  return "Ano " . $ano . " = século " . ceil($ano/100);
}

function Primo($inicial,$final) {
  $primo = [];
  for ($i=$inicial + 1; $i < $final ; $i++) {
    $e_primo = true;
    for ($j=2; $j < $i ; $j++) {
      if ($i % $j == 0) {
        $e_primo = false;
        break;
      } 
    }
    if ($e_primo) {
      array_push($primo, $i);
    } 
  }
  return $primo;
}

function SequenciaCrescente($array) {
  for ($i=0; $i < count($array); $i++) { 
    $arr = [];
    for ($j=0; $j < count($array); $j++) {
      if ($i == $j) {
        continue;
      }
      array_push($arr,$array[$j]);
    }
    $str1 = implode(",",$arr);
    sort($arr);
    $str2 = implode(",",$arr);
    if($str1 == $str2) {
      return "true";
    }
  }
  return "false";
}

//echo SeculoAno(2008);

//print_r(Primo(1,29));

//echo SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);

$arr = [];
for ($i=0; $i < 20; $i++) { 
  $arr[$i] = rand(1,10);  
}

$arr = (array_count_values($arr));

$str =  "Os números que não se repetem são";

$test = false;

foreach ($arr as $key => $value) {
  if ($value == 1) {
    $test = true;
    $str .= " $key e";
  }
}

echo $test ?substr($str, 0, -2) : $str;
