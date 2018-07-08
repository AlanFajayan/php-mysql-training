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
            <code class="indent01"><i>// PHP page redirect</i></code><br> 
			&emsp;<code> PHP Code:<br>
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">function redirect_to($new_location) {<br> 
            <span class="indent04">header("Location: " . $new_location);</span><br>
            <span class="indent04">exit;</span><br>
            <span class="indent03">}</span><br><br>
            <span class="indent03">$logged_in = $_GET[\'logged_in\'];</span><br> 
            <span class="indent03">if ($logged_in == "1") {</span><br> 
			<span class="indent04">redirect_to("basic.html");</span><br>
            <span class="indent03">} else {</span><br> 
			<span class="indent04">redirect_to("http://www.lynda.com");</span><br> 
            <span class="indent03">}</span><br>       
            </span>
            <span class="red indent02">?&gt;</span></code><br>';

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
