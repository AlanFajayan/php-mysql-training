<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Building Forms</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>

        <?php	
			echo '
			<fieldset>
			<legend id="legendForm">Building Forms</legend>
			<div id="divForm">
			<code class="indent01"><i>// form basics</i></code><br>
            <code class="indent01">HTML Code:<br> 
            <span class="red indent02">&lt;form </span>
            <span class="blue">action="form.php" method="post"<span class="red">></span><br></span>
            <span class="indent03">Username: 
            <span class="red">&lt;input</span> <span class="blue">type="text" name="username" value=""</span><span class="red"> /&gt;</span></span><br>
            <span class="indent03">Password: 
            <span class="red">&lt;input</span> <span class="blue">type="password" name="password" value=""</span><span class="red"> /&gt;</span><br>
            <span class="red indent03">&lt;input</span> <span class="blue">type="submit" name="submit" value="Submit"</span><span class="red"> /&gt;</span><br>
            <span class="red indent02">&lt;/form&gt;</span></code><br><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code><div class="px30">
                <form action="form.php" method="post">
                    Username: <input type="text" name="username" value="" /><br />
                    Password: <input type="password" name="password" value="" /><br />
                    <br />
                    <input type="submit" name="submit" value="Submit" />
                </form></code></div><br>';

            echo '	 
            <code class="indent01"><i>// super global $_POST</i></code><br>             
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> print_r($_POST);<br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
            <code class="indent01"><b> result:</b> </code><br>';
            echo '<div class="px30"><code><pre>';
            print_r($_POST);
            echo '</pre></code></div>';

            echo '	 
            <code class="indent01"><i>// detect form submission</i></code><br>             
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> if (isset($_POST[\'submit\'])) {<br> 
            <span class="indent04">echo "form was submitted";</span><br>
            <span class="indent04"><code><i>// set default values</i></code></span><br>
            <span class="indent04">if (isset($_POST["username"])) {</span><br>
            <span class="indent05">$username = $_POST["username"];</span><br>
            <span class="indent04">} else {</span><br>
            <span class="indent05">$username = "";</span><br>
            <span class="indent04">}</span><br>
            <span class="indent04">if (isset($_POST["password"])) {</span><br>
            <span class="indent05">$password = $_POST["password"];</span><br>
            <span class="indent04">} else {</span><br>
            <span class="indent05">$password = "";</span><br>
            <span class="indent04">}</span><br>
            <code class="indent04"><i>// set default values using ternary operator</i></code><br>
            <code class="indent04"><i>// boolean_test ? value_if_true : value_if_false</i></code><br>
            <span class="indent04">$username = isset($_POST[\'username\']) ? $_POST[\'username\'] : "";</span><br>
            <span class="indent04">$password = isset($_POST[\'password\']) ? $_POST[\'password\'] : "";</span><br>
            <span class="indent03">} else {</span><br>
            <span class="indent04">$username = "";</span><br>
            <span class="indent04">$password = "";</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">echo "{$username}: {$password}";</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
            <code class="indent01"><b> result:</b> </code>';
            echo '<div class="px30"><code><pre>';
            // detect form submission
            if (isset($_POST['submit'])) {
				echo "form was submitted<br />";

				// set default values
				if (isset($_POST["username"])) {
					$username = $_POST["username"];
				} else {
					$username = "";
				}
				if (isset($_POST["password"])) {
					$password = $_POST["password"];
				} else {
					$password = "";
				}
				
				// set default values using ternary operator
				// boolean_test ? value_if_true : value_if_false
				$username = isset($_POST['username']) ? $_POST['username'] : "";
				$password = isset($_POST['password']) ? $_POST['password'] : "";
				
			} else {
				$username = "";
				$password = "";
            }
            
            echo "{$username}: {$password}";
            echo '</pre></code></div>';
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendForm").on("click", function() {
					$("#divForm").slideToggle();
				});				
			});
		</script>
	</body>
</html>
