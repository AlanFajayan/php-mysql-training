<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Debugging</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            $number = 99;
			$string = "Bug?";
			$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");
			
			//var_dump($number);
			//var_dump($string);
			//var_dump($array);
			
			echo '
			<fieldset>
			<legend id="legendDebugging">Debugging</legend>
			<div id="divDebugging">
            &emsp;<code><i>// debugging using var_dump</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$number = 99;<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$string = "Bug?";<br>	
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;var_dump($number);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;var_dump($string);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;var_dump($array);<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<div style=\'margin-left:30px;\'><code>';
            var_dump($number);
            echo '</code></div>'; 
            echo '<div style=\'margin-left:30px;\'><code>';
            var_dump($string);
            echo '</code></div>'; 
            echo '<div style=\'margin-left:30px;\'><code>';
            var_dump($array);
            echo '</code></div><br>';            
            
            //print_r(get_defined_vars());

            echo '	 
            &emsp;<code><i>// debugging with get_defined_vars()</i></code><br>             
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> print_r(get_defined_vars());<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b> result:</b> </code><br>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
            print_r(get_defined_vars());
            echo '</pre></code></div>';

            function say_hello_to($word) {
                var_dump(debug_backtrace());
                return "<div style='margin-left:30px;'>Hello {$word}!</div>";                                
            }
            
            //say_hello_to('Everyone');            

            echo '	 
            &emsp;<code><i>// debugging with debug_backtrace()</i></code><br>             
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> function say_hello_to($word) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return "Hello {$word}!";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;var_dump(debug_backtrace());<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; say_hello_to(\'Everyone\');<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b> result:</b> </code><br>';
            echo '<code>' . say_hello_to('Everyone') . '</code><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendDebugging").on("click", function() {
					$("#divDebugging").slideToggle();
				});				
			});
		</script>
	</body>
</html>
