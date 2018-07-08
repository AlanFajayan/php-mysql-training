<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Associative Arrays</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	<a href="home.php"><button id="home">Home</button></a>
		<?php
		$assoc = array("first_name" => "Kevin", "last_name" => "Skoglund");
		
		echo '
		<fieldset>
		<legend id="legendAssocArrays">Associative Arrays</legend>
		<div id="divAssocArrays">
		<code class="indent01"><i>// declare associative array variable $assoc</i></code><br>
		<code class="indent01">$assoc = array("first_name" => "Kevin", "last_name" => "Skoglund");</code><br><br>
		<code class="indent01"><i>// display index "first_name"</i></code><br>			
		<code class="indent01">Display index "first_name": <span class="red">&lt;?php</span><span class="blue"> echo $assoc</span>["first_name"]; <span class="red">?&gt;</span></code><br>
		<code class="indent01"><b>result:</b> </code>';
		echo '<code>' . $assoc["first_name"] . '</code><br><br>
		<code class="indent01"><i>// display index "first_name" and concatenate with index "last_name"</i></code><br>			
		<code class="indent01">Concatenate index values: <span class="red">&lt;?php</span><span class="blue"> echo $assoc</span>["first_name"] . " " . <span class="blue">$assoc</span>["last_name"]; <span class="red">?&gt;</span></code><br>
		<code class="indent01"><b>result:</b> </code>';
		echo '<code>' . $assoc["first_name"] . " " . $assoc["last_name"] . '</code><br><br>
		<code class="indent01"><i>// replace value of index "first_name"</i></code><br>			
		<code class="indent01">Replace index value: <span class="red">&lt;?php</span><span class="blue"> $assoc</span>["first_name"] = "Larry"; <span class="red">?&gt;</span></code><br>
		<code class="indent01"><b>result:</b> </code>';
		echo '<code>' . $assoc["first_name"] = "Larry" . '</code><br><br>';
		
		echo '			
		<code class="indent01"><i>// dynamic array vs. associative array</i></code><br>	
		<code class="indent01"><span class="red">&lt;?php</span><span class="blue"> echo</span> $numbers = array(4,8,15,16,23,42); <span class="red">?&gt;</span></code><br>
		<code class="indent01"><span class="red">&lt;?php</span><span class="blue"> echo</span> $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); <span class="red">?&gt;</span></code><br><br>';
		
		echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendAssocArrays").on("click", function() {
					$("#divAssocArrays").slideToggle();
				});				
			});
		</script>
	</body>
</html>
