<?php

/**
 * A simple Node class that can be used for linked lists.
 */

class Node
{
  public $value = 0;
  public $right = null;

  public function __construct($value, $right)
  {
    $this->value = $value;
    $this->right = $right;
  }
}
