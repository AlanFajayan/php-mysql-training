<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: Continue</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
            $result = "";
            for ($count=0; $count <= 10; $count++) {
				if ($count % 2 == 0) { continue; }
				$result = $result . $count . ", ";
			}
			
			echo '
			<fieldset>
			<legend id="legendContinue">Loops: Continue</legend>
			<div id="divContinue">
            &emsp;<code><i>// continue function in a for loop</i></code><br>                      
            &emsp;<code>$result = "";</code><br>				
			&emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> for ($count=0; $count <= 10; $count++) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($count % 2 == 0) { continue; }<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . $count . ", ";<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $result1 = "";
            $count = 0;
			while ($count <= 10) {
				if ($count == 5) {
					$count++;
					continue;
				}
				$result1 = $result1 . $count . ", ";
				$count++;
			}
			
            echo '	 
            &emsp;<code><i>// continue function in a while loop</i></code><br>                      
            &emsp;<code>$result1 = "";<br>	
            &emsp; $count = 0;<br>    
            &emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> while ($count <= 10) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($count == 5) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$count++;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;continue;<br>               
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; $result1 = $result1 . $count . ", ";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; $count++;<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                   
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';
            
            $result2 = "";
            for ($i=0; $i<=5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k=0; $k<=5; $k++) {
					if ($k == 3) { continue(2); }
			  	$result2 = $result2 . "<div style='margin-left:30px;'>" . $i . "-" . $k . "</div>";
				}
			}
            
            echo '  
            &emsp;<code><i>// loop inside a loop with continue</i></code><br>                    
            &emsp;<code>$result2 = "";<br>            				
			&emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> for ($i=0; $i<=5; $i++) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($i % 2 == 0) { continue(1); }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;for ($k=0; $k<=5; $k++) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if ($k == 3) { continue(2); }<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = $result2 . $i . "-" . $k;<br>               
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result2 . '</code><br><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendContinue").on("click", function() {
					$("#divContinue").slideToggle();
				});				
			});
		</script>
	</body>
</html>
