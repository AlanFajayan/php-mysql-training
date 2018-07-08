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
				<code class="indent01"><i>// display a string literal</i></code><br>
				<code class="indent01">Display a string literal: <span class="red">&lt;?php</span><span class="blue"> echo "Hello World"; <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . 'Hello World' . '</code><br><br>';
			echo '				
				<code class="indent01"><i>// assign string to a variable</i></code><br>
				<code class="indent01">String to a variable: <span class="red">&lt;?php</span><span class="blue"> $greeting = "Hello"; <span class="red">?&gt;</span></code><br>
				<code class="indent01">String to a variable: <span class="red">&lt;?php</span><span class="blue"> $target = "World"; <span class="red">?&gt;</span></code><br>
				<code class="indent01">Concatenating the string variables: <span class="red">&lt;?php</span><span class="blue"> $phrase = $greeting . " " . $target; <span class="red">?&gt;</span></code><br>
				<code class="indent01">Displaying the concatenated variable: <span class="red">&lt;?php</span><span class="blue"> echo $phrase; <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . $phrase . '</code><br><br>';
			echo '				
				<code class="indent01"><i>// double vs single quotes</i></code><br>
				<code class="indent01">Double quotes containing variable: <span class="red">&lt;?php</span><span class="blue"> echo "$phrase Again"; <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . "$phrase Again" . '</code><br>';
			echo '	
				<code class="indent01">Single quotes containing variable: <span class="red">&lt;?php</span><span class="blue"> echo \'$phrase Again\'; <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . '$phrase Again' . '</code><br><br>';
			echo '				
				<code class="indent01"><i>// curly braces containing variable</i></code><br>
				<code class="indent01">Curly braces containing variable: <span class="red">&lt;?php</span><span class="blue"> echo "{$phrase} Again"; <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
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
