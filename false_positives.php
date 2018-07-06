<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Problems with Validation Logic</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>

        <?php	
            function is_equal($value1, $value2) {
				$output = "{$value1} == {$value2} returns ";
				if($value1 == $value2) {
					$output .= "true";
				} else {
					$output .= "false";
				}
				return $output;
			}

			echo '
			<fieldset>
			<legend id="legendFalsePositives">Problems with Validation Logic</legend>
			<div id="divFalsePositives">
            &emsp;<code><i>// false positives - problems with validation logic</i></code><br>              
            &emsp;<code>PHP Code:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// check for equality: ==</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php </span><br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue">function is_equal($value1, $value2) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$output = "{$value1} == {$value2} returns ";<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if($value1 == $value2) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$output .= "true";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$output .= "false";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return $output;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(0, false)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(4, true)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(0, null)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(0, "0")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(0, "")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(0, "a")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal("1", "01")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal("", null)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(3, "3 dogs")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(100, "1e2")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal(100, 100.00)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal("abc", true)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal("123", "   123")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_equal("123", "+0123")<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt; </span><br><br>            
			&emsp;<code><b> result:</b> </code>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
            echo 'is_equal(0, false): ' . is_equal(0, false) . '<br>';
			echo 'is_equal(4, true): ' . is_equal(4, true) . '<br>';
			echo 'is_equal(0, null): ' . is_equal(0, null) . '<br>';
			echo 'is_equal(0, "0"): ' . is_equal(0, "0") . '<br>';
			echo 'is_equal(0, ""): ' . is_equal(0, "") . '<br>';
			echo 'is_equal(0, "a"): ' . is_equal(0, "a") . '<br>';
			echo 'is_equal("1", "01"): ' . is_equal("1", "01") . '<br>';
			echo 'is_equal("", null): ' . is_equal("", null) . '<br>';
			echo 'is_equal(3, "3 dogs"): ' . is_equal(3, "3 dogs") . '<br>';
			echo 'is_equal(100, "1e2"): ' . is_equal(100, "1e2") . '<br>';
			echo 'is_equal(100, 100.00): ' . is_equal(100, 100.00) . '<br>';
			echo 'is_equal("abc", true): ' . is_equal("abc", true) . '<br>';
			echo 'is_equal("123", "   123"): ' . is_equal("123", "   123") . '<br>';
			echo 'is_equal("123", "+0123")' . is_equal("123", "+0123") . '<br>';
            echo '</pre></code></div>';

            function is_exact($value1, $value2) {
				$output1 = "{$value1} === {$value2} returns ";
				if($value1 === $value2) {
					$output1 .= "true";
				} else {
					$output1 .= "false";
				}
				return $output1;
            }
            
            echo '
            &emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// check for exactness: ===</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php </span><br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue">function is_exact($value1, $value2) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$output = "{$value1} === {$value2} returns  ";<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if($value1 === $value2) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$output .= "true";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$output .= "false";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return $output;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(0, false)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(4, true)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(0, null)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(0, "0")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(0, "")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(0, "a")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact("1", "01")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact("", null)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(3, "3 dogs")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(100, "1e2")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact(100, 100.00)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact("abc", true)<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact("123", "   123")<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo is_exact("123", "+0123")<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt; </span><br><br>            
			&emsp;<code><b> result:</b> </code>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
            echo 'is_exact(0, false): ' . is_exact(0, false) . '<br>';
			echo 'is_exact(4, true): ' . is_exact(4, true) . '<br>';
			echo 'is_exact(0, null): ' . is_exact(0, null) . '<br>';
			echo 'is_exact(0, "0"): ' . is_exact(0, "0") . '<br>';
			echo 'is_exact(0, ""): ' . is_exact(0, "") . '<br>';
			echo 'is_exact(0, "a"): ' . is_exact(0, "a") . '<br>';
			echo 'is_exact("1", "01"): ' . is_exact("1", "01") . '<br>';
			echo 'is_exact("", null): ' . is_exact("", null) . '<br>';
			echo 'is_exact(3, "3 dogs"): ' . is_exact(3, "3 dogs") . '<br>';
			echo 'is_exact(100, "1e2"): ' . is_exact(100, "1e2") . '<br>';
			echo 'is_exact(100, 100.00): ' . is_exact(100, 100.00) . '<br>';
			echo 'is_exact("abc", true): ' . is_exact("abc", true) . '<br>';
			echo 'is_exact("123", "   123"): ' . is_exact("123", "   123") . '<br>';
            echo 'is_exact("123", "+0123")' . is_exact("123", "+0123") . '<br>';   
            echo '</pre></code></div>';
            
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendFalsePositives").on("click", function() {
					$("#divFalsePositives").slideToggle();
				});				
			});
		</script>
	</body>
</html>
