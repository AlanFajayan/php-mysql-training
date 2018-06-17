<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>String Functions</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<a href="home.php"><button id="home">Home</button></a>
		<?php
			$first = "The quick brown fox";
			$second = " jumped over the lazy dog.";
			
			$third = $first;
			$third .= $second;
			
			echo '	
			<fieldset>
			<legend id="legendStrings">String Functions</legend>
			<div id="divStrings">
			<fieldset id="fieldsetCase" class="internalFieldset">
			<legend id="legendCase">String Cases</legend>
			<div id="divCase">
			&emsp;<code><i>// declare variables $first and $second</i></code><br>
			&emsp;<code>$first = "The quick brown fox";</code><br>
			&emsp;<code>$second = " jumped over the lazy dog.";</code><br>
			&emsp;<code><i>// declare variable $third and assign value of $first</i></code><br>
			&emsp;<code>$third = $first;</code><br>
			&emsp;<code><i>// concatenate (.=) with the $second variable</i></code><br>
			&emsp;<code>$third .= $second;</code><br>
			&emsp;<code><i>// display value of $third</i></code><br>
			&emsp;<code><span class="blue">echo</span> $third;</code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>{$third}</code><br><br>';
			
			echo '
			&emsp;<code><i>// strtolower: convert the whole string to lower case</i></code><br>
			&emsp;<code><i>// strtolower($string_variable)</i></code><br>
			&emsp;<code>Lowercase: <span class="red">&lt;?php</span><span class="blue"> echo strtolower</span>($third); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . strtolower($third) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// strtoupper: convert the whole string to upper case</i></code><br>
			&emsp;<code><i>// strtoupper($string_variable)</i></code><br>
			&emsp;<code>Uppercase: <span class="red">&lt;?php</span><span class="blue"> echo strtoupper</span>($third); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . strtoupper($third) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// ucfirst: convert the first letter of the string to upper case</i></code><br>
			&emsp;<code><i>// ucfirst($string_variable)</i></code><br>
			&emsp;<code>Uppercase first: <span class="red">&lt;?php</span><span class="blue"> echo ucfirst</span>($third); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . ucfirst($third) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// ucwords: convert the first letter of each word in the string to upper case</i></code><br>
			&emsp;<code><i>// ucwords($string_variable)</i></code><br>
			&emsp;<code>Uppercase words: <span class="red">&lt;?php</span> echo <span class="blue">ucwords</span>($third); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . ucwords($third) . '</code><br><br>';	
			echo '</div></fieldset>';
			
			echo '
			<fieldset id="fieldsetOther" class="internalFieldset">
			<legend id="legendOther">Other String Functions</legend>
			<div id="divOther">
			&emsp;<code><i>// strlen: return length of string as an integer value</i></code><br>
			&emsp;<code><i>// strlen($string_variable)</i></code><br>
			&emsp;<code>Length: <span class="red">&lt;?php</span><span class="blue"> echo strlen</span>($third); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . strlen($third) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// trim: remove the leading and trailing white spaces</i></code><br>
			&emsp;<code><i>// trim("string_with_leading_and_trailing_spaces")</i></code><br>
			&emsp;<code>Trim: <span class="red">&lt;?php</span><span class="blue"> echo</span> "A" . <span class="blue">trim</span>(" BCD ") . "E"; <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . 'A' . trim(" BCD ") . 'E' . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// strstr: find a substring in the string</i></code><br>
			&emsp;<code><i>// strstr($string_variable, "substring_to_find")</i></code><br>
			&emsp;<code>Find: <span class="red">&lt;?php</span><span class="blue"> echo strstr</span>($third, "brown"); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . strstr($third, "brown") . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// str_replace: replace part of the string with another string</i></code><br>
			&emsp;<code><i>// str_replace("substring_to_replace", "substring_to_insert", $string_variable)</i></code><br>
			&emsp;<code>Replace by string: <span class="red">&lt;?php</span><span class="blue"> echo str_replace</span>("quick", "super-fast", $third); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . str_replace("quick", "super-fast", $third) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// str_repeat: display the same string x times</i></code><br>
			&emsp;<code><i>// str_repeat($string_variable, repeat_count)</i></code><br>
			&emsp;<code>Repeat: <span class="red">&lt;?php</span><span class="blue"> echo str_repeat</span>($third, 2); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . str_repeat($third, 2) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// substr: display a substring from the string</i></code><br>
			&emsp;<code><i>// substr($string_variable, starting_position_int, length_int)</i></code><br>
			&emsp;<code>Make substring: <span class="red">&lt;?php</span><span class="blue"> echo substr</span>($third, 5, 10); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . substr($third, 5, 10) . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// strpos: return the integer position of a substring in a string</i></code><br>
			&emsp;<code><i>// strpos($string_variable, substring_to_find)</i></code><br>
			&emsp;<code>Find position: <span class="red">&lt;?php</span><span class="blue"> echo strpos</span>($third, "brown"); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . strpos($third, "brown") . '</code><br><br>';
			
			echo '
			&emsp;<code><i>// strchr: display a substring starting from the character specified</i></code><br>
			&emsp;<code><i>// strchr($string_variable, character_to_find)</i></code><br>
			&emsp;<code>Find character: <span class="red">&lt;?php</span><span class="blue"> echo strchr</span>($third, "z"); <span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
			echo '<code>' . strchr($third, "z") . '</code><br><br>';
			
			echo '</div></fieldset>';	
			echo '</div></fieldset>';
		
		?>
	
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#legendStrings").on("click", function() {
				$("#divStrings").slideToggle();
			});
			$("#legendCase").on("click", function() {
				$("#divCase").slideToggle();
			});
			$("#legendOther").on("click", function() {
				$("#divOther").slideToggle();
			});
		});
	</script>
	</body>
</html>
