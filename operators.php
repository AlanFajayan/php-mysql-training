<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Comparison and Logical Operators</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
        <a href="home.php"><button id="home">Home</button></a>
		<?php
            $a = 4;
			$b = 3;
			$c = 1;
			$d = 20;
			if (($a >= $b) || ($c >= $d)) {
				$result = "a is larger than b OR ";
				$result = $result . "c is larger than d";
			}

            echo '
			<fieldset>
			<legend id="legendOperators">Comparison and Logical Operators</legend>
			<div id="divOperators">
            <code class="indent01"><i>// comparison: ==,===,>,<,<=,>=</i></code><br>
            <code class="indent01"><i>// logical: &&,||,!,empty,is_numeric</i></code><br>
            <code class="indent01">$a = 4;</code><br>
            <code class="indent01">$b = 3;</code><br>
            <code class="indent01">$c = 1;</code><br>
            <code class="indent01">$d = 20;</code><br>					
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> if ($a >= $b) || ($c >= $d) {<br>
            <span class="indent04">$result = "a is larger than b OR ";</span><br>
            <span class="indent04">$result = $result . "c is larger than d";</span><br>            
            <span class="indent03"> }</span>
            </span><br>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';

            $e = 100;
			if (!isset($e)) {
				$e = 200;
			}
			
            echo '		            
            <code class="indent01">$e = 100;</code><br>					
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> if (!isset($e) {<br>
            <span class="indent04">$e = 200;</span><br>               
            <span class="indent03"> }</span>
            </span><br>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $e . '</code><br><br>';

            // don't reject 0 or 0.0
			$quantity = "";
			if (empty($quantity) && !is_numeric($quantity)) {
				$result1 = "You must enter a quantity.";
			}

            echo '		            
            <code class="indent01">$quantity = "";</code><br>					
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> if (empty($quantity) && !is_numeric($quantity)) {<br>
            <span class="indent04">$result1 = "You must enter a quantity.";</span><br>
            <span class="indent03"> }</span>
            </span><br>
            <span class="red indent02">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';

			echo '</div></fieldset>';
		?>

		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendOperators").on("click", function() {
					$("#divOperators").slideToggle();
				});				
			});
		</script>
	</body>
</html>
