<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Arrays</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	<a href="home.php"><button id="home">Home</button></a>
		<?php		
			$numbers = array(4,8,15,16,23,42);			
			$mixed = array(6, "fox", "dog", array("x", "y", "z"));
			
			echo '
			<fieldset>
			<legend id="legendArrays">Arrays</legend>
			<div id="divArrays">
			<code class="indent01"><i>// declare array variable $numbers with one data type</i></code><br>
			<code class="indent01">$numbers = array(4,8,15,16,23,42);</code><br><br>
			<code class="indent01"><i>// display index 0 of array $numbers</i></code><br>			
			<code class="indent01">Display index 0: <span class="red">&lt;?php</span><span class="blue"> echo</span> $numbers[0]; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . $numbers[0] . '</code><br><br>';
			
			echo '			
			<code class="indent01"><i>// declare array variable $mixed with mixed data types</i></code><br>
			<code class="indent01">$mixed = array(6, "fox", "dog", array("x", "y", "z"));</code><br><br>
			<code class="indent01"><i>// display index 2 of array $mixed</i></code><br>			
			<code class="indent01">Display index 2: <span class="red">&lt;?php</span><span class="blue"> echo</span> $mixed[2]; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . $mixed[2] . '</code><br><br>';
			
			echo '			
			<code class="indent01"><i>// display index 1 of index 3 of data type array in the array $mixed</i></code><br>						
			<code class="indent01">Display index 1 of index 3 in the array $mixed: <span class="red">&lt;?php</span><span class="blue"> echo</span> $mixed[3][1]; <span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . $mixed[3][1] . '</code><br><br>';
			
			echo '			
			<code class="indent01"><i>// pushing values into the array $mixed</i></code><br>						
			<code class="indent01">Replace index 2 ("dog") with "cat": <span class="red">&lt;?php</span><span class="blue"> echo</span> $mixed[2] = "cat"; <span class="red">?&gt;</span></code><br>
			<code class="indent01">Insert index 4 with value "mouse": <span class="red">&lt;?php</span><span class="blue"> echo</span> $mixed[4] = "mouse"; <span class="red">?&gt;</span></code><br>
			<code class="indent01">Insert as last index the value "horse": <span class="red">&lt;?php</span><span class="blue"> echo</span> $mixed[] = "horse"; <span class="red">?&gt;</span></code><br><br>
			<code class="indent01"><i>//display the array $mixed using the print_r function</i></code><br>						
			<code class="indent01"><span class="red">&lt;?php</span><span class="blue"> echo print_r</span>($mixed)<span class="red">?></span><br> 
			<code class="indent01"><b>result:</b> </code><pre>';
			echo '<code>' . print_r($mixed) . '</code></pre><br><br>';
			
			echo '			
			<code class="indent01"><i>// short array syntax</i></code><br>
			<code class="indent01">$mixed = [6, "fox", "dog", ["x", "y", "z"]];</code><br><br>';	
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendArrays").on("click", function() {
					$("#divArrays").slideToggle();
				});				
			});
		</script>
	</body>
</html>
