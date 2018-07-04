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
            &emsp;<code><i>// using include, require, include_once, require_once</i></code><br> 
            &emsp;<code> PHP Code:<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;include("included_functions.php");<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;include("included_header.php");<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br><br>
            &emsp;<code> Contents of \'included_functions.php\':<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function hello($name) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return "Hello {$name}!";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br><br>           
            &emsp;<code> Contents of \'included_header.php\':<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;' . htmlentities('<head>') . '<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;' . htmlentities('<title>') . 'Includes' . htmlentities('</title>') . ';<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;' . htmlentities('</head>') . '<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br><br>
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
