<?php
	require_once("included_functions.php");
	
	if (isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];

		if ($username == "kevin" && $password == "secret") {
			// successful login
			redirect_to("form_single.php");
		} else {
			$message = "There were some errors.";
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
		<title>Single-Page Form Processing</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>

        <?php	
			echo '
			<fieldset>
			<legend id="legendSinglePage">Single-Page Form Processing</legend>
			<div id="divSinglePage">
            <code class="indent01"><i>// single-page form</i></code><br>  
            <code class="indent01"><i>// php code at the top of the page</i></code><br>
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php </span><br>
            <span class="blue indent03">require_once("included_functions.php");<br>
            <span class="indent03">if (isset($_POST[\'submit\'])) {</span><br>
            <span class="indent04"><code><i>// form was submitted</i></code></span><br>
            <span class="indent04">$username = $_POST["username"];</span><br>
            <span class="indent04">$password = $_POST["password"];</span><br>
            <span class="indent04">if ($username == "kevin" && $password == "secret") {</span><br>
            <code class="indent05"><i>// successful login</i></code><br>
            <span class="indent05">redirect_to("form_single.php");</span><br>
            <span class="indent04">} else {</span><br>
            <span class="indent05">$message = "There were some errors.";</span><br>
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
			&emsp;<code><b> result:</b> </code>';
            echo '<code><div class="px30">
                <form action="form_single.php" method="post">
                Username: <input type="text" name="username" value="' . htmlspecialchars($username) . '" /><br>
                Password: <input type="password" name="password" value="" /><br>
                <br>
                <input type="submit" name="submit" value="Submit" />
                </form>
            </code></div><br>';

            echo '	 
            <code class="indent01"><i>// super global $_POST</i></code><br>             
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> print_r($_POST);<br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
            <code class="indent01"><b> result:</b> </code><br>';
            echo '<div class="px30"><code><pre>';
            print_r($_POST) . '<br>';
            echo $message;
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
