<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Comparison and Logical Operators</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
        <a href="home.php"><button id="home">Home</button></a>
		<?php
            $a = 4;
			$b = 3;
			$c = 1;
			$d = 20;
			if (($a >= $b) || ($c >= $d)) {
				$result = "a is larger than b OR ";
				$result = $result . "c is larger than d";
			}

            echo '
			<fieldset>
			<legend id="legendOperators">Comparison and Logical Operators</legend>
			<div id="divOperators">
            &emsp;<code><i>// comparison: ==,===,>,<,<=,>=</i></code><br>
            &emsp;<code><i>// logical: &&,||,!,empty,is_numeric</i></code><br>
            &emsp;<code>$a = 4;</code><br>
            &emsp;<code>$b = 3;</code><br>
            &emsp;<code>$c = 1;</code><br>
            &emsp;<code>$d = 20;</code><br>					
            &emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> if ($a >= $b) || ($c >= $d) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a is larger than b OR ";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "c is larger than d";<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp; }
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';

            $e = 100;
			if (!isset($e)) {
				$e = 200;
			}
			
            echo '		            
            &emsp;<code>$e = 100;</code><br>					
            &emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> if (!isset($e) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$e = 200;<br>               
            &emsp;&emsp;&emsp;&emsp;&emsp; }
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $e . '</code><br><br>';

            // don't reject 0 or 0.0
			$quantity = "";
			if (empty($quantity) && !is_numeric($quantity)) {
				$result1 = "You must enter a quantity.";
			}

            echo '		            
            &emsp;<code>$quantity = "";</code><br>					
            &emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> if (empty($quantity) && !is_numeric($quantity)) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = "You must enter a quantity.";<br>               
            &emsp;&emsp;&emsp;&emsp;&emsp; }
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';

			echo '</div></fieldset>';
		?>

		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendOperators").on("click", function() {
					$("#divOperators").slideToggle();
				});				
			});
		</script>
	</body>
</html>
