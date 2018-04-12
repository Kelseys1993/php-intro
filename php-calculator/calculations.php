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
	echo "<br>";
	echo "<div class='shape' style='border-radius: 50%; width: $d", "px; height: $d", "px;'></div>";
	echo "<br>";
	echo "<h3> How the diameter is calculated:</h3>";
	echo "The diameter is 2 x the given radius ";
	echo "<br>";
	echo "<h3>How the area is calculated:</h3>";
	echo " The area is π x radius <sup>2</sup>";
	echo "<br>";
	echo "<h3> How the circumfrence is calculated:</h3>";
	echo "The circumfrence is 2 x π x radius";
	

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
	echo "<br>";
	echo "<div class='shape' style='width: $side", "px; height: $side", "px;'></div>";
	echo "<br>";
	echo "<h3>How the area is calculated:</h3>";
	echo "The area of the sqaure is calculated by multiplying the length of the side by itself";
	echo "<h3> How the perimeter is calculated:</h3>";
	echo "The perimeter is calculated by 4 x side length";
}
					
}

function rectcalc(){
if(empty($_POST["length"]) && empty($_POST["width"])){
	echo "Please enter value";
}else{
	$length=$_POST["length"];
	$width=$_POST["width"];
	$area= $length * $width;
	$p= 2 * ($length+$width);
	echo "The length is: $length <br>";
	echo "The width is: $width <br>";
	echo "The area is: $area<br>";
	echo "The perimeter is: $p<br>";
	echo "<br>";
	echo "<div class='shape' style='width: $width", "px; height: $length", "px;'></div>";
	echo "<br>";
	echo "<h3> How the area is calculated:</h3>";
	echo "The area is calculated by length x width";
	echo "<h3>How the perimeter is calculated:</h3>";
	echo "The perimeter is calculated by 2 x (length + width)";
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