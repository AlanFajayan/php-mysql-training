<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>HTML Encoding</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            $linktext = "<Click> & learn more";            
			
			echo '
			<fieldset>
			<legend id="legendHtml">HTML Encoding</legend>
			<div id="divHtml">
            <code class="indent01"><i>// htmlspecialchars</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$linktext = "' . htmlspecialchars('<Click>') . ' & learn more";<br>             
            <span class="indent03">echo htmlspecialchars($linktext);</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code><div class="px30">' . htmlspecialchars($linktext) . '</div></code><br>';
            
            $text = "™£•“—é";            
            
            echo '			
            <code class="indent01"><i>// htmlentities</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$text = "™£•“—é";<br>             
            <span class="indent03">echo htmlentities($text);</span><br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code><br>';
            echo '<code><div class="px30">' . htmlentities($text) . '</div></code><br>';
            
            $url_page = "php/created/page/url.php";
            $param1 = "This is a string with < >";
            $param2 = "&#?*$[]+ are bad characters";
            $linktext1 = "<Click> & learn more";

            $url = "http://localhost/";
            $url .= rawurlencode($url_page);
            $url .= "?" . "param1=" . urlencode($param1);
            $url .= "&" . "param2=" . urlencode($param2);
            
            /*
            <a href="<?php echo htmlspecialchars($url); ?>">
            <?php echo htmlspecialchars($linktext); ?>
            </a>
            */

            echo '			
            <code class="indent01"><i>// what to use when</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$url_page = "php/created/page/url.php";<br> 
            <span class="indent03">$param1 = "This is a string with < >";</span><br>
            <span class="indent03">$param2 = "&#?*$[]+ are bad characters";</span><br>
            <span class="indent03">$linktext1 = "<Click> & learn more";</span><br><br>
            <span class="indent03">$url = "http://localhost/";</span><br>
            <span class="indent03">$url .= rawurlencode($url_page);</span><br>
            <span class="indent03">$url .= "?" . "param1=" . urlencode($param1);</span><br>
            <span class="indent03">$url .= "&" . "param2=" . urlencode($param2);</span><br><br> 
            <span class="indent03">echo \'href: \' . htmlspecialchars($url);</span><br> 
            <span class="indent03">echo \'text: \' . htmlspecialchars($linktext1);</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code><br>';
            echo '<code><div class="px30">href: ' . htmlspecialchars($url) . '</div>
            <div class="px30">text: ' . htmlspecialchars($linktext1) . '</div>
            </code><br>';

            echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendHtml").on("click", function() {
					$("#divHtml").slideToggle();
				});				
			});
		</script>
	</body>
</html>
