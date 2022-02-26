<?php
  /* if statement */
 $num=18;
 $gender="male";
 if ($num>=18 && $num<=40){
   if ($gender== "male" || $gender =="female") {
      echo "You are ready for marray";
   }
   else {
       echo'sorry!';
   }
}
elseif ($num<=18) {
    echo 'not ready';
}
elseif ($num>=40) {
    echo 'boyos ses!!';
}
else{
    echo "sorry!try next";
}

echo"<br>";
//tinti shonkar modde boro

$num1=784245;
$num2=7514235552;
$num3=52555;
if ($num1>$num2 && $num1>$num3) {
    echo"NUM 1 is big";
}
elseif ($num2>$num1 && $num2>$num3) {
    echo"NUM 2 is big";
}
else{
    echo'NUM 3 is big';
}
echo"<br>";
//ture vallidation
$age='25';
$gender="female";
$Marital_status="married";
if ($age>=18 && $gender=="male") {
    if ($Marital_status=="married") {
        echo"Welcome to our cuple group";
    }
    else{
        echo"welcome to our singles groupe";
    }
}
elseif($age>=24 && $gender=='female'){
    if ($Marital_status=='married') {
        echo'welcome to our cuple group';
    }
    else {
        echo 'sorry you are not ready for the tour due to un merrey';
    }
}
else {
    echo'you are not ready for the ture';
}
echo"<br>";
/* switch case */
 $num=51;

 switch($num){
     case($num>=80):
         echo"you got golden a+";
     break;
     
     case($num>=75):
         echo"you got  a";
     break;
     
     case($num>=70):
         echo"you got  a-";
     break;   
     
     case($num>=65):
         echo"you got b+";
     break;
     
     case($num>=60):
         echo"you got b";
     break;
     
     case($num>=55):
         echo"you got b-";
     break;
     
     case($num>=50):
         echo"you got c+";
     break;
     
     case($num>=45):
         echo"you got c";
     break;
     
     case($num>=40):
         echo"you got d";
     break;
     
     case($num<40):
         echo"you are faild";
     break;
     
     default:
      echo"plese enter a number";
      break;
     }
     echo"<br>";

     //increment dicriment
 $num5=220;
 $num5 +=1;

 echo $num5;

//  $num5 +=1;
//  echo $num5;
//    $num5++;
// echo $num5;
// $num5++;
// echo $num5;
// $num5--;
// echo $num5;
echo"<br>";
$name="mark";
 echo $name .=" taylor";
 echo"<br>";

 /*loop */
  //1.for
  //2.while
  //3.do while
//  for(stat1;stat;stat3){

//  }
//  for(startpoint;condition;Flow){

//  }
 for($start =1;$start<=50;$start +=2){
  echo $start;
  echo '<br>';
 }


  $year=383;
// //  while(con){
// //     main tetx
// //  }
  while($year >= 200){
      echo $year;
      echo '<br>';
      $year--;
  }
//   while($year <= 3000){
//       echo $year;
//       echo '<br>';
//       $year +=2;
//   }
echo '<br>';
///do while
$age=20;//variable
do {
   echo"$age";//last peogram
   $age-=1;//flow
   echo '<br>';
} 
while ($age >= 0);//conditin
?>