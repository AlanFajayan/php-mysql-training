<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Custom Validation Functions</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>

        <?php
            function has_presence($value) {
                return isset($value) && $value !== "";
            }
            
            // string max length
            function has_max_length($value, $max) {
                return strlen($value) <= $max;
            }
            
            // inclusion in a set
            function has_inclusion_in($value, $set) {
                return in_array($value, $set);
            }       
            
            $result1 = has_presence("0") ? 'true' : 'false';
            $result2 = has_max_length("abcdef",5) ? 'true' : 'false';
            $result3 = has_inclusion_in("5",array("1", "2", "3", "4")) ? 'true' : 'false';
            //$result4 = 
            

			echo '
			<fieldset>
			<legend id="legendFunctions">Custom Validation Functions</legend>
			<div id="divFunctions">
            <code class="indent01"><i>// using validation functions</i></code><br>              
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php </span><br> 
            <code class="indent03"><i>// check for presence</i></code><br> 
            <span class="blue indent03">function has_presence($value) {<br>
            <span class="indent04">return isset($value) && $value !== "";</span><br>
            <span class="indent04">}</span><br> 
            <code class="indent03"><i>// string max length</i></code><br>
            <span class="indent03">function has_max_length($value, $max) {<br>
            <span class="indent04">return strlen($value) <= $max;</span><br>
            <span class="indent03">}</span><br>
            <code class="indent03"><i>// inclusion in a set</i></code><br>
            <span class="indent03">function has_inclusion_in($value, $set) {</span><br>
            <span class="indent04">return in_array($value, $set);</span><br>
            <span class="indent03">}</span><br><br>
            <span class="indent03">$result1 = has_presence("0") ? \'true\' : \'false\';</span><br>
            <span class="indent03">$result2 = has_max_length("abcdef",5) ? \'true\' : \'false\';</span><br>
            <span class="indent03">$result3 = has_inclusion_in("5",array("1", "2", "3", "4")) ? \'true\' : \'false\';</span><br>
            </span>
            <span class="red indent02">?&gt; </span></code><br><br>            
			<code class="indent01"><b> result:</b> </code>';
            echo '<div class="px30"><code><pre>';
            echo 'has_presence("0") = ' . $result1 . '<br>';
            echo 'has_max_length("abcdef",5) = ' . $result2 . '<br>';
            echo 'has_inclusion_in("5",array("1", "2", "3", "4")) = ' . $result3 . '<br>';
            echo '</pre></code></div>';
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendFunctions").on("click", function() {
					$("#divFunctions").slideToggle();
				});				
			});
		</script>
	</body>
</html>
