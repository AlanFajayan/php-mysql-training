<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Scope and Global Variables</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            $bar = "outside";   // global scope
			
			function foo() {
				global $bar;
				if (isset($bar)) {
					return "foo: " . $bar;
				}
				$bar = "inside";  // local scope
			}
		
			$result1 = "<div class=\"px30\">" . "1: " . $bar . "</div>";
			$result2 = "<div class=\"px30\">" . foo() . "</div>";
			$result3 = "<div class=\"px30\">" . "2: " . $bar . "</div>";	
			
			echo '
			<fieldset>
			<legend id="legendScope">Functions: Scope and Global Variables</legend>
			<div id="divScope">
            <code class="indent01"><i>// global vs. local scope</i></code><br> 
			<code class="indent01">PHP Code:<br> 
			<span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$bar = "outside";   <i>// global scope</i><br>
            <span class="indent03">function foo() {</span><br>             
			<span class="indent04">global $bar;</span><br>
            <span class="indent04">if (isset($bar)) {</span><br>
			<span class="indent05">return "foo: " . $bar;</span><br>
			<span class="indent04">}</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">$bar = "inside";  <i>// local scope</i></span><br>	
            <span class="indent03">$result1 = "1: " . $bar;</span><br>
            <span class="indent03">$result2 = foo();</span><br>
            <span class="indent03">$result3 = "2: " . $bar;</span><br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . $result2 . $result3 . '</code><br><br>';            
                        
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendScope").on("click", function() {
					$("#divScope").slideToggle();
				});				
			});
		</script>
	</body>
</html>
