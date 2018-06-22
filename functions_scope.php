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
		
			$result1 = "<div style='margin-left:30px;'>" . "1: " . $bar . "</div>";
			$result2 = "<div style='margin-left:30px;'>" . foo() . "</div>";
			$result3 = "<div style='margin-left:30px;'>" . "2: " . $bar . "</div>";	
			
			echo '
			<fieldset>
			<legend id="legendScope">Functions: Scope and Global Variables</legend>
			<div id="divScope">
            &emsp;<code><i>// global vs. local scope</i></code><br> 
            &emsp;<code> Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">  
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$bar = "outside";   <i>// global scope</i><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function foo() {<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;global $bar;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (isset($bar)) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return "foo: " . $bar;;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$bar = "inside";  <i>// local scope</i><br>	
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = "1: " . $bar;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = foo();<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result3 = "2: " . $bar;<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
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
