<?php
  $numbers = $_GET['numbers'];
  $total = 0;

  foreach($numbers as $number){
    $total += $number;
  }
?>

<!DOCTYPE html>
<html>
  <body>
    <h1><?= "Total = $total" ?></h1>
  </body>
</html>
