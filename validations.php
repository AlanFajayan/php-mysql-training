<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Validating Form Values</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>

        <?php	
            // * presence
            // use trim() so empty spaces don't count
            // use === to avoid false positives
            // empty() would consider "0" to be empty
            $value1 = trim("0");
            if (!isset($value1) || $value1 === "") {
                $result1 = "value presence not detected";
            } else {
                $result1 = "value presence passed validation";
            }
            
            // * string length
            // minimum length
            $value2 = "abcd";
            $min = 3;
            if (strlen($value2) < $min) {
                $result2 = "value does not meet minimum length";
            } else {
                $result2 = "value passed minimum length validation";
            }
            // max length
            $max = 6;
            if (strlen($value2) > $max) {
                $result3 = "value does not meet maximum length";
            } else {
                $result3 = "value passed maximum length validation";
            }
            
            // * type
            $value3= "1";
            if (!is_string($value3)) {
                $result4 = "value is not a string";
            } else {
                $result4 = "value passed string validation";
            }
            
            // * inclusion in a set
            $value4 = "1";
            $set = array("1", "2", "3", "4");
            if (!in_array($value4, $set)) {
                $result5 = "value not in the set";
            } else {
                $result5 = "value is in the set";
            }

            // * uniqueness
            // uses a database to check uniqueness
            
            // * format
            // use a regex on a string
            // preg_match($regex, $subject)
            if (preg_match("/PHP/", "PHP is fun.")) {
                $result6 = "value match was found";
            } else {
                $result6 = "value match was not found";
            }
            
            $value5 = "nobody@nowhere.com";
            // preg_match is most flexible
            if (!preg_match("/@/", $value5)) {
                $result7 = "value match was not found";
            } else {
                $result7 = "value match was found";
            }
            // strpos is faster than preg_match
            // use === to make exact match with false
            if (strpos($value5, "@") === false) {
                $result8 = "value match was not found";
            } else {
                $result8 = "value match was found";
            }

			echo '
			<fieldset>
			<legend id="legendValidation">Validating Form Values</legend>
			<div id="divValidation">
            &emsp;<code><i>// validating the form values</i></code><br>              
            &emsp;<code>PHP Code:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php </span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// * presence</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// use trim() so empty spaces don\'t count</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// use === to avoid false positives</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// empty() would consider "0" to be empty</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue">$value1 = trim("0");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (!isset($value1) || $value1 === "") {<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = "value presence not detected";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = "value presence passed validation";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// * string length</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// minimum length</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$value2 = "abcd";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$min = 3;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (strlen($value2) < $min) {<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = "value does not meet minimum length";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = "value passed minimum length validation";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// maximum length</i></code><br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$max = 6;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (strlen($value2) > $max) {<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result3 = "value does not meet maximum length";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result3 = "value passed maximum length validation";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// * type</i></code><br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$value3= "1";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (!is_string($value3)) {<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result4 = "value is not a string";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result4 = "value passed string validation";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// * inclusion in a set</i></code><br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$value4 = "1";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$set = array("1", "2", "3", "4");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (!in_array($value4, $set)) {<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result5 = "value not in the set";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result5 = "value is in the set";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// * format</i></code><br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// use a regex on a string</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// preg_match($regex, $subject)</i></code><br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (preg_match("/PHP/", "PHP is fun.")) {<br>          
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result6 = "value match was found";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result6 = "value match was not found";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$value5 = "nobody@nowhere.com";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// preg_match is most flexible</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (!preg_match("/@/", $value5)) {<br>           
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result7 = "value match was not found";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result7 = "value match was found";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// strpos is faster than preg_match</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// use === to make exact match with false</i></code><br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (strpos($value5, "@") === false) {<br>          
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result8 = "value match was not found";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result8 = "value match was found";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt; </span><br><br>            
			&emsp;<code><b> result:</b> </code>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
            echo 'using trim(): ' . $result1 . '<br>';
            echo 'string length - min: ' . $result2 . '<br>';
            echo 'string length - max: ' . $result3 . '<br>';
            echo 'type - string: ' . $result4 . '<br>';
            echo 'type - string: ' . $result5 . '<br>';
            echo 'regex test: ' . $result6 . '<br>';
            echo 'regex test: ' . $result7 . '<br>';
            echo 'strpos test: ' . $result8 . '<br>';
            echo '</pre></code></div>';
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendValidation").on("click", function() {
					$("#divValidation").slideToggle();
				});				
			});
		</script>
	</body>
</html>
