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
            <code class="indent01"><i>// debugging using var_dump</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$number = 99;<br>             
            <span class="indent03">$string = "Bug?";</span><br>	
            <span class="indent03">$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");</span><br>
            <span class="indent03">var_dump($number);</span><br>
            <span class="indent03">var_dump($string);</span><br>
            <span class="indent03">var_dump($array);</span><br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<div class="px30"><code>';
            var_dump($number);
            echo '</code></div>'; 
            echo '<div class="px30"><code>';
            var_dump($string);
            echo '</code></div>'; 
            echo '<div class="px30"><code>';
            var_dump($array);
            echo '</code></div><br>';            
            
            //print_r(get_defined_vars());

            echo '	 
            <code class="indent01"><i>// debugging with get_defined_vars()</i></code><br>  
            <code class="indent01">PHP Code:<br>  
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> print_r(get_defined_vars());<br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b> result:</b> </code><br>';
            echo '<div class="px30"><code><pre>';
            print_r(get_defined_vars());
            echo '</pre></code></div>';

            function say_hello_to($word) {                
                return "<div class=\"px30\">Hello {$word}!</div>" . var_dump(debug_backtrace()); 
            }
            
            //say_hello_to('Everyone');            

            echo '	 
            <code class="indent01"><i>// debugging with debug_backtrace()</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> function say_hello_to($word) {<br> 
            <span class="indent04">return "Hello {$word}!";</span><br>
            <span class="indent04">var_dump(debug_backtrace());</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">say_hello_to(\'Everyone\');</span><br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
            <code class="indent01"><b> result:</b> </code><br>
            <pre><div class="px30">';
            echo '</div></pre><code><div class=\"px30\">' . say_hello_to('Everyone') . '</div></code><br>';

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
