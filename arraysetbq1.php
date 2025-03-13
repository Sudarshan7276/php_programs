<?php
  $cars=array(
    array("volvo",22,18),
    array("BMW",15,13),
    array("Toyota",12,10),
    array("Ford",10,8),
    array("Honda",8,6)
  );
  echo $cars[0][1];
  unset($cars[0][1]);
  print_r($cars);
?>
