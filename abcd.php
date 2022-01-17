   <?php
//Output of strings and Concatenation of Strings


$fullName="Md. Rasel Opu";
$fName="Rasel";
$lName="Opu";

echo $fullName."</br>";
echo strrev($fullName)."</br>";
echo strlen($fullName)."</br>";
echo $fName."</br>";
echo $lName."</br>";
echo $fName." ".$lName."</br>";

echo"</br>";


//Using Operators


$n1=10.5;
$n2=15;
$n3=-123;
echo $n1+$n2."</br>";
echo $n1-$n2."</br>";
echo $n1*$n2."</br>";
echo $n1/$n2."</br>";
echo $n1**$n2."</br>";

echo"</br>";



//Convertion of Data type and Application of Round,Ceil,floor and abs function


echo (int)$n1."</br>";

echo round($n1)."</br>";
echo abs($n3)."</br>";
echo ceil($n1)."</br>";
echo floor($n1)."</br>";

echo"</br>";



//Comparison between Integers

echo $n1>$n2;
echo $n1<$n2;

echo"</br>";



//Application of If Else conditions

if ($n1>=$n2) {
  echo "Valid!"."</br>";
} else {
  echo "Invalid!";

}

echo"</br>";

?>

