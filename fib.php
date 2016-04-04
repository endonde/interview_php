<?php
/**
 * Create a function that will compute Fibonacci using recursion.
 */


$number = $argv[1];

function fib($x)
{
}

function run($x)
{
  $fib_x = fib($x);
  echo "Fibonacci for $x is $fib_x\n";
}


run($number);
