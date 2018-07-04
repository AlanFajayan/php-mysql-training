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
                $result = "<div style='margin-left:30px;'>" . "Hello World!" . "</div>";
			}
		
			say_hello();			
			
			echo '
			<fieldset>
			<legend id="legendDefining">Functions: Defining</legend>
			<div id="divDefining">
            &emsp;<code><i>// defining and calling a function</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function say_hello() {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;global $result;<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "Hello World!";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;say_hello();<br>	                     
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<code>' . $result . '</code><br>';
            
            function say_hello_to($word) {
                return "<div style='margin-left:30px;'>Hello {$word}!</div>";
			}

			$first = say_hello_to("World");
			$second = say_hello_to("Everyone");
			
            echo '	 
            &emsp;<code><i>// defining and calling a function with a parameter</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> function say_hello_to($word) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return "Hello {$word}!";<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $first = say_hello_to("World");<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $second = say_hello_to("Everyone");<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b> result:</b> </code><br>';
            echo '<code>' . $first . $second . '</code><br>';  
            
            $third = say_hello_loudly();
			
			function say_hello_loudly() {
				return "<div style='margin-left:30px;'>HELLO WORLD!</div>";
            }
            
            echo '	 
            &emsp;<code><i>// calling a function before defining it</i></code><br>             
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $third = say_hello_loudly();<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> function say_hello_loudly() {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return "HELLO WORLD!";<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b> result:</b> </code><br>';
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
