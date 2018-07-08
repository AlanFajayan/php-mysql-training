<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Including and Requiring Files</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
                  			
			echo '
			<fieldset>
			<legend id="legendIncludes">Including and Requiring Files</legend>
			<div id="divIncludes">
            <code class="indent01"><i>// using include, require, include_once, require_once</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">include("included_functions.php");<br> 
            <span class="indent03">include("included_header.php");</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br><br>
            <code class="indent01">Contents of \'included_functions.php\':<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">function hello($name) {<br> 
            <span class="indent04">return "Hello {$name}!";</span><br>
            <span class="indent03">}</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br><br>           
            <code class="indent01">Contents of \'included_header.php\':<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">' . htmlentities('<head>') . '<br> 
            <span class="indent04">' . htmlentities('<title>') . 'Includes' . htmlentities('</title>') . ';<br>
            <span class="indent03">' . htmlentities('</head>') . '<br>
            </span>
            <span class="red indent02">?&gt;</span></code><br><br>
            ';


			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendIncludes").on("click", function() {
					$("#divIncludes").slideToggle();
				});				
			});
		</script>
	</body>
</html>
