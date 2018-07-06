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
            &emsp;<code><i>// using validation functions</i></code><br>              
            &emsp;<code>PHP Code:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php </span><br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// check for presence</i></code><br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue">function has_presence($value) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return isset($value) && $value !== "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// string max length</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function has_max_length($value, $max) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return strlen($value) <= $max;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// inclusion in a set</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function has_inclusion_in($value, $set) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return in_array($value, $set);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = has_presence("0") ? \'true\' : \'false\';<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = has_max_length("abcdef",5) ? \'true\' : \'false\';<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result3 = has_inclusion_in("5",array("1", "2", "3", "4")) ? \'true\' : \'false\';<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt; </span><br><br>            
			&emsp;<code><b> result:</b> </code>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
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
