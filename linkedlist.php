<?php
/**
 * Given an array of numbers, create a simple unsorted linked list.
 */

require 'node.php';

$numbers = array_slice($argv, 1);


function append_item($root, $value)
{
  $node = new Node($value, null);
  if (!$root) {
    return $node;
  }
  $tail = $root;
  while ($tail->right) {
    $tail = $tail->right;
  }
  $tail->right = $node;
  return $root;
}

function create_linked_list($numbers)
{
  $root = null;
  foreach ($numbers as $number) {
    $root = append_item($root, $number);
  }
  return $root;
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
