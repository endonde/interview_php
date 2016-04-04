<?php
/**
 * Given an array of unsorted numbers, create a sorted linked list (in ascending order).
 *
 */

require 'node.php';

$numbers = array_slice($argv, 1);


function append_item($root, $value)
{
  $node = new Node($value, null);
  if (!$root) {
    return $node;
  }

  if ($root->value > $value) {
    $node->right = $root;
    return $node;
  }

  $prev = null;
  $temp = $root;
  while ($temp && $temp->value < $value) {
    $prev = $temp;
    $temp = $temp->right;
  }

  $prev->right = $node;
  $node->right = $temp;
  return $root;
}

function create_sorted_linked_list($numbers)
{
  $root = null;
  foreach ($numbers as $number) {
    $root = append_item($root, $number);
  }
  return $root;
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
