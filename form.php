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
			&emsp;<code><i>// form basics</i></code><br>
            &emsp;<code>HTML Code:<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;form </span>
            <span class="blue">action="form.php" method="post"<span class="red">></span><br></span>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Username: 
            <span class="red">&lt;input</span> <span class="blue">type="text" name="username" value=""</span><span class="red"> /&gt;</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Password: 
            <span class="red">&lt;input</span> <span class="blue">type="password" name="password" value=""</span><span class="red"> /&gt;</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;input</span> <span class="blue">type="submit" name="submit" value="Submit"</span><span class="red"> /&gt;</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;/form&gt;</span></code><br><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code><div style=\'margin-left:30px;\'>
                <form action="form.php" method="post">
                    Username: <input type="text" name="username" value="" /><br />
                    Password: <input type="password" name="password" value="" /><br />
                    <br />
                    <input type="submit" name="submit" value="Submit" />
                </form></code></div><br>';

            echo '	 
            &emsp;<code><i>// super global $_POST</i></code><br>             
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> print_r($_POST);<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
            &emsp;<code><b> result:</b> </code><br>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
            print_r($_POST);
            echo '</pre></code></div>';

            echo '	 
            &emsp;<code><i>// detect form submission</i></code><br>             
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> if (isset($_POST[\'submit\'])) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo "form was submitted";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// set default values</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (isset($_POST["username"])) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$username = $_POST["username"];<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$username = "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (isset($_POST["password"])) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$password = $_POST["password"];<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$password = "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// set default values using ternary operator</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<code><i>// boolean_test ? value_if_true : value_if_false</i></code><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$username = isset($_POST[\'username\']) ? $_POST[\'username\'] : "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$password = isset($_POST[\'password\']) ? $_POST[\'password\'] : "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;} else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$username = "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$password = "";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;echo "{$username}: {$password}";<br>

            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
            &emsp;<code><b> result:</b> </code>';
            echo '<div style=\'margin-left:30px;\'><code><pre>';
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
