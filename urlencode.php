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
            &emsp;<code><i>// using urlencode and rawurlencode functions</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$page = "William Shakespeare";<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$quote = "To be or not to be";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$link1 =  "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$link2 =  "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);<br>            
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>			
            &emsp;<code> <b>result:</b> </code><br>
            <code><div style=\'margin-left:30px;\'>' . $link1 . '<br>' . $link2 . '</div></code><br>';

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
