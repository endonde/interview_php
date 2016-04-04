<?php
/**
 * Create a function that can compute Fibonacci(100) in less than 1 second.
 */


$number = $argv[1];

$lru = [];
function fast_fib($x)
{
}

function run($x)
{
  $fib_x = fast_fib($x);
  echo "Fibonacci for $x is $fib_x\n";
}

run($number);
