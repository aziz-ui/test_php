<?php

$stack = array("black", "red", "green", "purple");

unset($stack[1]);

//remove red as this is the key matching 1

print_r($stack);

?>
