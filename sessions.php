<?php
    // Sessions use cookies which use headers.
	// Must start before any HTML output 
	// unless output buffering is turned on.
    session_start();
    $_SESSION["first_name"] = "Rumpelstiltskin";
	$name = $_SESSION["first_name"];  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Sessions</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<a href="home.php"><button id="home">Home</button></a>
		<?php			          
            
			echo '
			<fieldset>
			<legend id="legendSessions">Sessions</legend>
			<div id="divSessions">
			<code class="indent01"><i>// session_start() function and $_SESSION super global</i></code><br>
			<code class="indent01">PHP Code:<br>
			<span class="red indent02">&lt;?php</span><br>
			<span class="blue">
			<code class="indent03"><i>// Sessions use cookies which use headers.</i></code><br>
            <code class="indent03"><i>// Must start before any HTML output</i></code><br>
            <code class="indent03"><i>// unless output buffering is turned on.</i></code><br>
            <span class="indent03">session_start();</span><br><br>
            <span class="indent03">$_SESSION["first_name"] = "Rumpelstiltskin";</span><br>
            <span class="indent03">$name = $_SESSION["first_name"];</span><br><br>			
			<span class="indent03">echo $name</span><br></span>
			<span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code><br>';
            echo '<code><div class="px30">' . $name . '</div></code><br>';			
			
			echo '</div></fieldset>';
		?>
		
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendSessions").on("click", function() {
					$("#divSessions").slideToggle();
				});				
			});
		</script>
	</body>
</html>
