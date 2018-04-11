<?php  
function circlecalc(){

if(empty($_POST["radius"])){
	echo "Please enter value";
}else {
  
	$r=$_POST["radius"];
	$d=2*$r;
	$area=3.14*$r*$r;
	$circum=2*3.14*$r;
	echo "The radius is:$r <br>";
	echo "The diameter is: $d<br>";
	echo "The area is: $area<br>";
	echo "The circumfrence is: $circum";

}
}

function squarecalc(){
if(empty($_POST["side"])){
	echo "Please enter value";
}else {
	$side=$_POST["side"];
	$area= $side * $side;
	$p= 4 * $side;
	echo "The side length is: $side <br>";
	echo "The area is: $area<br>";
	echo "The perimeter is: $p<br>";
}
					
}

function rectcalc(){
if(empty($_POST["length"]) && empty($_POST["width"])){
	echo "please enter value";
}else{
	$length=$_POST["length"];
	$width=$_POST["width"];
	$area= $length * $width;
	$p= 2 * ($length+$width);
	echo "The length is: $length <br>";
	echo "The width is: $width <br>";
	echo "The area is: $area<br>";
	echo "The perimeter is: $p<br>";
}
	
}
	

	if ($_POST["action"] == "circle"){
		circlecalc();

	} else if($_POST["action"] == "square" ){
		squarecalc();
	}else{
		rectcalc();
	}

 ?>