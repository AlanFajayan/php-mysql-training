<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Default Argument Values</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            function paint($room="office",$color="red") {
				return "<div style='margin-left:30px;'>" . "The color of the {$room} is {$color}.</div>";
			}
		
			$result1 = paint();
			$result2 = paint("bedroom", "blue");
			$result3 = paint("bedroom", null);
			$result4 = paint("bedroom");
			$result5 = paint("blue");
			
			echo '
			<fieldset>
			<legend id="legendDefaults">Functions: Default Argument Values</legend>
			<div id="divDefaults">
            &emsp;<code><i>// setting default argument values</i></code><br> 
            &emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function paint($room="office",$color="red") {<br>   
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return "The color of the {$room} is {$color}.";<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = paint();<br>	
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = paint("bedroom", "blue");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result3 = paint("bedroom", null);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result4 = paint("bedroom");<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result5 = paint("blue");<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<code>' . $result1 . $result2 . $result3 . $result4 . $result5 . '</code><br><br>';            
                        
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendDefaults").on("click", function() {
					$("#divDefaults").slideToggle();
				});				
			});
		</script>
	</body>
</html>
