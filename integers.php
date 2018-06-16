<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Integers</title>
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
			$var1 = 3;
			$var2 = 4;
			
			echo '
			<fieldset>
			<legend id="legendIntegers">Integers</legend>
			<div id="divIntegers">
			&emsp;<code><i>// declare variables $var1 and $var2</i></code><br>
			&emsp;<code>$var1 = 3;</code><br>
			&emsp;<code>$var2 = 4;</code><br>';
			
			echo '
			&emsp;<code><i>// general math calculations</i></code><br>			
			&emsp;<code>Basic Math: <span class="red">&lt;?php</span><span class="blue"> echo</span> (((1 + 2 + $var1) * $var2) / 2 - 5); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . (((1 + 2 + $var1) * $var2) / 2 - 5) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// abs: returns positive value of integer parameter</i></code><br>
			&emsp;<code><i>// abs(integer)</i></code><br>
			&emsp;<code>Absolute value: <span class="red">&lt;?php</span><span class="blue"> echo abs</span>(0 - 300); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . abs(0 - 300) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// pow: returns the first value raised exponentially to the second value</i></code><br>
			&emsp;<code><i>// pow(value_to_raise, value_of_exponent)</i></code><br>
			&emsp;<code>Exponential: <span class="red">&lt;?php</span><span class="blue"> echo pow</span>(2,8); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . pow(2,8) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// sqrt: square root operation</i></code><br>
			&emsp;<code><i>// sqrt(integer)</i></code><br>
			&emsp;<code>Square root: <span class="red">&lt;?php</span><span class="blue"> echo sqrt</span>(100); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . sqrt(100) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// fmod: modulo operation, which returns the quotient of the division calculation</i></code><br>
			&emsp;<code><i>// fmod(dividend, divisor)</i></code><br>
			&emsp;<code>Modulo: <span class="red">&lt;?php</span><span class="blue"> echo fmod</span>(20,7); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . fmod(20, 7) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// rand: random number generator function</i></code><br>
			&emsp;<code><i>// rand()</i></code><br>
			&emsp;<code>Random: <span class="red">&lt;?php</span><span class="blue"> echo rand</span>(); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . rand() . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// rand(min, max): random number generator function with minimum and maximum ranges</i></code><br>
			&emsp;<code><i>// rand(minimum_int, maximum_int)</i></code><br>
			&emsp;<code>Random (min,max): <span class="red">&lt;?php</span><span class="blue"> echo rand</span>(1,10); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . rand(1, 10) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// +=, -=, *=, /=</i></code><br>			
			&emsp;<code>+= : <span class="red">&lt;?php</span> $var2 += 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			&emsp;<code>-= : <span class="red">&lt;?php</span> $var2 -= 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			&emsp;<code>*= : <span class="red">&lt;?php</span> $var2 *= 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			&emsp;<code>/= : <span class="red">&lt;?php</span> $var2 /= 4; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code><br>';
			echo '
			&emsp;&emsp;&emsp;&emsp;&emsp;<code>+=: ' . ($var2 += 4) . '</code><br>
			&emsp;&emsp;&emsp;&emsp;&emsp;<code>-=: ' . ($var2 -= 4) . '</code><br>
			&emsp;&emsp;&emsp;&emsp;&emsp;<code>*=: ' . ($var2 *= 4) . '</code><br>
			&emsp;&emsp;&emsp;&emsp;&emsp;<code>/=: ' . ($var2 /= 4) . '</code><br><br>
			';
			
			echo '
			&emsp;<code><i>// ++ & --: increment by 1 and decrement by 1</i></code><br>			
			&emsp;<code>Increment: <span class="red">&lt;?php</span> $var2++; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			&emsp;<code>Decrement: <span class="red">&lt;?php</span> $var2--; <span class="blue">echo</span> $var2; <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code><br>';
			echo '
			&emsp;&emsp;&emsp;&emsp;&emsp;<code>Increment: ' . $var2++ . '</code><br>
			&emsp;&emsp;&emsp;&emsp;&emsp;<code>Decrement: ' . $var2-- . '</code><br>
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
