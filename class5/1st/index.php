<?php

$latter="p";
switch ($latter) {
    case 'a':
         echo"your latter is vowel";
        break;
    case 'o':
         echo"your latter is vowel";
        break;
    case 'I':
         echo"your latter is vowel";
        break;
    case 'e':
         echo"your latter is vowel";
        break;
    case 'u':
         echo"your latter is vowel";
        break;
    default:
        echo"consonent";
        break;
}
echo'<br>';
$vowel= array('a','o','i','u','e');
$latter2='e';

var_dump($vowel);
switch ($latter2) {
    case (in_array($latter2,$vowel)):
        echo'This is vowel';
        break;
    
    default:
    echo'This is consunant';
        break;
}

$num=array(
    array(1,2,3,4),
    52,
    array(5,6,678,),
    256,
    array(24,465,646),
);
foreach($num as $val){
    if(!is_array($val)){
        echo $val.'<br>';
    }
}

$cars = array('1','2','4','5');

function totalsize($cars){
    $counter=0;
   foreach($cars as $val){
       $counter++;
   }
   echo $counter;
}

totalsize($cars);
echo"<br>";
$your_name="m#a#h#m#u#d#u#l#h#a#s#a#n";
print_r( explode("#",$your_name));
echo"<br>";
$total_vowel=0;

$after_exlode=( explode("#",$your_name));;


foreach ($after_exlode as $val) {
    switch ($val) {
        case 'a':
            $total_vowel++;
            break;
        case 'u':
            $total_vowel++;
            break;
        case 'e':
            $total_vowel++;
            break;
        case 'i':
            $total_vowel++;
            break;
        case 'o':
            $total_vowel++;
            break;
        
        default:
            
            break;
    }

}
echo $total_vowel;
echo'<br>';
echo count($after_exlode)- $total_vowel;

echo'<br>';


print_r($_SERVER);
?>