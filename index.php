<?php
$turtle = 'Leo';
$bandana = '';

switch ($turtle) {
  case 'Leo':
    $bandana = 'blue';
    break;
  case 'Raph':
    $bandana = 'red';
    break;
  case 'Mike':
    $bandana = 'orange';
    break;
  case 'Don':
    $bandana = 'purple';
    break;
  default:
    $bandana = 'red';
}

echo "$bandana \n";

$name = match ($turtle) {
  'Leo' => 'Blue',
  'Raph' => 'Red',
  'Mike' => 'Orange',
  'Don' => 'Purple',
  default => 'Red'
};

echo $name;
