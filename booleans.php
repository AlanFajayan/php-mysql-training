<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Booleans</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<a href="home.php"><button id="home">Home</button></a>
		<?php
			$result1 = true;
			$result2 = false;
			
			echo '
			<fieldset>
			<legend id="legendBooleans">Booleans</legend>
			<div id="divBooleans">
			<code class="indent01"><i>// declare boolean variables</i></code><br>
			<code class="indent01">$result1 = true;</code><br>
			<code class="indent01">$result2 = false;</code><br><br>';
			
			echo '
			<code class="indent01"><i>// echo the values of the variables</i></code><br>			
			<code class="indent01">Display value of $result1: <span class="red">&lt;?php</span><span class="blue"> echo </span>$result1; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';		
			echo '<code>' . $result1 . '</code><br>
			<code class="indent01">Display value of $result2: <span class="red">&lt;?php</span><span class="blue"> echo </span>$result2; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';		
			echo '<code>' . $result2 . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// is_bool: returns true if parameter is true or false</i></code><br>	
			<code class="indent01"><i>// is_bool(variable)</i></code><br>
			<code class="indent01">Is result2 boolean?: <span class="red">&lt;?php</span><span class="blue"> echo is_bool</span>($result2); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';		
			echo '<code>' . is_bool($result2) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// is_float: returns true if parameter is a decimal</i></code><br>	
			<code class="indent01"><i>// is_float(variable)</i></code><br>
			<code class="indent01">Is 3.14 a float?: <span class="red">&lt;?php</span><span class="blue"> echo</span> if(<span class="blue">is_float</span>(3.14)){<span class="blue">echo</span> "It is a float";} <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			if(is_float(3.14)){echo '<code>It is a float</code><br><br>';}
			//echo '<code>' .  . '</code><br><br>';
			
			echo '</div></fieldset>';
		?>
				
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendBooleans").on("click", function() {
					$("#divBooleans").slideToggle();
				});				
			});
		</script>
	</body>
</html>
