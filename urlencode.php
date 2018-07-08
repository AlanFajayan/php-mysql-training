<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Encoding GET Values</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            $page = "William Shakespeare";
            $quote = "To be or not to be";
            $link1 =  "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);
            $link2 =  "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);
                  			
			echo '
			<fieldset>
			<legend id="legendEncode">Encoding GET values</legend>
			<div id="divEncode">
            <code class="indent01"><i>// using urlencode and rawurlencode functions</i></code><br> 
			<code class="indent01">PHP Code:<br>
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$page = "William Shakespeare";<br> 
            <span class="indent03">$quote = "To be or not to be";</span><br>
            <span class="indent03">$link1 =  "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);</span><br>
            <span class="indent03">$link2 =  "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);</span><br>            
            </span>
            <span class="red indent02">?&gt;</span></code><br>			
            <code class="indent01"><b>result:</b> </code><br>
            <code><div class="px30">' . $link1 . '<br>' . $link2 . '</div></code><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendEncode").on("click", function() {
					$("#divEncode").slideToggle();
				});				
			});
		</script>
	</body>
</html>
