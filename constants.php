<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Constants</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<a href="home.php"><button id="home">Home</button></a>
		<?php
			define("MAX_WIDTH", 980);			
			
			echo '
			<fieldset>
			<legend id="legendConstants">Constants</legend>
			<div id="divConstants">
			<code class="indent01"><i>// define a constant</i></code><br>
			<code class="indent01"><span class="blue">define</span>("MAX_WIDTH", 980);</code><br>';
			
			echo '
			<code class="indent01"><i>// echo the value of the constant</i></code><br>			
			<code class="indent01">Display value of MAX_WIDTH: <span class="red">&lt;?php</span><span class="blue"> echo </span>MAX_WIDTH; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';		
			echo '<code>' . MAX_WIDTH . '</code><br>';				
			
			echo '</div></fieldset>';
		?>
		
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendConstants").on("click", function() {
					$("#divConstants").slideToggle();
				});				
			});
		</script>
	</body>
</html>
