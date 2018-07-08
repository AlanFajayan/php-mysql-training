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
			<code class="indent01"><i>// declare variables $first and $second</i></code><br>
			<code class="indent01">$first = "The quick brown fox";</code><br>
			<code class="indent01">$second = " jumped over the lazy dog.";</code><br>
			<code class="indent01"><i>// declare variable $third and assign value of $first</i></code><br>
			<code class="indent01">$third = $first;</code><br>
			<code class="indent01"><i>// concatenate (.=) with the $second variable</i></code><br>
			<code class="indent01">$third .= $second;</code><br>
			<code class="indent01"><i>// display value of $third</i></code><br>
			<code class="indent01"><span class="red">&lt;?php</span><span class="blue"> echo</span> $third; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . $third . '</code><br><br>';			
			
			echo '
			<code class="indent01"><i>// strtolower: convert the whole string to lower case</i></code><br>
			<code class="indent01"><i>// strtolower($string_variable)</i></code><br>
			<code class="indent01">Lowercase: <span class="red">&lt;?php</span><span class="blue"> echo strtolower</span>($third); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . strtolower($third) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// strtoupper: convert the whole string to upper case</i></code><br>
			<code class="indent01"><i>// strtoupper($string_variable)</i></code><br>
			<code class="indent01">Uppercase: <span class="red">&lt;?php</span><span class="blue"> echo strtoupper</span>($third); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . strtoupper($third) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// ucfirst: convert the first letter of the string to upper case</i></code><br>
			<code class="indent01"><i>// ucfirst($string_variable)</i></code><br>
			<code class="indent01">Uppercase first: <span class="red">&lt;?php</span><span class="blue"> echo ucfirst</span>($third); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . ucfirst($third) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// ucwords: convert the first letter of each word in the string to upper case</i></code><br>
			<code class="indent01"><i>// ucwords($string_variable)</i></code><br>
			<code class="indent01">Uppercase words: <span class="red">&lt;?php</span><span class="blue"> echo ucwords</span>($third); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . ucwords($third) . '</code><br><br>';	
			echo '</div></fieldset>';
			
			echo '
			<fieldset id="fieldsetOther" class="internalFieldset">
			<legend id="legendOther">Other String Functions</legend>
			<div id="divOther">
			<code class="indent01"><i>// strlen: return length of string as an integer value</i></code><br>
			<code class="indent01"><i>// strlen($string_variable)</i></code><br>
			<code class="indent01">Length: <span class="red">&lt;?php</span><span class="blue"> echo strlen</span>($third); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . strlen($third) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// trim: remove the leading and trailing white spaces</i></code><br>
			<code class="indent01"><i>// trim("string_with_leading_and_trailing_spaces")</i></code><br>
			<code class="indent01">Trim: <span class="red">&lt;?php</span><span class="blue"> echo</span> "A" . <span class="blue">trim</span>(" BCD ") . "E"; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . 'A' . trim(" BCD ") . 'E' . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// strstr: find a substring in the string</i></code><br>
			<code class="indent01"><i>// strstr($string_variable, "substring_to_find")</i></code><br>
			<code class="indent01">Find: <span class="red">&lt;?php</span><span class="blue"> echo strstr</span>($third, "brown"); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . strstr($third, "brown") . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// str_replace: replace part of the string with another string</i></code><br>
			<code class="indent01"><i>// str_replace("substring_to_replace", "substring_to_insert", $string_variable)</i></code><br>
			<code class="indent01">Replace by string: <span class="red">&lt;?php</span><span class="blue"> echo str_replace</span>("quick", "super-fast", $third); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . str_replace("quick", "super-fast", $third) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// str_repeat: display the same string x times</i></code><br>
			<code class="indent01"><i>// str_repeat($string_variable, repeat_count)</i></code><br>
			<code class="indent01">Repeat: <span class="red">&lt;?php</span><span class="blue"> echo str_repeat</span>($third, 2); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . str_repeat($third, 2) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// substr: display a substring from the string</i></code><br>
			<code class="indent01"><i>// substr($string_variable, starting_position_int, length_int)</i></code><br>
			<code class="indent01">Make substring: <span class="red">&lt;?php</span><span class="blue"> echo substr</span>($third, 5, 10); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . substr($third, 5, 10) . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// strpos: return the integer position of a substring in a string</i></code><br>
			<code class="indent01"><i>// strpos($string_variable, substring_to_find)</i></code><br>
			<code class="indent01">Find position: <span class="red">&lt;?php</span><span class="blue"> echo strpos</span>($third, "brown"); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . strpos($third, "brown") . '</code><br><br>';
			
			echo '
			<code class="indent01"><i>// strchr: display a substring starting from the character specified</i></code><br>
			<code class="indent01"><i>// strchr($string_variable, character_to_find)</i></code><br>
			<code class="indent01">Find character: <span class="red">&lt;?php</span><span class="blue"> echo strchr</span>($third, "z"); <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
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
