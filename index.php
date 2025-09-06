<?php

echo 'Hello World!';

/* Note for code below: 
  This is not recommended */
?>

<?= 'Hello World!' ?>

<?php

print 'Hello World!';

// HEREDOC
// This is a fkng comment where the computer ignores, this mainly
// used to convey message to your co-dev.
echo <<<HERE

Hello World, 
This is Joe. 
I hope you like PHP!
My name is Derric B. Resultay

HERE;


$name = "Derric";

echo "Hello, $name ";

echo 'Hello, ' . $name . "!";