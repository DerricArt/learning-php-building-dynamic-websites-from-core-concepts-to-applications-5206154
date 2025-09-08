<?php
$colors = ['red', 'green', 'blue', 'yellow'];

foreach ($colors as $color) {
  echo "$color \n";
}

$home_towns = [
  'Joe' => 'Middletown, NY',
  'Erin' => 'West Chester, PA',
  'Dave' => 'Exton, PA',
  'Brian' => 'Grand Rapids, MI',
];

foreach ($home_towns as $name => $town) {
  echo "$name is from $town \n";
}

$names = [
  'Derric',
  'Resultay',
  'Bauzon'
];

foreach ($names as $pangalan) {
  echo "$pangalan is my name.\n";
}

// fibonacci sequence
$fibonacci = array();
for ($i = 0; $i < 100; $i++) {
  if ($i == 0) {
    $fibonacci[$i] = 1;
  } else if ($i == 1) {
    $fibonacci[$i] = 1;
  } else {
    $checker = $fibonacci[$i - 2] + $fibonacci[$i - 1];
    if ($checker > 200) {
      break;
    }
    $fibonacci[$i] = $checker;
  }
}

print_r($fibonacci);