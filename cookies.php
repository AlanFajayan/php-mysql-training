<?php

// REMEMBER: Setting cookies must be before *any* HTML output
//           unless output buffering is turned on.
	$name = "test";
	$value = "hello";
	$expire = time() + (60*60*24*7); // add seconds
	setcookie($name, $value, $expire);

	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";

	// Three ways to unset cookies:
	// 1. setcookie($name);
	// 2. setcookie($name, null, $expire);
	// 3. setcookie($name, $value, time() - 3600);

	// Kevin's recommendation for unsetting:
	// setcookie($name, null, time() - 3600);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Cookies</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<a href="home.php"><button id="home">Home</button></a>
		<?php
			
			echo '
			<fieldset>
			<legend id="legendCookies">Cookies</legend>
			<div id="divCookies">
			<code class="indent01"><i>// setting, reading, and unsetting cookie values</i></code><br>
			<code class="indent01">PHP Code:<br>
			<span class="red indent02">&lt;?php</span><br>
			<span class="blue">
			<code class="indent03"><i>// REMEMBER: Setting cookies must be before *any* HTML output</i></code><br>
			<code class="indent03"><i>// unless output buffering is turned on.</i></code><br>
			<span class="indent03">$name = "test";</span><br>
			<span class="indent03">$value = "hello";</span><br>
			<span class="indent03">$expire = time() + (60*60*24*7); // add seconds</span><br>
			<span class="indent03">setcookie($name, $value, $expire);</span><br><br>
			<span class="indent03">$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";</span><br><br>
			<code class="indent03"><i>// Three ways to unset cookies:</i></code><br>
			<code class="indent03"><i>// 1. setcookie($name);</i></code><br>
			<code class="indent03"><i>// 2. setcookie($name, null, $expire);</i></code><br>
			<code class="indent03"><i>// 3. setcookie($name, $value, time() - 3600);</i></code><br><br>
			<code class="indent03"><i>// Recommendation for unsetting:</i></code><br>
			<code class="indent03"><i>// setcookie($name, null, time() - 3600);</i></code><br><br>
			<span class="indent03">echo $test</span><br></span>
			<span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code><br>';
            echo '<code><div class="px30">' . $test . '</div></code><br>';			
			
			echo '</div></fieldset>';
		?>
		
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendCookies").on("click", function() {
					$("#divCookies").slideToggle();
				});				
			});
		</script>
	</body>
</html>
