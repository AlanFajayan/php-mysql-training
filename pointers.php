<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: Pointers</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
            $result = "";
            $ages = array(4,8,15,16,23,42);
		
			// current: current pointer value
			$result = $result . "<div class=\"px30\">" . "1: " . current($ages) . "</div>";
		
			// next: move the pointer forward
			// similar to using 'continue' inside a loop
			next($ages);
			$result = $result . "<div class=\"px30\">" . "2: " . current($ages) . "</div>";

			next($ages);
			next($ages);
			$result = $result . "<div class=\"px30\">" . "3: " . current($ages) . "</div>";
		
			// prev: move the pointer backward
			prev($ages);
			$result = $result . "<div class=\"px30\">" . "4: " . current($ages) . "</div>";
		
			// reset: move the pointer to the first element
			reset($ages);
			$result = $result . "<div class=\"px30\">" . "5: " . current($ages) . "</div>";

			// end: move the pointer to the last element
			end($ages);
			$result = $result . "<div class=\"px30\">" . "6: " . current($ages) . "</div>";
		
			// move the pointer past the last element
			next($ages);
			$result = $result . "<div class=\"px30\">" . "7: " . current($ages) . "</div>";
			
			echo '
			<fieldset>
			<legend id="legendPointers">Loops: Pointers</legend>
			<div id="divPointers">
            <code class="indent01"><i>// array pointers</i></code><br>                      
            <code class="indent01">$result = "";</code><br>	
            <code class="indent01">$ages = array(4,8,15,16,23,42);</code><br>
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue">
            <code class="indent03"><i>// current: current pointer value</i></code><br>
            <code class="indent03">$result = $result . "1: " . current($ages);</code><br>
            <code class="indent03"><i>// next: move the pointer forward</i></code><br>
            <code class="indent03"><i>// similar to using \'continue\' inside a loop</i></code><br>
            <code class="indent03">next($ages);</code><br>
            <code class="indent03">$result = $result . "2: " . current($ages);</code><br>
            <code class="indent03">next($ages);</code><br>
            <code class="indent03">next($ages);</code><br>
            <code class="indent03">$result = $result . "3: " . current($ages);</code><br>
            <code class="indent03"><i>// prev: move the pointer backward</i></code><br>
            <code class="indent03">prev($ages);</code><br>
            <code class="indent03">$result = $result . "4: " . current($ages);</code><br>
            <code class="indent03"><i>// reset: move the pointer to the first element</i></code><br>
            <code class="indent03">reset($ages);</code><br>
            <code class="indent03">$result = $result . "5: " . current($ages);</code><br>
            <code class="indent03"><i>// end: move the pointer to the last element</i></code><br>
            <code class="indent03">end($ages);</code><br>
            <code class="indent03">$result = $result . "6: " . current($ages);</code><br>
            <code class="indent03"><i>// move the pointer past the last element</i></code><br>
            <code class="indent03">next($ages);</code><br>            
            <code class="indent03">$result = $result . "7: " . current($ages);</code><br>	
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br>';
            
            $result1 = "";
            reset($ages);
			
			// while loop that moves the array pointer
			// similar to foreach
			while($age = current($ages)) {
				$result1 = $result1 . $age . ", ";
				next($ages);
			}
			
            echo '	 
            <code class="indent01"><i>// pointers in a while loop</i></code><br> 
            <code class="indent01">$result1 = "";<br>	
            &emsp; reset($ages);<br>    
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> while($age = current($ages)) {<br>
            <span class="indent04">$result1 = $result1 . $age . ", ";</span><br>
            <span class="indent04">next($ages);</span><br> 
            <span class="indent03">}</span><br>                   
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';            

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendPointers").on("click", function() {
					$("#divPointers").slideToggle();
				});				
			});
		</script>
	</body>
</html>
