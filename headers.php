<?php
  header("Content-type: text/html");
  header("X-Powered-By: PHP/7.2.1");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Modifying Headers</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            
			echo '
			<fieldset>
			<legend id="legendHeaders">Modifying Headers</legend>
			<div id="divHeaders">
            <code class="indent01"><i>// headers must be the first lines of code</i></code><br> 
			<code class="indent01">PHP Code:<br>
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">header("Content-type: text/html");<br> 
            <span class="indent03">header("X-Powered-By: PHP/7.2.1");</span><br><br>
            <span class="indent03">print_r(headers_list());</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b> result:</b> </code>';
            echo print_r(headers_list());            

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendHeaders").on("click", function() {
					$("#divHeaders").slideToggle();
				});				
			});
		</script>
	</body>
</html>
