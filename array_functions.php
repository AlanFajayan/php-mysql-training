<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Array Functions</title>
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
		$numbers = array(8,23,15,42,16,4); 
		
		echo '
		<fieldset>
		<legend id="legendArrayFunctions">Array Functions</legend>
		<div id="divArrayFunctions">
		&emsp;<code><i>// declare array variable $numbers</i></code><br>
		&emsp;<code>$numbers = array(8,23,15,42,16,4);</code><br><br>';
		
		echo '
		&emsp;<code><i>// count: function that returns the length of the array</i></code><br>
		&emsp;<code><i>// count(array_variable)</i></code><br>
		&emsp;<code>Count: <span class="red">&lt;?php</span><span class="blue"> echo count</span>($numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code>';
		echo '<code>' . count($numbers) . '</code><br><br>';
		
		echo '
		&emsp;<code><i>// max: function that returns the highest value in the array</i></code><br>
		&emsp;<code><i>// max(array_variable)</i></code><br>
		&emsp;<code>Max: <span class="red">&lt;?php</span><span class="blue"> echo max</span>($numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code>';
		echo '<code>' . max($numbers) . '</code><br><br>';
		
		echo '
		&emsp;<code><i>// min: function that returns the lowest value in the array</i></code><br>
		&emsp;<code><i>// min(array_variable)</i></code><br>
		&emsp;<code>Min: <span class="red">&lt;?php</span><span class="blue"> echo min</span>($numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code>';
		echo '<code>' . min($numbers) . '</code><br><br>';
		
		echo '
		&emsp;<code><i>// sort: function that arranges the values in the array from lowest to highest</i></code><br>
		&emsp;<code><i>// sort(array_variable)</i></code><br>
		&emsp;<code>Sort: <span class="red">&lt;?php</span><span class="blue"> echo sort</span>($numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code><pre>';		
		echo '<code>' . sort($numbers) . print_r($numbers) . '</code></pre><br><br>';
		
		echo '
		&emsp;<code><i>// rsort: function that arranges the values in the array from highest to lowest</i></code><br>
		&emsp;<code><i>// rsort(array_variable)</i></code><br>
		&emsp;<code>Reverse Sort: <span class="red">&lt;?php</span><span class="blue"> echo rsort</span>($numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code><pre>';		
		echo '<code>' . rsort($numbers) . print_r($numbers) . '</code></pre><br><br>';
		
		echo '
		&emsp;<code><i>// implode: convert an array to a character-separated string</i></code><br>
		&emsp;<code><i>// implode("character_separator",array_variable)</i></code><br>
		&emsp;<code>Implode: <span class="red">&lt;?php</span><span class="blue"> echo implode</span>(" * ",$numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code>';		
		echo '<code>' . $num_string = implode(" * ", $numbers) . '</code><br><br>';
		
		echo '
		&emsp;<code><i>// explode: convert a character-separated string to an array</i></code><br>
		&emsp;<code><i>// explode("character_separator",array_variable)</i></code><br>
		&emsp;<code>Explode: <span class="red">&lt;?php</span><span class="blue"> print_r(explode</span>(" * ",$num_string)) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code>';		
		echo '<code>' . print_r(explode(" * ", $num_string)) . '</code><br><br>';
		
		echo '
		&emsp;<code><i>// in_array: returns one if parameter value is in the array</i></code><br>
		&emsp;<code><i>// in_array(value_to_test,array_variable)</i></code><br>
		&emsp;<code>15 in array?: <span class="red">&lt;?php</span><span class="blue"> echo in_array(</span>15,$numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code>';		
		echo '<code>' . in_array(15, $numbers) . '</code><br>
		&emsp;<code>19 in array?: <span class="red">&lt;?php</span><span class="blue"> echo in_array(</span>19,$numbers) <span class="red">?&gt;</span></code><br>
		&emsp;<code><b>result:</b> </code>';		
		echo '<code>' . in_array(19, $numbers) . '</code><br><br>';
		
		echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendArrayFunctions").on("click", function() {
					$("#divArrayFunctions").slideToggle();
				});				
			});
		</script>
	</body>
</html>
