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
            <code class="indent01"><i>// validating the form values</i></code><br>              
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php </span><br>
            <code class="indent03"><i>// * presence</i></code><br>
            <code class="indent03"><i>// use trim() so empty spaces don\'t count</i></code><br>
            <code class="indent03"><i>// use === to avoid false positives</i></code><br>
            <code class="indent03"><i>// empty() would consider "0" to be empty</i></code><br>
            <span class="blue indent03">$value1 = trim("0");<br>
            <span class="indent04">if (!isset($value1) || $value1 === "") {</span><br>           
            <span class="indent04">$result1 = "value presence not detected";</span><br>
            <span class="indent03">} else {</span><br> 
            <span class="indent04">$result1 = "value presence passed validation";</span><br>
            <span class="indent03">}</span><br>
            <code class="indent03"><i>// * string length</i></code><br>
            <code class="indent03"><i>// minimum length</i></code><br>
            <span class="indent03">$value2 = "abcd";</span><br>
            <span class="indent03">$min = 3;</span><br>
            <span class="indent03">if (strlen($value2) < $min) {</span><br>           
            <span class="indent04">$result2 = "value does not meet minimum length";</span><br>
            <span class="indent03">} else {</span><br> 
            <span class="indent04">$result2 = "value passed minimum length validation";</span><br>
            <span class="indent03">}</span><br>
            <code class="indent03"><i>// maximum length</i></code><br>            
            <span class="indent03">$max = 6;</span><br>
            <span class="indent03">if (strlen($value2) > $max) {</span><br>           
            <span class="indent04">$result3 = "value does not meet maximum length";</span><br>
            <span class="indent03">} else {</span><br> 
            <span class="indent04">$result3 = "value passed maximum length validation";</span><br>
            <span class="indent03">}<br>
            <code class="indent03"><i>// * type</i></code><br>            
            <span class="indent03">$value3= "1";</span><br>
            <span class="indent03">if (!is_string($value3)) {</span><br>           
            <span class="indent04">$result4 = "value is not a string";</span><br>
            <span class="indent03">} else {<br> 
            <span class="indent04">$result4 = "value passed string validation";</span><br>
            <span class="indent03">}</span><br>
            <code class="indent03"><i>// * inclusion in a set</i></code><br> 
            <span class="indent03">$value4 = "1";</span><br>
            <span class="indent03">$set = array("1", "2", "3", "4");</span><br>
            <span class="indent03">if (!in_array($value4, $set)) {</span><br>           
            <span class="indent04">$result5 = "value not in the set";</span><br>
            <span class="indent03">} else {</span><br> 
            <span class="indent04">$result5 = "value is in the set";</span><br>
            <span class="indent03">}</span><br>
            <code class="indent03"><i>// * format</i></code><br> 
            <code class="indent03"><i>// use a regex on a string</i></code><br>
            <code class="indent03"><i>// preg_match($regex, $subject)</i></code><br>            
            <span class="indent03">if (preg_match("/PHP/", "PHP is fun.")) {</span><br>          
            <span class="indent04">$result6 = "value match was found";</span><br>
            <span class="indent03">} else {</span><br> 
            <span class="indent04">$result6 = "value match was not found";</span><br>
            <span class="indent03">}</span><br>             
            <span class="indent04">$value5 = "nobody@nowhere.com";</span><br>
            <code class="indent03"><i>// preg_match is most flexible</i></code><br>
            <span class="indent03">if (!preg_match("/@/", $value5)) {</span><br>           
            <span class="indent04">$result7 = "value match was not found";</span><br>
            <span class="indent03">} else {</span><br> 
            <span class="indent04">$result7 = "value match was found";</span><br>
            <span class="indent03">}</span><br>            
            <code class="indent03"><i>// strpos is faster than preg_match</i></code><br>
            <code class="indent03"><i>// use === to make exact match with false</i></code><br>
            <span class="indent03">if (strpos($value5, "@") === false) {</span><br>          
            <span class="indent04">$result8 = "value match was not found";</span><br>
            <span class="indent03">} else {</span><br> 
            <span class="indent04">$result8 = "value match was found";</span><br>
            <span class="indent03">}</span><br>
            </span>
            <span class="red indent02">?&gt; </span></code><br><br>            
			<code class="indent01"><b> result:</b> </code>';
            echo '<div class="px30"><code><pre>';
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
