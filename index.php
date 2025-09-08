<?php
$names = ['Joe', 'Erin', 'Teresa', 'Louis', 'Abigail'];

usort($names, function ($a, $b) {
  return $a[1] <=> $b[1];
});

print_r($names);


// creating and using a class
class Person {
  var $name;
  var $age;
  var $birthday = false;

  function __construct($firstname, $age){
    $this->name = $firstname;
    $this->age = $age;

  }

  public function get_name() {
    return $this->name;
  }

  public function get_age() {
    return $this->age;
  }

  public function set_birthday( $b ) {
    $this->birthday = $b;
    $this->update_age();
  }

  private function update_age() {
    $this->age = ($this->birthday) ? ++$this->age : $this->age;
  }
}

$joe = new Person('Joe', 30);
echo $joe->get_name() . "\n";
echo $joe->get_age() . "\n";
$joe->set_birthday(true);

echo $joe->get_age();

echo "\n";
include_once 'learningPHP.php';
function double($a) {
  return $a + 2;
}

// 7 using the double function inside this file
echo double(5) . "\n";
// 10 using the double function inside the learningPHP file
echo learningPHP\double(5);