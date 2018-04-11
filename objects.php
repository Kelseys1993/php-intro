<?php 
class student {
	public $name; //can be used anywhere in the script
	public $age;

}

// when using objects you use -> 
$student1 = new student; 
$student1 -> name = "Kelsey";
$student1 -> age = 24;
echo "<pre>$student1->name \t $student1->age\n</pre>";
echo"<br>";
$student2 = new student;
$student2 -> name = "Josh";
$student2 -> age = 20;
echo "<pre>$student2->name \t $student2->age\n</pre>";
student::$age =20;
echo student:: $student1->age;

// class customer {
// 	public $name;
// 	public $age;
// 	public $balance = 5000;

// }


 ?>