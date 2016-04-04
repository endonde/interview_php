<?php
/**
 * Create a function that can compute Fibonacci(100) in less than 1 second.
 */


$number = $argv[1];

$lru = [];
function fast_fib($x)
{
  global $lru;
  if (array_key_exists($x, $lru)) {
    return $lru[$x];
  }

  if ($x <= 0) {
    $result = 0;
  }
  elseif ($x <= 2) {
    $result = 2;
  }
  else {
    $result = fast_fib($x - 1) + fast_fib($x - 2);
  }

  $lru[$x] = $result;
  return $result;
}

function run($x)
{
  $fib_x = fast_fib($x);
  echo "Fibonacci for $x is $fib_x\n";
}

run($number);
