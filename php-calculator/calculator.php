<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

	
	<div class="formContainer">
		<h1>Yoobee's Calculator</h1>
			<div class="date">
			<?php 
			include('checktime.php');
			?>
			</div>
		
			<div class="radios">
				<p>Please choose the shape for which you want to calculate properties</p>
		
			<button type="button"  name="shape" id="shape1" class="button">Circle</button>
			<button type="button" name="shape" id="shape2" class="button">Sqaure</button>
			<button type="button"name="shape" id="shape3" class="button">Rectangle</button>
			
			</div>
			
			<form  action="calculator.php" method="post" style="display:none"  id="circleForm">
			
				Enter Radius: <input type="text" name="radius" id="radius" class='input'>
				<input type="hidden" name="action" value="circle">
				<button type="submit"id='submit' class="button">Submit</button>
				
				
			
		</form>

		<form action="calculator.php" method="post" style="display:none"id="squareForm" >
			<input type="hidden" name="action" value="square">
				Enter Side length: <input type="text" name="side" class='input'/>
				<button type="submit"id='submit' class="button">Submit</button>
		
		</form>
		<form action="calculator.php" method="post" style="display:none"id="rectangleForm" >
		
				Enter length: <input type="text" name="length" class='input' />
				<br>
				Enter width: <input type="text" name="width" class='input'/>
				<input type="hidden" name="action" value="rectangle">
				<input type="submit" class="button">
				
				
		
		</form>
	<div class='phpinput'>
	<?php 
	 
		include("calculations.php");

	?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="script.js"></script>
</body>
</html>