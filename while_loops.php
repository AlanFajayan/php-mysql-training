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
			<code class="indent01"><i>// while loop</i></code><br>
            <code class="indent01">$count = 0;</code><br>
            <code class="indent01">$result = "";</code><br>				
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> while ($count <= 10) {<br>
            <span class="indent04">if ($count == 5) {</span><br>
            <span class="indent05">$result = $result . "FIVE, ";</span><br>
            <span class="indent04">} else {</span><br>
			<span class="indent05">$result = $result . $count . ", ";</span><br>
            <span class="indent04">}</span><br>
            <span class="indent04">$count++;</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">$output = "Count: {$result}";</span><br>            
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $output . '</code><br><br>';
            
            $count = 1;
            $result1 = "<br>";
			while ($count < 20) {
				if($count % 2 == 0) {
					$result1 = $result1 . "<div class=\"px30\">{$count} is even</div>";
				} else {
					$result1 = $result1 . "<div class=\"px30\">{$count} is odd</div>";
				}
				$count++;
			}
			
			echo '			
            <code class="indent01">$count = 1;</code><br>
            <code class="indent01">$result1 = "' . htmlentities("<br>") . '";</code><br>	
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> while ($count < 20) {<br>
            <span class="indent04">if($count % 2 == 0) {</span><br>
			<span class="indent05">$result1 = $result1 . "{$count} is even";</span><br>
            <span class="indent04">} else {</span><br>
			<span class="indent05">$result1 = $result1 . "{$count} is odd";</span><br>
            <span class="indent04">}</span><br>
            <span class="indent04">$count++;</span><br>
            <span class="indent03">}</span><br>                       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
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
