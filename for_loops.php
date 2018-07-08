<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: For</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
            $result = "";	
            for ($count = 0; $count <= 10; $count++) {
                $result = $result . $count . ", ";
            }
			
			echo '
			<fieldset>
			<legend id="legendFor">Loops: For</legend>
			<div id="divFor">
			<code class="indent01"><i>// for loop</i></code><br>            
            <code class="indent01">$result = "";</code><br>				
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> for($count = 0; $count <= 10; $count++) {<br>
            <span class="indent04">$result = $result . $count . ", ";</span><br>            
            <span class="indent03">}</span><br>                       
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $result1 = "<br>";
            for ($count = 20; $count > 0; $count--) {
				if ($count % 2 == 0) {
					$result1 = $result1 . "<div class=\"px30\">{$count} is even.</div>";
				} else {
					$result1 = $result1 . "<div class=\"px30\">{$count} is odd.</div>";
				}
		    }
			
			echo '	            
            <code class="indent01">$result1 = "' . htmlentities("<br>") . '";</code><br>
			<code class="indent01">PHP Code:<br> <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> for ($count = 20; $count > 0; $count--) {<br>
            <span class="indent04">if ($count % 2 == 0) {</span><br>
            <span class="indent05">$result1 = $result1 . "{$count} is even.";</span><br>
            <span class="indent04">} else {</span><br>
            <span class="indent05">$result1 = $result1 . "{$count} is odd.";</span><br>
            <span class="indent04">}</span><br>            
            <span class="indent03">}</span><br>                       
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';		
			
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendFor").on("click", function() {
					$("#divFor").slideToggle();
				});				
			});
		</script>
	</body>
</html>
