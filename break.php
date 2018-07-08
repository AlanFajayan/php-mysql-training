<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: Break</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
            $result = "";
            for ($count=0; $count <= 10; $count++) {
				if ($count == 5) {
					break;
				}
				$result = $result . $count . ", ";
			}
			
			echo '
			<fieldset>
			<legend id="legendBreak">Loops: Break</legend>
			<div id="divBreak">
            <code class="indent01"><i>// break function in a for loop</i></code><br>
            <code class="indent01">$result = "";</code><br>				
			<code class="indent01">PHP Code:<br>
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> for ($count=0; $count <= 10; $count++) {<br>
            <span class="indent04">if ($count == 5) {</span><br> 
            <span class="indent05">break;</span><br>            
            <span class="indent04">}</span><br>
            <span class="indent04">$result = $result . $count . ", ";</span><br> 
            <span class="indent03">}</span><br>                
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';            
            
            $result1 = "";
            for ($i=0; $i<=5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k=0; $k<=5; $k++) {
					if ($k == 3) { break(2); }
			  	$result1 = $result1 . "<div style='margin-left:30px;'>" .$i . "-" . $k . "</div>";
				}
			}
            
            echo '  
            <code class="indent01"><i>// loop inside a loop with break</i></code><br> 
            <code class="indent01">$result1 = "";<br>            				
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> for ($i=0; $i<=5; $i++) {<br>
            <span class="indent04">if ($i % 2 == 0) { continue(1); }</span><br>
            <span class="indent04">for ($k=0; $k<=5; $k++) {</span><br> 
            <span class="indent05">if ($k == 3) { break(2); }</span><br>  
            <span class="indent05">$result1 = $result1 . $i . "-" . $k;</span><br>               
            <span class="indent04">}</span><br>
            <span class="indent03">}</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b> result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendBreak").on("click", function() {
					$("#divBreak").slideToggle();
				});				
			});
		</script>
	</body>
</html>
