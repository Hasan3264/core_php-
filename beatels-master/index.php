<?php

echo'halow world'," jass";
/*php output*/
  //echo
  //print
  echo "<br>";

  /*php variable*/
  $hasan="ami";
  echo $hasan;
  echo "<br>";
  $jas_jho='hjoo';
  echo $jas_jho;
  echo "<br>";
  /*php funtion*/

  //fun_name(){};
//  and call fintion

 /*php constant*/
 //define(pera1,perea2);
 //define(name(all caps),valu);
 define('USERNAME','hassan');

 echo USERNAME;
 echo "<br>";

  /*php concate string/text*/

  $h="hasss";
  $j="hhhhhg";

  echo $hk = $h . $j;
  echo "<br>";
  echo $hk;
  echo "<br>";
  /*php sting funtion*/

  $hass=" This  word (Peragraph) may be misspelled. Below you can find the suggested words which we believe are the correct spellings for what you were searching for.  ";
  echo $hass;
  echo "<br>";
  echo strlen($hass);//charecters with space
  echo "<br>";
  echo str_word_count($hass);//total word
  echo "<br>";
  echo strlen(ltrim($hass));//space remobe
  echo "<br>";
  echo strlen(trim($hass));//space remobe
  echo "<br>";
  echo strlen(rtrim($hass));//space remobee
  echo "<br>";

  /*php sting funtion*/

  $jok="lorem kjoffo fvjsdofewfje sd dsfjdoifjewfjojo dfjodfjewjfojodsjfewjfwe";
  echo strrev($jok);
  echo "<br>";


/*php case transform*/
    echo strtoupper($jok);
    echo "<br>";
    echo strtolower($jok);
    echo "<br>";
    echo ($jok);
    echo "<br>";
    echo str_replace("kjoffo","lkijh",$jok);//replase word

 echo "<br>";

    /*php arethmatic operation*/
    $num1=45;
    $num2=52;
    $add=$num1+$num2;
    echo $add;
    echo "<br>";
  /*php funtion create*/
  
   function subtract($num11,$num22){
       echo $subtr=$num11-$num22;
   };
   subtract(45,20);
    /*php use extra cottetion*/
    $namm="hallo'i am hear";
    echo $namm;
?>