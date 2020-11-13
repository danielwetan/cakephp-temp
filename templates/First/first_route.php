<?php 

echo $this->Html->link("First Route", [
  "controller" => "First",
  "action" => "firstRoute"
]);

echo "</br>";

echo $this->Html->link("Second Route", "/second-route");

echo "</br>";

echo $this->Html->link("First Route", [
  "_name" => "first_route" // we define _name in routes.php
]);

?>