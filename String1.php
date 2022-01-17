<?php
$name = "Md. Rasel Opu";

echo " My name is " . $name . "<br>";

//Finding number of words in a string

echo str_word_count("My name is Md. Rasel Opu") . "<br>";

echo str_word_count("a b c,d, ef ggh...         ij?")."<br>"; //Here number of words are [a=1 b=2 c,=3 d,=4 ef=5 ggh...=6  ij?=7] 

//Finding the Position Index of a given string

echo strpos("My name is Md. Rasel Opu","Rasel") . "<br>"; 


//Repeating a string

echo str_repeat($name."<br>", 10);

//Replacing a string and finding the number of replacements

echo str_replace("Opu", "Rasel", "I'm Opu. Opu is my first name."."<br>",$num);

 echo $num."<br>";


 //Shuffling charachters of a string
 

 echo str_shuffle($name)."<br>";

 //Comparing if the value of two strings are equal or not

 echo strcasecmp($name,"md. rasel opu")."<br>";  //returns 0,Bcz value of both strings are same
  echo strcasecmp($name,"md. rasel")."<br>";  //returns value greater than 0,Bcz value of the string 1 is greater than string 2
 echo strcasecmp($name,"Md. RaSel OPu"); //returns value less than 0,Bcz value of the string 1 is lesser than string 2


?>