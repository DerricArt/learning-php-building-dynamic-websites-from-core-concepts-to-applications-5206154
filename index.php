<?php
$name = "Teresa"; // Heading 1
$city = "NYC";
$movie = "Moana 2"; //Italics
$friends = "Lou and Abby"; //Bold
$candy = "Jelly Beans";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Challenge</title>
</head>

<body>
  <h1>
    <?php echo $name ?>
  </h1>
  <p>I live in <?php echo $city ?>, which is often called as city of dreams, where apex predator lingers and strive to conquer the world.</p>
  <p>After taking a break from a work, I've decided to watch <i><?php echo $movie ?></i> to unwind and just enjoy my leisure time. I'm with <?php echo $friends ?>.</p>
  <p>Of course, snacks is there to keep us company when we do not know what to do with them but unfortunately <?php echo $candy ?> is the only thing they allow inside the cinema.</p>


</body>

</html>