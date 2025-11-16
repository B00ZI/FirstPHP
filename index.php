<?php

echo "<H1> NOTER </H1>";

$name="yahya";
$age=22;
$height=1.72;
$likesCoffe = true;

echo "<p> my name " . $name  . "im " . $age ." years old im  " . $height ."m  tall and do i like cooffe : " . ($likesCoffe ? "true" : "false") . "</p>";


// $score = 10 ;

// if ($score == 10){
//      echo "perfect";
// } elseif($score >= 8){
//     echo "good";
// }elseif($score >= 5){
//     echo "not bad";
// }else{
//     echo "bad ";
// };

echo "<br>" ;
echo "<br>" ;

// for($i = 1 ; $i <= 20 ; $i++ ){
//     echo " $i <br>";
// };

// $x= 1 ;

// echo "<br>" ;
// echo "<br>" ;

// while($x <= 30){
    
//     if($x % 2 == 0){
//         echo $x . "<br>" ;
//         $x++ ;
//     } else{
//     $x++ ;
//     }
// };


// $fruits = ["apple", "banana", "orange", "mango", "grape"];

// echo "first in list: " . $fruits[0] . "<br>";
// echo "last in list: " .  $fruits[count($fruits)-1] . "<br>";
// echo "<br>";

// foreach($fruits as $fruit){
//     echo $fruit . "<br>";
// }


function greet($name){
    echo "hello $name <br>";
}

greet($yahya);
greet($mo);

?>





