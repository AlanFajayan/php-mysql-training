<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Variables</title>
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
			$var1 = 10;	
			$var2 = "Hello world";	
			
			echo '
				<fieldset>
				<legend id="legendVariables">Variables</legend>
				<div id="divVariables">
				&emsp;<code><i>// define a variable</i></code><br>
				&emsp;<code>$var1 = 10;</code><br>
				&emsp;<code>Variable: <span class="red">&lt;?php</span><span class="blue"> echo $var1; <span class="red">?&gt;</span></code><br>		
				&emsp;<code><b>result:</b> </code>';
			echo '<code>' . $var1 . '</code><br><br>';
			echo '		
				&emsp;<code>$var2 = "Hello world";</code><br>
				&emsp;<code>Variable: <span class="red">&lt;?php</span><span class="blue"> echo $var2; <span class="red">?&gt;</span></code><br>		
				&emsp;<code><b>result:</b> </code>';
			echo '<code>' . $var2 . '</code><br><br>';
		?>
	
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendVariables").on("click", function() {
					$("#divVariables").slideToggle();
				});				
			});
		</script>
	</body>
</html>
