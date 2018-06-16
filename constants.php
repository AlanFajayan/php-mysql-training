<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Constants</title>
		<style>			
			legend {
				font-size: 16px;
				border: 1px solid black;
				padding: 5px;
				background-color: orange;
				cursor: pointer;
			}			
			i {
				color: #00ff00; // green
			}
			span.blue {
				color: #0000ff; // blue				
			}
			span.red {
				color: #ff0000; // red				
			}
		</style>
	</head>
	<body>

		<?php
			define("MAX_WIDTH", 980);			
			
			echo '
			<fieldset>
			<legend id="legendConstants">Constants</legend>
			<div id="divConstants">
			&emsp;<code><i>// define a constant</i></code><br>
			&emsp;<code><span class="blue">define</span>("MAX_WIDTH", 980);</code><br>';
			
			echo '
			&emsp;<code><i>// echo the value of the constant</i></code><br>			
			&emsp;<code>Display value of MAX_WIDTH: <span class="red">&lt;?php</span><span class="blue"> echo </span>MAX_WIDTH; <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';		
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
