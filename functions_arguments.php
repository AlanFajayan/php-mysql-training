<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Arguments</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            function say_hello_to($word) {
                return "Hello {$word}!";
            }

            $name = "John Doe";
            $result = say_hello_to($name);			
			
			echo '
			<fieldset>
			<legend id="legendArguments">Functions: Arguments</legend>
			<div id="divArguments">
            <code class="indent01"><i>// passing an argument to a function</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">function say_hello_to($word) {<br>             
            <span class="indent04">$return "Hello {$word}!";</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">$name = "John Doe";</span><br>	
            <span class="indent03">$result = say_hello_to($name);</span><br>                  
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            function better_hello($greeting, $target, $punct) {
				return "<div style='margin-left:30px;'>" . $greeting . " " . $target . $punct . "</div>";
			}
		
			$result1 = better_hello("Hello", $name, "!");
			$result2 = better_hello("Greetings", $name, "!!!");
			$result3 = better_hello("Greetings", $name, null);
			
            echo '	 
            <code class="indent01"><i>// passing multiple arguments to a function</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">function better_hello($greeting, $target, $punct) {<br>
            <span class="indent04">return $greeting . " " . $target . $punct;</span><br> 
            <span class="indent03">}</span><br>  
            <span class="indent03"> $result1 = better_hello("Hello", $name, "!");</span><br>
            <span class="indent03"> $result2 = better_hello("Greetings", $name, "!!!");</span><br>
            <span class="indent03"> $result3 = better_hello("Greetings", $name, null);</span><br>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b> result:</b> </code><br>';
            echo '<code>' . $result1 . $result2 . $result3 . '</code><br>';  
            
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendArguments").on("click", function() {
					$("#divArguments").slideToggle();
				});				
			});
		</script>
	</body>
</html>
