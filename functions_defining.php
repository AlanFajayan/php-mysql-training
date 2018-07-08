<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Defining</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            function say_hello() {
                global $result;
                $result = "<div class=\"px30\">" . "Hello World!" . "</div>";
			}
		
			say_hello();			
			
			echo '
			<fieldset>
			<legend id="legendDefining">Functions: Defining</legend>
			<div id="divDefining">
            <code class="indent01"><i>// defining and calling a function</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue">            
            <span class="indent03">function say_hello() {</span><br> 
            <span class="indent04">global $result;</span><br>  
            <span class="indent04">$result = "Hello World!";</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">say_hello();</span><br>	                     
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br>';
            
            function say_hello_to($word) {
                return "<div class=\"px30\">>Hello {$word}!</div>";
			}

			$first = say_hello_to("World");
			$second = say_hello_to("Everyone");
			
            echo '	 
            <code class="indent01"><i>// defining and calling a function with a parameter</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> function say_hello_to($word) {<br>
            <span class="indent04">return "Hello {$word}!";</span><br>             
            <span class="indent03">}</span><br>  
            <span class="indent03">$first = say_hello_to("World");</span><br>            
            <span class="indent03">$second = say_hello_to("Everyone");</span><br>            
            <span class="red indent02">?&gt;</span></code><br></span>
			<code class="indent01"><b> result:</b> </code><br>';
            echo '<code>' . $first . $second . '</code><br>';  
            
            $third = say_hello_loudly();
			
			function say_hello_loudly() {
				return "<div class=\"px30\">>HELLO WORLD!</div>";
            }
            
            echo '	 
            <code class="indent01"><i>// calling a function before defining it</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$third = say_hello_loudly();<br>
            <span class="indent03">function say_hello_loudly() {</span><br>
            <span class="indent04">return "HELLO WORLD!";</span><br> 
            <span class="indent03">}</span><br> </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b> result:</b> </code><br>';
            echo '<code>' . $third . '</code><br><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendDefining").on("click", function() {
					$("#divDefining").slideToggle();
				});				
			});
		</script>
	</body>
</html>
