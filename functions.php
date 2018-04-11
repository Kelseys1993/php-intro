<?php

// function hello($y){
// 	echo "Hello $y <br>";
// }

// hello("Yoobee");

// hello();
// $name;
// function hello () {
// 	global $name;
// 	$name = "Yoobee";
// 	echo "Hello $name <br>";
// }
// echo "$name";

// using a global variable 
// $x = 5;
// unumber();
// function unumber(){
// 	global $x;
// 	echo $x, "<br>";// global variable
// 	++$x;
// }
// echo "The value now is $x <br>";


//static variable
// statnum();
// function statnum(){
// 	static $n = 0;
// 	echo "the value of n is $n <br>";
// 	++$n;
// }
// statnum();
// // echo "the value of n is $n<br>";
// statnum();
// statnum();
// statnum();
// statnum();

function br(){
	echo "<br>";
}
$n=5;
function fact($f){
	if ($f < 2) {
		return 1; 
	} else {
		return ($f*fact($f-1));
	}
}
$x=fact($n);
echo "The factorial of $n is $x";
br();

// }
// $balance = 20.00;
// $deposits = 50.00;
// $withdrawl = 10.00;
// echo "Current balance is $$balance<br>";
// function deposit($d){
// global $balance;
// $balance = $balance + $d;
// echo "You have deposited $$d. Your new balance is $$balance";
// }
// deposit($deposits);
// echo "<br>";
// echo "Current balance is $$balance<br>";
// function withdraw($w){
// global $balance;
// $balance = $balance - $w;
// echo "You have withdrawn $$w. Your new balance is $$balance";
// }
// withdraw($withdrawl);

hello("");
br();
br();
hello("Yoobee");
br();
hellostyle("Helvetica", 2);
br();
hellostyle("Times", 3);
br();
hellostyle("Courier", 1.5);
br();
function hello($name){
	echo "Hello $name"; //local variable
}
function br(){
	echo "<br>";
}
function hellostyle($font, $size){
echo "<p style=\"font-family:$font; font-size:{$size}em;\">  Hello Yoobee </p> ";	
}
?>