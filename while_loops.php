<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: While</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
		<?php		
            $count = 0;
            $result = "";
			while ($count <= 10) {
				if ($count == 5) {
					$result = $result . "FIVE, ";
				} else {
					$result = $result . $count . ", ";
				}
				$count++;  // increment by 1
			}			
			$output = "Count: {$result}";
			
			echo '
			<fieldset>
			<legend id="legendWhile">Loops: While</legend>
			<div id="divWhile">
			&emsp;<code><i>// while loop</i></code><br>
            &emsp;<code>$count = 0;</code><br>
            &emsp;<code>$result = "";</code><br>				
			&emsp;<code>PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> while ($count <= 10) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($count == 5) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "FIVE, ";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; } else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . $count . ", ";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; $count++;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; $output = "Count: {$result}";<br>            
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $output . '</code><br><br>';
            
            $count = 1;
            $result1 = "<br>";
			while ($count < 20) {
				if($count % 2 == 0) {
					$result1 = $result1 . "<div style='margin-left: 30px;'>{$count} is even</div>";
				} else {
					$result1 = $result1 . "<div style='margin-left: 30px;'>{$count} is odd</div>";
				}
				$count++;
			}
			
			echo '			
            &emsp;<code>$count = 1;</code><br>
            &emsp;<code>$result1 = "' . htmlentities("<br>") . '";</code><br>				
			&emsp;<code>PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> while ($count < 20) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if($count % 2 == 0) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . "{$count} is even";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; } else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . "{$count} is odd";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; $count++;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';		
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendWhile").on("click", function() {
					$("#divWhile").slideToggle();
				});				
			});
		</script>
	</body>
</html>
