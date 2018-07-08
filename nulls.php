<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>NULL</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<a href="home.php"><button id="home">Home</button></a>
		<?php		
			$var1 = null;
			$var2 = "";		
			$var3 = "0";		
			echo '
				<fieldset>
				<legend id="legendNulls">Null and empty</legend>
				<div id="divNulls">				
				<code class="indent01">$var1 = null;</code><br>
				<code class="indent01">$var2 = "";</code><br>
				<code class="indent01">$var3 = "0";</code><br><br>
				<code class="indent01"><i>// determine if a variable has a null value</i></code><br>
				<code class="indent01">var1 null? <span class="red">&lt;?php</span><span class="blue"> echo is_null</span>($var1); <span class="red">?&gt;</span></code><br>	
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . is_null($var1) . '</code><br>';

			echo '				
				<code class="indent01">var2 null? <span class="red">&lt;?php</span><span class="blue"> echo is_null</span>($var2); <span class="red">?&gt;</span></code><br>	
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . is_null($var2) . '</code><br>';

			echo '				
				<code class="indent01">var3 null? <span class="red">&lt;?php</span><span class="blue"> echo is_null</span>($var3); <span class="red">?&gt;</span></code><br>	
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . is_null($var3) . '</code><br><br>';
			
			echo '	
				<code class="indent01"><i>// determine if a variable\'s value is set</i></code><br>	
				<code class="indent01">var1 is set? <span class="red">&lt;?php</span><span class="blue"> echo isset</span>($var1); <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . isset($var1) . '</code><br>';

			echo '				
				<code class="indent01">var2 is set? <span class="red">&lt;?php</span><span class="blue"> echo isset</span>($var2); <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . isset($var2) . '</code><br>';

			echo '				
				<code class="indent01">var3 is set? <span class="red">&lt;?php</span><span class="blue"> echo isset</span>($var3); <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . isset($var3) . '</code><br><br>';

			echo '	
				<code class="indent01"><i>// empty: "", null, 0, 0.0, "0", false, array()</i></code><br>			
				<code class="indent01">var1 empty? <span class="red">&lt;?php</span><span class="blue"> echo empty</span>($var1); <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . empty($var1) . '</code><br>';

			echo '				
				<code class="indent01">var2 empty? <span class="red">&lt;?php</span><span class="blue"> echo empty</span>($var2); <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . empty($var2) . '</code><br>';

			echo '				
				<code class="indent01">var3 empty? <span class="red">&lt;?php</span><span class="blue"> echo empty</span>($var3); <span class="red">?&gt;</span></code><br>
				<code class="indent01"><b>result:</b> </code>';
			echo '<code>' . empty($var3) . '</code><br><br></fieldset>';		
		?>

		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendNulls").on("click", function() {
					$("#divNulls").slideToggle();
				});	                			
			});
		</script>
	</body>
</html>
