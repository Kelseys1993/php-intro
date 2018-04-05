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


// $student = array(
// 	array(
// 		"name" => "John",
// 		"mod1" => 76,
// 		"mod2" => 55,
// 		"mod3" => 70,
// 		"mod4" => 72
// 		),
// 	array(
// 		"name" => "Smith",
// 		"mod1" => 88,
// 		"mod2" => 78,
// 		"mod3" => 84,
// 		"mod4" => 80
// 		),
// 	);


// foreach ($student as $stud){
// 	 	echo "Student: " . $stud[name];
// 	    echo "<br>";
// 	    echo "Module 1: " . $stud[mod1];
// 	    echo "<br>";
// 	    echo "Module 2: " . $stud[mod2];
// 	    echo "<br>";
// 	    echo "Module 3: " . $stud[mod3];
// 	    echo "<br>";
// 	    echo "Module 4: " . $stud[mod4];
// 	  	echo "<p>";
// 	}


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

// $currentdate = date("g:i:s");
// $d = strtotime("11:59am");
// $morn = strtotime("5:00am");
// $even = strtotime("5:00pm");
// $night = strtotime("11:59pm");
// echo $currentdate;
// echo "<br>";
// if ($currentdate >= date("h:i a", $morn) &&  $currentdate <= date("h:i a", $d) ) {
// 	echo "Good Morning";
// } else if ($currentdate > date("h:i a" ,$d) && $currentdate <= date("h:i a" ,$even) ) {
// 	echo "Good Afternoon";
// } else ($currentdate  > date("h:i a" ,$even) && $currentdate < date("h:i a" ,$night) ) {
// 	echo "Good Evening";
// }else {
// 	echo "Good Night";
// }
date_default_timezone_set('Etc/GMT+12');
$year = date("Y") ;
echo $year;
echo "<br>";
$hour = date("H");
$currenttime = date("H:i:s A");
echo $currenttime;
echo "<br>";


if ($hour < 12) {
    echo "Good Morning";
}else if ($hour >= 12 && $hour < 17){
    echo "Good Afternoon";
}else if ($hour >=17 && $hour < 24) {
    echo "Good Evening";
} else {
	echo "Good Night";
}
echo "<br>";
if($year % 400 == 0) {
	echo "This Year is a leap year";
} else {
	echo "This Year is not a leap year";
}

?>

