<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Links and URLs</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            $link_name = "Second Page";
            $id = 5;
            $company = rawurlencode("Johnson & Johnson");
			
			echo '
			<fieldset>
			<legend id="legendLinks">Links and URLs</legend>
			<div id="divLinks">
            <code class="indent01"><i>// using GET values</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$link_name = "Second Page";<br> 
            <span class="indent03">$id = 5;</span><br>
            <span class="indent03">$company = "Johnson & Johnson";</span><br><br>
            <span class="indent03">echo ' . htmlspecialchars('<a href="links.php?id=' . $id . '&company=' . $company . '">' . $link_name . '</a>') . '<br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>link to next page:</b> </code>';
            echo '<a href="links.php?id=' . $id . '&company=' . $company . '"><code>' . $link_name . '</code></a><br>
            <code class="indent01"><b>result:</b> </code><br>
            <code><div class="px30">' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '</div></code><br>';
            
            $getId = '';
            $getCompany = '';
            if (isset($_GET['id']) && isset($_GET['company'])) {
                $getId = $_GET['id'];
                $getCompany = $_GET['company'];
            }
            
            echo '			
            <code class="indent01"><i>// accessing super global variable $_GET values</i></code><br> 
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">$getId = $_GET[\'id\'];<br> 
            <span class="indent03">$getCompany = $_GET[\'company\'];</span><br><br>
            <span class="indent03">echo \'id = \' . $getId . \', company = \' . $getCompany<br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code><br>';
            echo '<code><div class="px30">id = ' . $getId . ', company = ' . $getCompany . '</div></code><br>';
            

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendLinks").on("click", function() {
					$("#divLinks").slideToggle();
				});				
			});
		</script>
	</body>
</html>
