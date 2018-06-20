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
			$result = $result . "<div style='margin-left:30px;'>" . "1: " . current($ages) . "</div>";
		
			// next: move the pointer forward
			// similar to using 'continue' inside a loop
			next($ages);
			$result = $result . "<div style='margin-left:30px;'>" . "2: " . current($ages) . "</div>";

			next($ages);
			next($ages);
			$result = $result . "<div style='margin-left:30px;'>" . "3: " . current($ages) . "</div>";
		
			// prev: move the pointer backward
			prev($ages);
			$result = $result . "<div style='margin-left:30px;'>" . "4: " . current($ages) . "</div>";
		
			// reset: move the pointer to the first element
			reset($ages);
			$result = $result . "<div style='margin-left:30px;'>" . "5: " . current($ages) . "</div>";

			// end: move the pointer to the last element
			end($ages);
			$result = $result . "<div style='margin-left:30px;'>" . "6: " . current($ages) . "</div>";
		
			// move the pointer past the last element
			next($ages);
			$result = $result . "<div style='margin-left:30px;'>" . "7: " . current($ages) . "</div>";
			
			echo '
			<fieldset>
			<legend id="legendPointers">Loops: Pointers</legend>
			<div id="divPointers">
            &emsp;<code><i>// array pointers</i></code><br>                      
            &emsp;<code>$result = "";<br>	
            &emsp; $ages = array(4,8,15,16,23,42);<br>
            &emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// current: current pointer value</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "1: " . current($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// next: move the pointer forward</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// similar to using \'continue\' inside a loop</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;next($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "2: " . current($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;next($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;next($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "3: " . current($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// prev: move the pointer backward</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;prev($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "4: " . current($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// reset: move the pointer to the first element</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;reset($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "5: " . current($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// end: move the pointer to the last element</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;end($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "6: " . current($ages);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// move the pointer past the last element</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;next($ages);<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "7: " . current($ages);</code><br>	                     
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $result1 = "";
            reset($ages);
			
			// while loop that moves the array pointer
			// similar to foreach
			while($age = current($ages)) {
				$result1 = $result1 . $age . ", ";
				next($ages);
			}
			
            echo '	 
            &emsp;<code><i>// pointers in a while loop</i></code><br>                      
            &emsp;<code>$result1 = "";<br>	
            &emsp; reset($ages);<br>    
            &emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> while($age = current($ages)) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . $age . ", ";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;next($ages);<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                   
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;&emsp;<code><b>result:</b> </code>';
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
