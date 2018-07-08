<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: Continue</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
            $result = "";
            for ($count=0; $count <= 10; $count++) {
				if ($count % 2 == 0) { continue; }
				$result = $result . $count . ", ";
			}
			
			echo '
			<fieldset>
			<legend id="legendContinue">Loops: Continue</legend>
			<div id="divContinue">
            <code class="indent01"><i>// continue function in a for loop</i></code><br> 
            <code class="indent01">$result = "";</code><br>				
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> for ($count=0; $count <= 10; $count++) {<br>
            <span class="indent04">if ($count % 2 == 0) { continue; }</span><br> 
            <span class="indent05">$result = $result . $count . ", ";</span><br>            
            <span class="indent04">}</span><br>                       
            </span>
            <span class="red indent02">?&gt;</span></code><br>
            <code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $result1 = "";
            $count = 0;
			while ($count <= 10) {
				if ($count == 5) {
					$count++;
					continue;
				}
				$result1 = $result1 . $count . ", ";
				$count++;
			}
			
            echo '	 
            <code class="indent01"><i>// continue function in a while loop</i></code><br> 
            <code class="indent01">$result1 = "";<br>	
            &emsp; $count = 0;<br>    
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> while ($count <= 10) {<br>
            <span class="indent04">if ($count == 5) {</span><br>
            <span class="indent05">$count++;</span><br>
            <span class="indent05">continue;</span><br>               
            <span class="indent04">}</span><br>
            <span class="indent04">$result1 = $result1 . $count . ", ";</span><br>
            <span class="indent04">$count++;</span><br>  
            <span class="indent03">}</span><br>                   
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
            <code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';
            
            $result2 = "";
            for ($i=0; $i<=5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k=0; $k<=5; $k++) {
					if ($k == 3) { continue(2); }
			  	$result2 = $result2 . "<div class=\"px30\">" . $i . "-" . $k . "</div>";
				}
			}
            
            echo '  
            <code class="indent01"><i>// loop inside a loop with continue</i></code><br> 
            <code class="indent01">$result2 = "";<br>            				
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> for ($i=0; $i<=5; $i++) {<br>
            <span class="indent04">if ($i % 2 == 0) { continue(1); }</span><br>
            <span class="indent04">for ($k=0; $k<=5; $k++) {</span><br> 
            <span class="indent05">if ($k == 3) { continue(2); }</span><br>  
            <span class="indent05">$result2 = $result2 . $i . "-" . $k;</span><br>               
            <span class="indent04">}</span><br>
            <span class="indent03">}</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
            <code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result2 . '</code><br><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendContinue").on("click", function() {
					$("#divContinue").slideToggle();
				});				
			});
		</script>
	</body>
</html>
