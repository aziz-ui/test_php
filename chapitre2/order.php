<?php

$str = 'Your order total is: ';

$order = 20;

$additional = 10;

$orderTotal = 0;

$complete = false;

//add additional items to order

$orderTotal = $order + $additional;

//if order is equal to 25

if ($orderTotal >= 25) {
  $complete = true;

//display the $str and add the orderTotal

  echo $str . $orderTotal;
};
?>
