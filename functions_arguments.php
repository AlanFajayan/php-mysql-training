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
            &emsp;<code><i>// passing an argument to a function</i></code><br> 
            &emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function say_hello_to($word) {<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$return "Hello {$word}!";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$name = "John Doe";<br>	
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = say_hello_to($name);<br>                  
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            function better_hello($greeting, $target, $punct) {
				return "<div style='margin-left:30px;'>" . $greeting . " " . $target . $punct . "</div>";
			}
		
			$result1 = better_hello("Hello", $name, "!");
			$result2 = better_hello("Greetings", $name, "!!!");
			$result3 = better_hello("Greetings", $name, null);
			
            echo '	 
            &emsp;<code><i>// passing multiple arguments to a function</i></code><br> 
            &emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> function better_hello($greeting, $target, $punct) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return $greeting . " " . $target . $punct;<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $result1 = better_hello("Hello", $name, "!");<br></span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $result2 = better_hello("Greetings", $name, "!!!");<br></span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $result3 = better_hello("Greetings", $name, null);<br></span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b> result:</b> </code><br>';
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
