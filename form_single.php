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
            &emsp;<code><i>// single-page form</i></code><br>  
            &emsp;<code><i>// php code at the top of the page</i></code><br>
            &emsp;<code>PHP Code:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php </span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue">require_once("included_functions.php");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (isset($_POST[\'submit\'])) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// form was submitted</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$username = $_POST["username"];<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$password = $_POST["password"];<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($username == "kevin" && $password == "secret") {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// successful login</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;redirect_to("form_single.php");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$message = "There were some errors.";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$username = "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$message = "Please log in.";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>           
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt; </span><br><br>
            &emsp;<code> HTML Code:<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;form </span>
            <span class="blue">action="form_single.php" method="post"<span class="red">></span><br></span>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Username: 
            <span class="red">&lt;input</span> <span class="blue">type="text" name="username" value="<span class="red">&lt;?php</span> echo htmlspecialchars($username); <span class="red">?&gt;</span>"</span><span class="red"> /&gt;</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Password: 
            <span class="red">&lt;input</span> <span class="blue">type="password" name="password" value=""</span><span class="red"> /&gt;</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;input</span> <span class="blue">type="submit" name="submit" value="Submit"</span><span class="red"> /&gt;</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;/form&gt;</span></code><br><br>
			&emsp;<code><b> result:</b> </code>';
            echo '<code><div style=\'margin-left:30px;\'>
                <form action="form_single.php" method="post">
                Username: <input type="text" name="username" value="' . htmlspecialchars($username) . '" /><br>
                Password: <input type="password" name="password" value="" /><br>
                <br>
                <input type="submit" name="submit" value="Submit" />
                </form>
            </code></div><br>';

            echo '	 
            &emsp;<code><i>// super global $_POST</i></code><br>             
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> print_r($_POST);<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
            &emsp;<code><b> result:</b> </code><br>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
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
