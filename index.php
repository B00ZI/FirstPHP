<?php

$movies = ["Inception", "Avatar", "Titanic", "The Matrix", "Interstellar"];
$ratings = [9, 8, 6, 9, 10];





  function listm($movies , $ratings){
    for($i = 0 ; $i < count($movies) ; $i++ ){
       if ($ratings[$i] >= 9){
       echo   $movies[$i] . " - " . $ratings[$i] . " - Excellent <br>" ;
       }elseif($ratings[$i] >= 7){
       echo   $movies[$i] . " - " . $ratings[$i] . " - Good <br>" ;
       }else{
       echo   $movies[$i] . " - " . $ratings[$i] . " - Needs improvement <br>" ;

       }
    };
   
  };
    function best($movies , $ratings){

     $rate = 0 ;
     $name = "";
     for($i = 0 ; $i < count($movies) ; $i++ ){
      if ($rate < $ratings[$i]){
         $rate =  $ratings[$i] ;
         $name = $movies[$i];
      }
  }
   return $name ;
    }
  
  function average($ratings){
     
     $total = 0 ;
     foreach($ratings as $rate ){
      $total += $rate ;
     }

     return $total / count($ratings);
  }
$averageRating = average($ratings);
$bestMovie = best($movies , $ratings);

 




echo "<h1>Mini Project: Movie Ratings Tracker</h1>" ;
listm($movies , $ratings);
echo "<br>";
echo "<b> Average rating: ".$averageRating  . "</b> <br>";
echo "<b> Best Movie: ".$bestMovie  . "</b>";

?>