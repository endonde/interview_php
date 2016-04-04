<?php
/**
 * Create a function that determines whether a string (needle) is a substring of another (haystack).
 * Function must return TRUE or FALSE.
 */


$command_params = array_slice($argv, 1);
$haystack = $command_params[0];
$sub_strings = array_slice($command_params, 1);

function is_substring($haystack, $needle)
{
  $j = 0;
  for ($i = 0; $i < strlen($haystack) - strlen($needle) + 1; ++$i) {
    while ($needle[$j] == $haystack[$i + $j]) {
      $j ++;
      if ($j == strlen($needle)) {
        return true;
      }
    }
  }

  return false;
}

function run($haystack, $sub_strings)
{
  echo "About to test haystack: $haystack\n";
  foreach ($sub_strings as $sub_string) {
    echo str_repeat('–', 50) . "\n";
    echo "Testing sub_string: $sub_string\n";
    if (is_substring($haystack, $sub_string)) {
      echo "Is Substring!\n";
    }
    else {
      echo "Is NOT Substring\n";
    }
  }
}

run($haystack, $sub_strings);
