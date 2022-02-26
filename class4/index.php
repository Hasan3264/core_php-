<?php
/**array */
$ami= array("freez mechanic","car drive","air condition mechanic","web developer","web designer","diploma engieener");
print_r($ami);
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo $ami[4];

/**index manipulation *///index aray
$ami= array( 100=> "freez mechanic","car drive","air condition mechanic","web developer","web designer",102=>"diploma engieener","cooker");//index create
print_r($ami);
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

//associative array
$ami2= array(
    "Hassan" =>"freez mechanic",   "Hassan2nd" => "car drive",
    "air condition mechanic","web developer","web designer","diploma engieener","cooker");
print_r($ami2);
echo"<br>";
echo"<br>";
echo"<br>";
echo $ami2["Hassan"];
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo $ami2["Hassan2nd"]; 
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
//maltidimentional  array
$hasanj=array($ami,$ami2);
print_r($hasanj);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$has=array(
   "g"=> array(1,2,3,4),
   "j"=> array(2,4,6,8),
);
print_r($has);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
//array funtion
$ami2= array(
    "Hassan" =>"freez mechanic",   "Hassan2nd" => "car drive",
    "air condition mechanic","web developer","web designer","diploma engieener","cooker");

echo count($ami2);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo sizeof($ami2);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
//insart a new value in array

array_push($ami2,"jony");
print_r($ami2);
echo '<br>';
array_unshift($ami2,"papi");
print_r($ami2);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//remove a value in array
array_shift($ami2);
print_r($ami2);
echo '<br>';
$hhh=array(1,4,3,2,5,67);
print_r($hhh);
array_pop($hhh);
print_r($hhh);
echo '<br>';
//arrethmatich opperation
sort($hhh);
print_r($hhh);
echo '<br>';
//change small letter to capital
print_r(array_change_key_case($ami2,CASE_UPPER));
   ////logic
   $jas=array(1,2,3,4,5,6,7,8,9);
   print_r($jas);
   echo '<br>';
   $last_count= count($jas) -1;
   
   for($start=0; $start <= $last_count; $start++){
       echo $jas[$start].'<br>';
   }
   echo '<br>';
   
   $jass=array(1,2,3,"one"=> 4,5,6,7,8,9);
   foreach($jass as $index => $stats){
       echo 'your value is' . $stats.'<br>';
       echo 'your index is' . $index.'<br>';
   }
?>