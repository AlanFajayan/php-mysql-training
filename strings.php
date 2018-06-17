<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Strings</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>	
	<a href="home.php"><button id="home">Home</button></a>	
		<?php
			$greeting = "Hello";
			$target = "World";
			$phrase = $greeting . " " . $target;
		
			echo '
				<fieldset>
				<legend id="legendStrings">Strings</legend>
				<div id="divStrings">
				&emsp;<code><i>// display a string literal</i></code><br>
				&emsp;<code>Display a string literal: <span class="red">&lt;?php</span><span class="blue"> echo "Hello World"; <span class="red">?&gt;</span></code><br>
				&emsp;<code><b>result:</b> </code>';
			echo '<code>' . 'Hello World' . '</code><br><br>';
			echo '				
				&emsp;<code><i>// assign string to a variable</i></code><br>
				&emsp;<code>String to a variable: <span class="red">&lt;?php</span><span class="blue"> $greeting = "Hello"; <span class="red">?&gt;</span></code><br>
				&emsp;<code>String to a variable: <span class="red">&lt;?php</span><span class="blue"> $target = "World"; <span class="red">?&gt;</span></code><br>
				&emsp;<code>Concatenating the string variables: <span class="red">&lt;?php</span><span class="blue"> $phrase = $greeting . " " . $target; <span class="red">?&gt;</span></code><br>
				&emsp;<code>Displaying the concatenated variable: <span class="red">&lt;?php</span><span class="blue"> echo $phrase; <span class="red">?&gt;</span></code><br>
				&emsp;<code><b>result:</b> </code>';
			echo '<code>' . $phrase . '</code><br><br>';
			echo '				
				&emsp;<code><i>// double vs single quotes</i></code><br>
				&emsp;<code>Double quotes containing variable: <span class="red">&lt;?php</span><span class="blue"> echo "$phrase Again"; <span class="red">?&gt;</span></code><br>
				&emsp;<code><b>result:</b> </code>';
			echo '<code>' . "$phrase Again" . '</code><br>';
			echo '	
				&emsp;<code>Single quotes containing variable: <span class="red">&lt;?php</span><span class="blue"> echo \'$phrase Again\'; <span class="red">?&gt;</span></code><br>
				&emsp;<code><b>result:</b> </code>';
			echo '<code>' . '$phrase Again' . '</code><br><br>';
			echo '				
				&emsp;<code><i>// curly braces containing variable</i></code><br>
				&emsp;<code>Curly braces containing variable: <span class="red">&lt;?php</span><span class="blue"> echo "{$phrase} Again"; <span class="red">?&gt;</span></code><br>
				&emsp;<code><b>result:</b> </code>';
			echo '<code>' . "{$phrase} Again" . '</code><br><br>';
			
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendStrings").on("click", function() {
					$("#divStrings").slideToggle();
				});				
			});
		</script>
	</body>
</html>
