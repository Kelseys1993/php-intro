<?php 

		// $r=$_POST["radius"];
		// $d=2*$r;
		// $area=3.14*$r*$r;
		// $circum=2*3.14*$r;
		// echo "The radius is:$r <br>";
		// echo "The diameter is:$d<br>";
		// echo "The area is:$area<br>";
		// echo "The circumfrence is:$circum";

		//Palindrome checking
// $a =$_POST["palindrome"];
// $b = strrev($a);

// if ($a == $b) {
//     echo "$a is a palindrome <br>";
//     // echo var_dump($a);
// }else {
//     echo "$a is not palindrome";

// // }
echo "<br>";
$balance = 20.00;
$deposits = $_POST["depos"];

// $withdrawl = 10.00;
// echo "Current balance is $$balance<br>";
function deposit($d){
global $balance;
$balance = $balance + $d;
echo "You have deposited $$d. Your new balance is $$balance";
}
deposit($deposits);

// echo "<br>";
// echo "Current balance is $$balance<br>";
// function withdraw($w){
// global $balance;
// $balance = $balance - $w;
// echo "You have withdrawn $$w. Your new balance is $$balance";
// }
// withdraw($withdrawl);
	?>
