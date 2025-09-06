<?php

//$colors = array();
$colors = array("Red", "Green", "Blue", "Yellow");
// prints the array
print_r($colors);

echo $colors[2];

// This concatenates the word 'Purple' inside an array
$colors[] = 'Purple';

// what will happen if I try to assign new value to existing index with value
$colors[0] = "Black"; 

// Prints the array
print_r($colors);
// This is an error/warning, this is like telling the user to convert
// an array into string
echo $colors;

$home_towns = array(
  'Joe' => 'Middletown, NY',
  'Erin' => 'West Chester, PA',
  'Dave' => 'Exton, PA',
  'Brian' => 'Grand Rapids, MI',
);

print_r($home_towns);

echo $home_towns['Erin'] . "\n\n";

$brothers = [
  'joe' => array(
    'age' => 39,
    'job' => 'Podcaster',
    'state' => 'PA',
  ),
  'phil' => array(
    'age' => 37,
    'job' => 'photographer',
    'state' => 'NY',
  ),
  'mike' => array(
    'age' => 36,
    'job' => 'logistics',
    'state' => 'FL',
  ),
  'rob' => array(
    'age' => 34,
    'job' => 'manager',
    'state' => 'FL',
  ),
];

echo $brothers['phil']['age'];

print_r($brothers);
