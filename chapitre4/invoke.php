<?php
  class Dog {
    public function __invoke() {
      echo "Bark";
    }
  }
  $sparky=new Dog();
  $sparky();
 ?>
