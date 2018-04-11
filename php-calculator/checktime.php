<?php
// date_default_timezone_set('Etc/GMT+12');
// $year = 2019;
// echo $year;
// echo "<br>";
// $hour = date("H");
// $currenttime = date("H:i:s A");
// echo $currenttime;
// echo "<br>";


// if ($hour < 12) {
//     echo "Good Morning";
// }else if ($hour >= 12 && $hour < 17){
//     echo "Good Afternoon";
// }else if ($hour >=17 && $hour < 24) {
//     echo "Good Evening";
// } else {
// 	echo "Good Night";
// }
// echo "<br>";
// if($year % 400 == 0) {
// 	echo "This Year is a leap year";
// } else {
// 	echo "This Year is not a leap year";
// }
			date_default_timezone_set('Pacific/Auckland');
			$hour = date("H");
			$currenttime = date("H:i:s A, D jS F y ");
			echo "It is $currenttime";
			echo "<br>";


			if ($hour < 12) {
			    echo "Good Morning :)";
			}else if ($hour >= 12 && $hour < 17){
			    echo "Good Afternoon :)";
			}else if ($hour >=17 && $hour < 24) {
			    echo "Good Evening :)";
			} else {
				echo "Good Night :)";
			}

	

?>