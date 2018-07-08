<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Default Argument Values</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            function paint($room="office",$color="red") {
				return "<div class=\"px30\">" . "The color of the {$room} is {$color}.</div>";
			}
		
			$result1 = paint();
			$result2 = paint("bedroom", "blue");
			$result3 = paint("bedroom", null);
			$result4 = paint("bedroom");
			$result5 = paint("blue");
			
			echo '
			<fieldset>
			<legend id="legendDefaults">Functions: Default Argument Values</legend>
			<div id="divDefaults">
            <code class="indent01"><i>// setting default argument values</i></code><br> 
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">function paint($room="office",$color="red") {<br>   
            <span class="indent04">return "The color of the {$room} is {$color}.";</span><br>  
            <span class="indent03">}</span><br>
            <span class="indent03">$result1 = paint();</span><br>	
            <span class="indent03">$result2 = paint("bedroom", "blue");</span><br>
            <span class="indent03">$result3 = paint("bedroom", null);</span><br>
            <span class="indent03">$result4 = paint("bedroom");</span><br>
            <span class="indent03">$result5 = paint("blue");</span><br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . $result2 . $result3 . $result4 . $result5 . '</code><br><br>';            
                        
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendDefaults").on("click", function() {
					$("#divDefaults").slideToggle();
				});				
			});
		</script>
	</body>
</html>
