<?php
/**
 * Create a function that will compute Fibonacci using recursion.
 */


$number = $argv[1];

function fib($x)
{
  if ($x <= 0) {
    return 0;
  }

  if ($x <= 2) {
    return 2;
  }

  return fib($x - 1) + fib($x - 2);
}

function run($x)
{
  $fib_x = fib($x);
  echo "Fibonacci for $x is $fib_x\n";
}


run($number);
