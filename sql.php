<?php
// $dsn="mysql:dbname=supermarket";
// $username="root";

// try {
// 	$conn= new PDO($dsn,$username);
// 	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	} catch (PDOException $e) {
// 	echo "connection failed:" . $e->getMessage();
// 	}
// 	$sql="SELECT * FROM Main";
// 	echo "<ul>";
// 	try {
// 	$rows=$conn->query($sql);
// 	foreach ($rows as $row) {
// 	echo "<li>" . $row["NAme"] . " costs " . $row["Price"] "</li>";
// 	}
// 	} catch (PDOException $e) {
// 	echo "Query failed: " . $e->getMessage();
// 	}
// 	echo "</ul>";
// 	$conn=null;


$dsn="mysql:dbname=supermarket";
$username="root";

try {
	$conn= new PDO($dsn,$username);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	echo "connection failed:" . $e->getMessage();
	}
	$sql="SELECT * FROM Item";
	echo "<ul>";
	try {
	$rows=$conn->query($sql);
	foreach ($rows as $row) {
	echo "<li>" . $row["Id"] ." " . $row["Name"] . " costs: " . 
	"$" .$row["Price"] . "</li>";
	}
	} catch (PDOException $e) {
	echo "Query failed: " . $e->getMessage();
	}
	echo "</ul>";
	$conn=null;
?>
