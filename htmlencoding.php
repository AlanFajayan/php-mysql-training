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
            &emsp;<code><i>// htmlspecialchars</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$linktext = "' . htmlspecialchars('<Click>') . ' & learn more";<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo htmlspecialchars($linktext);<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<code><div style=\'margin-left:30px;\'>' . htmlspecialchars($linktext) . '</div></code><br>';
            
            $text = "™£•“—é";            
            
            echo '			
            &emsp;<code><i>// htmlentities</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$text = "™£•“—é";<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo htmlentities($text);<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code><br>';
            echo '<code><div style=\'margin-left:30px;\'>' . htmlentities($text) . '</div></code><br>';
            
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
            &emsp;<code><i>// what to use when</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$url_page = "php/created/page/url.php";<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$param1 = "This is a string with < >";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$param2 = "&#?*$[]+ are bad characters";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$linktext1 = "<Click> & learn more";<br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$url = "http://localhost/";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$url .= rawurlencode($url_page);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$url .= "?" . "param1=" . urlencode($param1);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$url .= "&" . "param2=" . urlencode($param2);<br><br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo \'href: \' . htmlspecialchars($url);<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo \'text: \' . htmlspecialchars($linktext1);<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code><br>';
            echo '<code><div style=\'margin-left:30px;\'>href: ' . htmlspecialchars($url) . '</div>
            <div style=\'margin-left:30px;\'>text: ' . htmlspecialchars($linktext1) . '</div>
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
