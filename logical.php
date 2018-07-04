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
			&emsp;<code><i>// use of if, else, & elseif</i></code><br>
            &emsp;<code>$a = 3;</code><br>
            &emsp;<code>$b = 4;</code><br>					
            &emsp;<code>PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> if ($a > $b) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a is larger than b";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; } elseif ($a < $b) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a is smaller than b";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; } else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a is equal to b";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $new_user = true;
			if ($new_user) {
				$result1 = "<h1 style='margin-left:20px;'>Welcome!</h1>";
				$result1 = $result1 . "<p style='margin-left:20px;'>We are glad you decided to join us.</p>";
			}
            
            echo '			
			&emsp;<code><i>// only welcome new users</i></code><br>
            &emsp;<code>$new_user = true;</code><br>            					
            &emsp;<code>PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> if ($new_user) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = ';
            echo htmlentities("<h1>Welcome!</h1>");
            echo '<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . ';
            echo htmlentities("<p>We are glad you decided to join us.</p>");
            echo '<br>&emsp;&emsp;&emsp;&emsp;&emsp; }</span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
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
