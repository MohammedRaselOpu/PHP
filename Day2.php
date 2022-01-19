<?php 

//Application of for loop

$n=20;
for ($i=0; $i <$n; $i++) {
echo $i."<br>";
}





//Application of while loop


$num = 0;

while ($num <= 10){
    echo "$num <br>";
    $num++;
}





//Application of do while loop

$x = 20;

do {
  echo "The number is: $x <br>";//20 will be printed
  $x++;//this addition will keep on until the condition in while loop gets wrong
} while ($x <= 30);







//Application of nested for loop in printing a triangle;

$n1=10;
for($j=1; $j<=$n1; $j++)
{
for($k=1; $k<=$j; $k++)
{
echo ' * ';
}
echo "<br>";
  }         
  for($j=$n1; $j>=1; $j--)
{
for($k=1; $k<=$j; $k++)
{
echo ' * ';
}
echo "<br>";
  }   





//Application of if_else-if_else statements in automatic Day detection in a week


  $Day = date('w');

if($Day == 1){
echo "Today is Monday";
}
elseif($Day == 2){
    echo "This is Tuesday";
    }
    elseif($Day == 3){
        echo "This is Wednesday";
        }
        elseif($Day == 4){
            echo "This is Thursday";
            }
            elseif($Day == 5){
                echo "This is Friday";
                }
                elseif($Day == 6){
                    echo "This is Saturday";
                    }
                        else{
                            echo "Sunday";
                        }





// Example of Associative Arrays

$contact = array(
    array("Name"=>"MD.Rahim", "Cell"=>123,"Email"=>"rahim@gmail.com"),
    array("Name" => "MD.Karim", "Cell" => 234, "Email" => "karim@gmail.com"),
    array("Name" => "MD.Abul", "Cell" => 345, "Email" => "abul@gmail.com"),
    array("Name" => "MD.Babul", "Cell" => 456, "Email" => "babul@gmail.com"),
    array("Name" => "MD.Hashem", "Cell" => 567, "Email" => "hashem@gmail.com"),
    array("Name" => "MD.Kashem", "Cell" => 678, "Email" => "kashenm@gmail.com"),
    array("Name" => "MD.Shakib", "Cell" => 789, "Email" => "shakib@gmail.com"),
    array("Name" => "MD.Rakib", "Cell" => 890, "Email" => "rakib@gmail.com"),
    );
foreach ($contact as $info){
    foreach ($info as $key => $value){
        echo "$key: $value <br>";}
   
    echo "<br>";

}


 ?>