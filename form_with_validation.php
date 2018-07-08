<?php
	require_once("included_functions.php");
	//require_once("validation_functions.php");
	
	$errors = array();
	$message = "";
    
    // test for presence
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

    function validate_max_lengths($fields_with_max_lengths) {
        global $errors;
        // Expects an assoc. array
        foreach($fields_with_max_lengths as $field => $max) {
            $value = trim($_POST[$field]);
            if (!has_max_length($value, $max)) {
                $errors[$field] = ucfirst($field) . " is too long";
            }
        }
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

	if (isset($_POST['submit'])) {
		// form was submitted
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

		// Validations
		$fields_required = array("username", "password");
		foreach($fields_required as $field) {
			$value = trim($_POST[$field]);
			if (!has_presence($value)) {
				$errors[$field] = ucfirst($field) . " can't be blank";
			}
		}
		
		$fields_with_max_lengths = array("username" => 30, "password" => 8);
		validate_max_lengths($fields_with_max_lengths);
		
		if (empty($errors)) {
			// try to login
			if ($username == "kevin" && $password == "secret") {
				// successful login
				redirect_to("basic.html");
			} else {
				$message = "Username/password do not match.";
			}
		}

	} else {
		$username = "";
		$message = "Please log in.";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Single-Page Form with Validation</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>

        <?php	
			echo '
			<fieldset>
			<legend id="legendSinglePage">Single-Page Form with Validation</legend>
			<div id="divSinglePage">
            <code class="indent01"><i>// single-page form with validation</i></code><br>  
            <code class="indent01"><i>// php code at the top of the page</i></code><br>
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php </span><br>
            <span class="blue indent03">require_once("included_functions.php");<br>
            <span class="indent03">$errors = array();</span><br>
            <span class="indent03">$message = "";</span><br>
            <code class="indent03"><i> // test for presence</i></code><br>
            <span class="indent03">function has_presence($value) {</span><br>
            <span class="indent04">return isset($value) && $value !== "";</span><br>
            <span class="indent03">}</span><br>
            <code class="indent03"><i> // string max length</i></code><br>
            <span class="indent03">function has_max_length($value, $max) {</span><br>
            <span class="indent04">return strlen($value) <= $max;</span><br>
            <span class="indent03">}</span><br>
            <code class="indent03"><i> // inclusion in a set</i></code><br>
            <span class="indent03">function has_inclusion_in($value, $set) {</span><br>
            <span class="indent04">return in_array($value, $set);</span><br>
            <span class="indent03">}</span><br><br>
            <span class="indent03">function validate_max_lengths($fields_with_max_lengths) {</span><br>
            <span class="indent04">global $errors;</span><br>
            <code class="indent04"><i> // Expects an assoc. array</i></code><br>
            <span class="indent04">foreach($fields_with_max_lengths as $field => $max) {</span><br>
            <span class="indent05">$value = trim($_POST[$field]);</span><br>
            <span class="indent05">if (!has_max_length($value, $max)) {</span><br>
            <span class="indent06">$errors[$field] = ucfirst($field) . " is too long";</span><br>
            <span class="indent05">}</span><br>
            <span class="indent04">}</span><br>
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
            <span class="indent03">if (isset($_POST[\'submit\'])) {</span><br>
            <code class="indent04"><i>// form was submitted</i></code><br>
            <span class="indent04">$username = $_POST["username"];</span><br>
            <span class="indent04">$password = $_POST["password"];</span><br>
            <code class="indent04"><i>// Validations</i></code><br>
            <span class="indent04">$fields_required = array("username", "password");</span><br>
            <span class="indent04">foreach($fields_required as $field) {</span><br>
            <span class="indent05">$value = trim($_POST[$field]);</span><br>
            <span class="indent05">if (!has_presence($value)) {</span><br>
            <span class="indent06">$errors[$field] = ucfirst($field) . " can\'t be blank";</span><br>
            <span class="indent05">}</span><br>
            <span class="indent04">}</span><br><br>
            <span class="indent04">$fields_with_max_lengths = array("username" => 30, "password" => 8);</span><br>
            <span class="indent04">validate_max_lengths($fields_with_max_lengths);</span><br><br>
            <span class="indent04">if (empty($errors)) {</span><br>
            <code class="indent05"><i>// try to login</i></code><br>
            <span class="indent05">if ($username == "kevin" && $password == "secret") {</span><br>
            <code class="indent06"><i>// successful login</i></code><br>
            <span class="indent06">redirect_to("form_single.php");</span><br>
            <span class="indent05">} else {</span><br>
            <span class="indent06">$message = "Username/password do not match.";</span><br>
            <span class="indent05">}</span><br>
            <span class="indent04">}</span><br>
            <span class="indent03">} else {</span><br>
            <span class="indent04">$username = "";</span><br>
            <span class="indent04">$message = "Please log in.";</span><br>
            <span class="indent03">}</span><br>           
            </span>
            <span class="red indent02">?&gt; </span><br><br>
            <code class="indent01">HTML Code:<br> 
            <span class="red indent02">&lt;form </span>
            <span class="blue">action="form_single.php" method="post"<span class="red">></span><br></span>
            <span class="indent03">Username: 
            <span class="red">&lt;input</span> <span class="blue">type="text" name="username" value="<span class="red">&lt;?php</span> echo htmlspecialchars($username); <span class="red">?&gt;</span>"</span><span class="red"> /&gt;</span><br>
            <span class="indent03">Password: 
            <span class="red">&lt;input</span> <span class="blue">type="password" name="password" value=""</span><span class="red"> /&gt;</span><br>
            <span class="red indent03">&lt;input</span> <span class="blue">type="submit" name="submit" value="Submit"</span><span class="red"> /&gt;</span><br>
            <span class="red indent02">&lt;/form&gt;</span></code><br><br>
			<code class="indent01"><b> result:</b> </code>';
            echo '<code><div class="px30">
                <form action="form_with_validation.php" method="post">
                Username: <input type="text" name="username" value="' . htmlspecialchars($username) . '" /><br>
                Password: <input type="password" name="password" value="" /><br>
                <br>
                <input type="submit" name="submit" value="Submit" />
                </form>
            </code></div><br>';
            
            echo '<div class="px30"><code><pre>';            
            echo $message . '<br>';
            echo form_errors($errors);
            echo '</pre></code></div>';
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendSinglePage").on("click", function() {
					$("#divSinglePage").slideToggle();
				});				
			});
		</script>
	</body>
</html>
