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
				<code class="indent01"><i>// get the data type of a variable</i></code><br>
				<code class="indent01">$count = "2";</code><br>
				<code class="indent01">Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count); <span class="red">?&gt;</span></code><br>		
				<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . gettype($count) . '</code><br><br>';
                        
            $count += 3;
			echo '		
				<code class="indent01">$count += 3;</code><br>
				<code class="indent01">Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count); <span class="red">?&gt;</span></code><br>		
				<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . gettype($count) . '</code><br><br>';

            $cats = "I have " . $count . " cats.";
            echo '		
				<code class="indent01">$cats = "I have " . $count . " cats.";</code><br>
				<code class="indent01">Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($cats); <span class="red">?&gt;</span></code><br>		
				<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . gettype($cats) . '</code><br><br></fieldset><br>';

            settype($count, "integer");
            echo '
				<fieldset>
				<legend id="legendCasting">Type Casting</legend>
				<div id="divCasting">
				<code class="indent01"><i>// set the data type of a variable</i></code><br>
				<code class="indent01">settype($count, "integer");</code><br>
				<code class="indent01">Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count, "integer"); <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . gettype($count) . '</code><br><br>';

            $count2 = (string) $count;
            echo '		
				<code class="indent01">$count2 = (string) $count;</code><br>
				<code class="indent01">Type: <span class="red">&lt;?php</span><span class="blue"> echo gettype</span>($count2); <span class="red">?&gt;</span></code><br>		
				<code class="indent01"><b>result:</b> </code>';
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
