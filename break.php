<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: Break</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
            $result = "";
            for ($count=0; $count <= 10; $count++) {
				if ($count == 5) {
					break;
				}
				$result = $result . $count . ", ";
			}
			
			echo '
			<fieldset>
			<legend id="legendBreak">Loops: Break</legend>
			<div id="divBreak">
            &emsp;<code><i>// break function in a for loop</i></code><br>                      
            &emsp;<code>$result = "";</code><br>				
			&emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> for ($count=0; $count <= 10; $count++) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($count == 5) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; $result = $result . $count . ", ";<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';            
            
            $result1 = "";
            for ($i=0; $i<=5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k=0; $k<=5; $k++) {
					if ($k == 3) { break(2); }
			  	$result1 = $result1 . "<div style='margin-left:30px;'>" .$i . "-" . $k . "</div>";
				}
			}
            
            echo '  
            &emsp;<code><i>// loop inside a loop with break</i></code><br>                    
            &emsp;<code>$result1 = "";<br>            				
			&emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> for ($i=0; $i<=5; $i++) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($i % 2 == 0) { continue(1); }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;for ($k=0; $k<=5; $k++) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($k == 3) { break(2); }<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . $i . "-" . $k;<br>               
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b> result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendBreak").on("click", function() {
					$("#divBreak").slideToggle();
				});				
			});
		</script>
	</body>
</html>
