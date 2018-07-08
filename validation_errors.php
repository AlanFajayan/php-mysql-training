<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Displaying Validation Errors</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>

        <?php
            $errors = array();	
            
            $value1 = trim("");
            if (!isset($value1) || $value1 === "") {
                $errors['value'] = "value can't be blank";
            }
            
            $value2 = "ab";
            $min = 3;
            if (strlen($value2) < $min) {
                $errors['min'] = "value does not meet minimum length";
            } 
            
            $max = 6;
            if (strlen("abcdefg") > $max) {
                $errors['max'] = "value does not meet maximum length";
            } 

            function form_errors($errors=array()) {
				$output = "";
				if (!empty($errors)) {
				  $output .= "<div class=\"error\">";
				  $output .= "Please fix the following errors:";
				  $output .= "<ul>";
				  foreach ($errors as $key => $error) {
				    $output .= "<li>{$error}</li>";
				  }
				  $output .= "</ul>";
				  $output .= "</div>";
				}
				return $output;
            }
            
            //echo form_errors($errors);

			echo '
			<fieldset>
			<legend id="legendErrors">Displaying Validation Errors</legend>
			<div id="divErrors">
            <code class="indent01"><i>// displaying validation errors</i></code><br>              
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php </span><br>            
            <span class="blue indent03">$errors = array();<br>
            <span class="indent03">$value1 = trim("");</span><br>
            <span class="indent03">if (!isset($value1) || $value1 === "") {</span><br>           
            <span class="indent04">$errors[\'value\'] = "value can\'t be blank";</span><br>
            <span class="indent03">}</span><br>             
            <span class="indent03">$value2 = "ab";</span><br>
            <span class="indent03">$min = 3;</span><br>
            <span class="indent03">if (strlen($value2) < $min) {</span><br>           
            <span class="indent04">$errors[\'min\'] = "value does not meet minimum length";</span><br>
            <span class="indent03">}</span><br>                       
            <span class="indent03">$max = 6;</span><br>
            <span class="indent03">if (strlen("abcdefg") > $max) {</span><br>           
            <span class="indent04">$errors[\'max\'] = "value does not meet maximum length";</span><br>
            <span class="indent03">}</span><br><br>
            <span class="indent03">function form_errors($errors=array()) {</span><br>           
            <span class="indent04">$output = "";</span><br>            
            <span class="indent04">if (!empty($errors)) {</span><br>
            <span class="indent05">$output .= "&lt;div class=\"error\"&gt;";</span><br>
            <span class="indent05">$output .= "Please fix the following errors:";</span><br>
            <span class="indent05">$output .= "&lt;ul&gt;";</span><br>
            <span class="indent05">foreach ($errors as $key => $error) {</span><br>
            <span class="indent06">$output .= "&lt;li&gt;{$error}&lt;/li&gt;";</span><br>
            <span class="indent05">}</span><br>
            <span class="indent05">$output .= "&lt;/ul&gt;";</span><br>
            <span class="indent05">$output .= "&lt;/div&gt;";</span><br>
            <span class="indent04">}</span><br>
            <span class="indent04">return $output;</span><br>
            <span class="indent03">}</span><br><br>
            <span class="indent03">echo form_errors($errors);<br>
            </span>
            <span class="red indent02">?&gt; </span></code><br><br>            
			<code class="indent01"><b> result:</b> </code>';
            echo '<div class="px30"><code><pre>';
            echo form_errors($errors);
            echo '</pre></code></div>';
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendErrors").on("click", function() {
					$("#divErrors").slideToggle();
				});				
			});
		</script>
	</body>
</html>
