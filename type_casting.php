<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Type Juggling and Type Casting</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
    <a href="home.php"><button id="home">Home</button></a>
		<?php		
			$count = "2";				
			echo '
				<fieldset>
				<legend id="legendJuggling">Type Juggling</legend>
				<div id="divJuggling">
				&emsp;<code><i>// get the data type of a variable</i></code><br>
				&emsp;<code>$count = "2";</code><br>
				&emsp;<code>Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count); <span class="red">?&gt;</span></code><br>		
				&emsp;<code><b>result:</b> </code>';
            echo '<code>' . gettype($count) . '</code><br><br>';
                        
            $count += 3;
			echo '		
				&emsp;<code>$count += 3;</code><br>
				&emsp;<code>Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count); <span class="red">?&gt;</span></code><br>		
				&emsp;<code><b>result:</b> </code>';
            echo '<code>' . gettype($count) . '</code><br><br>';

            $cats = "I have " . $count . " cats.";
            echo '		
				&emsp;<code>$cats = "I have " . $count . " cats.";</code><br>
				&emsp;<code>Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($cats); <span class="red">?&gt;</span></code><br>		
				&emsp;<code><b>result:</b> </code>';
            echo '<code>' . gettype($cats) . '</code><br><br></fieldset><br>';

            settype($count, "integer");
            echo '
				<fieldset>
				<legend id="legendCasting">Type Casting</legend>
				<div id="divCasting">
				&emsp;<code><i>// set the data type of a variable</i></code><br>
				&emsp;<code>settype($count, "integer");</code><br>
				&emsp;<code>Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count, "integer"); <span class="red">?&gt;</span></code><br>		
				&emsp;<code><b>result:</b> </code>';
            echo '<code>' . gettype($count) . '</code><br><br>';

            $count2 = (string) $count;
            echo '		
				&emsp;<code>$count2 = (string) $count;</code><br>
				&emsp;<code>Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count2); <span class="red">?&gt;</span></code><br>		
				&emsp;<code><b>result:</b> </code>';
            echo '<code>' . gettype($count2) . '</code><br><br>';      
        ?>
	
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendJuggling").on("click", function() {
					$("#divJuggling").slideToggle();
				});	
                $("#legendCasting").on("click", function() {
					$("#divCasting").slideToggle();
				});				
			});
		</script>
	</body>
</html>
