<?php
/**
 * Given an array of numbers, create a simple unsorted linked list.
 */

require 'node.php';

$numbers = array_slice($argv, 1);


function append_item($root, $value)
{
}

function create_linked_list($numbers)
{
  return null;
}

function run($numbers)
{
  $root = create_linked_list($numbers);
  $node = $root;
  while ($node) {
    echo "Node: $node->value\n";
    $node = $node->right;
  }
}


run($numbers);
