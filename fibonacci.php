<?php
echo "<h3>Fibonacci series not using recursive function:</h3>"; 
function printFibonacci($n){
 
  $first = 0;
  $second = 1;
 
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}
 
printFibonacci(15);

echo "<br>";

echo "<h3>Fibonacci series using recursive function:</h3>"; 
$num = 15;
function recursive ($num){
  if($num == 0){  
    return 0;  
  }else if( $num == 1){  
      return 1;  
    }else {
    return recursive( $num - 1)+recursive( $num - 2 );
  }
}
for ($i=0; $i < $num; $i++) { 
 echo recursive($i);
 echo "\n";
}

?>