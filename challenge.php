<?php

$user_status = rand(0, 2);

$message = match ($user_status) {
  0 => "\nUser logged out",
  1 => "\nUser logged in",
  default => "\nNothing happened."
};

echo $message;

$a = '5';

echo "\n";
echo $a + '5';