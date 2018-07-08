<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>If, Else, ElseIf</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
		<?php		
			$a = 3;
			$b = 4;
			
			if ($a > $b) {
				$result = "a is larger than b";
			} elseif ($a < $b) {
				$result = "a is smaller than b";
			} else {
				$result = "a is equal to b";
			}
			
			echo '
			<fieldset>
			<legend id="legendLogical">Logical Expressions</legend>
			<div id="divLogical">
			<code class="indent01"><i>// use of if, else, & elseif</i></code><br>
            <code class="indent01">$a = 3;</code><br>
            <code class="indent01">$b = 4;</code><br>					
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> if ($a > $b) {<br>
            <span class="indent04">$result = "a is larger than b";</span><br>
            <span class="indent03"> } elseif ($a < $b) </span>{<br>
			<span class="indent04">$result = "a is smaller than b";</span><br>
            <span class="indent03"> } else {</span><br>
			<span class="indent04">$result = "a is equal to b";</span><br>
			<span class="indent03"> }</span>
			</span><br>
			<span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $new_user = true;
			if ($new_user) {
				$result1 = "<h1 class=\"px20\">Welcome!</h1>";
				$result1 = $result1 . "<p class=\"px20\">We are glad you decided to join us.</p>";
			}
            
            echo '			
			<code class="indent01"><i>// only welcome new users</i></code><br>
            <code class="indent01">$new_user = true;</code><br>            					
            <code class="indent01">PHP Code:<br> <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> if ($new_user) {<br>
			<span class="indent04">$result1 = ';
            echo htmlentities("<h1>Welcome!</h1>");
            echo '<br><span class="indent04">$result1 = $result1 . ';
            echo htmlentities("<p>We are glad you decided to join us.</p>");
            echo '<br><span class="indent03"> }</span>
            <br><span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendLogical").on("click", function() {
					$("#divLogical").slideToggle();
				});				
			});
		</script>
	</body>
</html>
