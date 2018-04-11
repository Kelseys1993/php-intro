<?php

// $n = array(65, 73, 45);
// for ($i=0; $i < count($n) ; $i++) { 
// 		//count($n) this is like array.length
// 	echo $n[$i] . "<br>";
// }
// echo "<br>";
// print_r($n);
// echo "<br>";
// foreach ($n as $v)
// 	echo $v. "<br>";
// echo "<br>";

//sorting an array 
// $n = array(5,3,1,4,2);
// for ($i=0; $i <5 ; $i++) { 
// 	for ($j=$i; $j < 5; $j++) { 
// 		if($n[$i]<$n[$j]){
// 			//using temp tp put the value to so its not overwritten
// 			$temp = $n[$i];
// 			$n[$i] = $n[$j];
// 			$n[$j] = $temp;
// 		}
// 	}
	
// }
// echo "<br>";
// // print_r($n);
// foreach($n as $v)
// echo $v . "\n";

// $marks = array(84, 56, 83, 94, 50);
// sort($marks);
// echo "<br>";
// print_r($marks);
// foreach ($marks as $v)
// echo $v. "\n";

// associative array, uses key and values


$student = array(
	array(
		"name" => "John",
		"mod1" => 76,
		"mod2" => 55,
		"mod3" => 70,
		"mod4" => 72
		),
	array(
		"name" => "Smith",
		"mod1" => 88,
		"mod2" => 78,
		"mod3" => 84,
		"mod4" => 80
		),
	);


foreach ($student as $stud){
	 	echo "Student: " . $stud[name];
	    echo "<br>";
	    echo "Module 1: " . $stud[mod1];
	    echo "<br>";
	    echo "Module 2: " . $stud[mod2];
	    echo "<br>";
	    echo "Module 3: " . $stud[mod3];
	    echo "<br>";
	    echo "Module 4: " . $stud[mod4];
	  	echo "<p>";
	}


// $i = 1;
// do {
// 	echo "$i<br>";
// 	$i++;
// }while ($i <= 10);


// $i = 1;
// while ($i<=10){
// 	echo "$i<br>";
// 	$i++;
// };

// $i = 1;
// while ($i<=10){
// 	echo "$i Hello<br>";
// 	$i++;

// 	if($i==5){
// 		break;
// 		continue;
// 		echo "this sentance will not be printed";
// 	}
// }




?>

