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
            &emsp;<code><i>// using GET values</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$link_name = "Second Page";<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$id = 5;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$company = "Johnson & Johnson";<br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo ' . htmlspecialchars('<a href="links.php?id=' . $id . '&company=' . $company . '">' . $link_name . '</a>') . '<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>link to next page:</b> </code>';
            echo '<a href="links.php?id=' . $id . '&company=' . $company . '"><code>' . $link_name . '</code></a><br>
            &emsp;<code> <b>result:</b> </code><br>
            <code><div style=\'margin-left:30px;\'>' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '</div></code><br>';
            
            $getId = '';
            $getCompany = '';
            if (isset($_GET['id']) && isset($_GET['company'])) {
                $getId = $_GET['id'];
                $getCompany = $_GET['company'];
            }
            
            echo '			
            &emsp;<code><i>// accessing super global variable $_GET values</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$getId = $_GET[\'id\'];<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$getCompany = $_GET[\'company\'];<br><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;echo \'id = \' . $getId . \', company = \' . $getCompany<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code><br>';
            echo '<code><div style=\'margin-left:30px;\'>id = ' . $getId . ', company = ' . $getCompany . '</div></code><br>';
            

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
