<?php
/**
 * Given an array of unsorted numbers, create a sorted linked list (in ascending order).
 *
 */

require 'node.php';

$numbers = array_slice($argv, 1);


function append_item($root, $value)
{
}

function create_sorted_linked_list($numbers)
{
  return null;
}

function run($numbers)
{
  $root = create_sorted_linked_list($numbers);
  $node = $root;
  while ($node) {
    echo "Node: $node->value\n";
    $node = $node->right;
  }
}

run($numbers);
