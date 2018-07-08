<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Integers</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	<a href="home.php"><button id="home">Home</button></a>
		<?php
			$var1 = 3;
			$var2 = 4;
			
			echo '
			<fieldset>
			<legend id="legendIntegers">Integers</legend>
			<div id="divIntegers">
			<code class="indent01"><i>// declare variables $var1 and $var2</i></code><br>
			<code class="indent01">$var1 = 3;</code><br>
			<code class="indent01">$var2 = 4;</code><br>';
			
			echo '
			<code class="indent01"><i>// general math calculations</i></code><br>			
			<code class="indent01">Basic Math: <span class="red">&lt;?php</span><span class="blue"> echo</span> (((1 + 2 + $var1) * $var2) / 2 - 5); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . (((1 + 2 + $var1) * $var2) / 2 - 5) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// abs: returns positive value of integer parameter</i></code><br>
			<code class="indent01"><i>// abs(integer)</i></code><br>
			<code class="indent01">Absolute value: <span class="red">&lt;?php</span><span class="blue"> echo abs</span>(0 - 300); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . abs(0 - 300) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// pow: returns the first value raised exponentially to the second value</i></code><br>
			<code class="indent01"><i>// pow(value_to_raise, value_of_exponent)</i></code><br>
			<code class="indent01">Exponential: <span class="red">&lt;?php</span><span class="blue"> echo pow</span>(2,8); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . pow(2,8) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// sqrt: square root operation</i></code><br>
			<code class="indent01"><i>// sqrt(integer)</i></code><br>
			<code class="indent01">Square root: <span class="red">&lt;?php</span><span class="blue"> echo sqrt</span>(100); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . sqrt(100) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// fmod: modulo operation, which returns the quotient of the division calculation</i></code><br>
			<code class="indent01"><i>// fmod(dividend, divisor)</i></code><br>
			<code class="indent01">Modulo: <span class="red">&lt;?php</span><span class="blue"> echo fmod</span>(20,7); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . fmod(20, 7) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// rand: random number generator function</i></code><br>
			<code class="indent01"><i>// rand()</i></code><br>
			<code class="indent01">Random: <span class="red">&lt;?php</span><span class="blue"> echo rand</span>(); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . rand() . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// rand(min, max): random number generator function with minimum and maximum ranges</i></code><br>
			<code class="indent01"><i>// rand(minimum_int, maximum_int)</i></code><br>
			<code class="indent01">Random (min,max): <span class="red">&lt;?php</span><span class="blue"> echo rand</span>(1,10); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . rand(1, 10) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// +=, -=, *=, /=</i></code><br>			
			<code class="indent01">+= : <span class="red">&lt;?php</span> $var2 += 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			<code class="indent01">-= : <span class="red">&lt;?php</span> $var2 -= 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			<code class="indent01">*= : <span class="red">&lt;?php</span> $var2 *= 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			<code class="indent01">/= : <span class="red">&lt;?php</span> $var2 /= 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code><br>';
			echo '
			<code class="indent02">+=: ' . ($var2 += 4) . '</code><br>
			<code class="indent02">-=: ' . ($var2 -= 4) . '</code><br>
			<code class="indent02">*=: ' . ($var2 *= 4) . '</code><br>
			<code class="indent02">/=: ' . ($var2 /= 4) . '</code><br><br>
			';
			
			echo '
			<code class="indent01"><i>// ++ & --: increment by 1 and decrement by 1</i></code><br>
			<code class="indent01">Increment: <span class="red">&lt;?php</span> $var2++; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			<code class="indent01">Decrement: <span class="red">&lt;?php</span> $var2--; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code><br>';
			echo '
			<code class="indent02">Increment: ' . $var2++ . '</code><br>
			<code class="indent02">Decrement: ' . $var2-- . '</code><br>
			';
			
			echo '</div></fieldset>';
		?>	
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendIntegers").on("click", function() {
					$("#divIntegers").slideToggle();
				});				
			});
		</script>
	</body>
</html>
