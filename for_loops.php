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
			&emsp;<code><i>// for loop</i></code><br>            
            &emsp;<code>$result = "";</code><br>				
			&emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> for($count = 0; $count <= 10; $count++) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . $count . ", ";<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $result1 = "<br>";
            for ($count = 20; $count > 0; $count--) {
				if ($count % 2 == 0) {
					$result1 = $result1 . "<div style='margin-left:30px;'>{$count} is even.</div>";
				} else {
					$result1 = $result1 . "<div style='margin-left:30px;'>{$count} is odd.</div>";
				}
		    }
			
			echo '	            
            &emsp;<code>$result1 = "' . htmlentities("<br>") . '";</code><br>				
			&emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> for ($count = 20; $count > 0; $count--) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($count % 2 == 0) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . "{$count} is even.";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; } else {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . "{$count} is odd.";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
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
