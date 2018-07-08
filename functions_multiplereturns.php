<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Return Multiple Values</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            function add_subt($val1, $val2) {
                $add = $val1 + $val2;
                $subt = $val1 - $val2;
                return array($add, $subt);
            }

            $result_array = add_subt(10,5);
            $result1 =  "Add: " . $result_array[0];
            $result2 =  "Subt: " . $result_array[1];

            list($add_result, $subt_result) = add_subt(20,7);
            $result3 = "Add: " . $add_result;
            $result4 = "Subt: " . $subt_result;           		
			
			echo '
			<fieldset>
			<legend id="legendReturnMultipleValues">Functions: Return Multiple Values</legend>
			<div id="divReturnMultipleValues">
            <code class="indent01"><i>// returning multiple values from a function using array</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">function add_subt($val1, $val2) {<br>             
            <span class="indent04">$add = $val1 + $val2;</span><br>
            <span class="indent04">$subt = $val1 - $val2;</span><br>
            <span class="indent04">return array($add, $subt);</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">$result_array = add_subt(10,5);</span><br>	
            <span class="indent03">$result1 =  "Add: " . $result_array[0];</span><br>
            <span class="indent03">$result2 =  "Subt: " . $result_array[1];</span><br> 
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . ', ' . $result2 . '</code><br><br>';

            echo '			
            <code class="indent01"><i>// using list with array</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">list($add_result, $subt_result) = add_subt(20,7);<br> 
            <span class="indent03">$result3 = "Add: " . $add_result;</span><br>
            <code class="indent03">$result4 = "Subt: " . $subt_result;</span><br>            
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result3 . ', ' . $result4 . '</code><br><br>';
                        
			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendReturnMultipleValues").on("click", function() {
					$("#divReturnMultipleValues").slideToggle();
				});				
			});
		</script>
	</body>
</html>
