<?php


$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];



if ($first_num == NULL || $second_num == NULL) {
   echo "Value nai";
}
elseif (isset($_POST["add"])) {
  echo $mot=$first_num+$second_num;
}
elseif (isset($_POST["sub"])) {
  echo $mot=$first_num-$second_num;
}
elseif (isset($_POST["mul"])) {
  echo $mot=$first_num*$second_num;
}
elseif (isset($_POST["div"])) {
  echo $mot=$first_num/$second_num;
}


 


?>