<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Page Redirection</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            
			echo '
			<fieldset>
			<legend id="legendRedirect">Page Redirection</legend>
			<div id="divRedirect">
            &emsp;<code><i>// PHP page redirect</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function redirect_to($new_location) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;header("Location: " . $new_location);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;exit;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$logged_in = $_GET[\'logged_in\'];<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($logged_in == "1") {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;redirect_to("basic.html");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;redirect_to("http://www.lynda.com");<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendRedirect").on("click", function() {
					$("#divRedirect").slideToggle();
				});				
			});
		</script>
	</body>
</html>
