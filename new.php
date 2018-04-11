<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Thank You</h1>
	<p>This is what you have submitted:</p>
	<dl>
		<dt>Username</dt><dd><?php echo $_POST["name"]?><dd>
		<br>
		<dt>Places</dt><br>
		<?php 
		if(!empty($_POST["place"])) {
			foreach($_POST["place"] as $check) {
				echo $check , "<br>";
			}
		}else {
			echo "Please enter place\n";
		}
?>
<br> <br>
<dt>Result</dt><dd>
<?php echo $_POST["result"]?>
</dd> <br> <br>
</dl>

	
</body>
</html>