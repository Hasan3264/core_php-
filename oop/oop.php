<?php
  class Car{
      function forword ($car_name = "defult"){
          return "$car_name is forwording <br>";
      }
      function backword($car_name = "defult"){
          return "$car_name is reversing <br>";
      }
  }

  $bmw= new Car;

  echo $bmw-> forword("bmw");
  echo $bmw-> backword();

?>