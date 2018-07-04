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
            &emsp;<code><i>// returning multiple values from a function using array</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function add_subt($val1, $val2) {<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$add = $val1 + $val2;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$subt = $val1 - $val2;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return array($add, $subt);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result_array = add_subt(10,5);<br>	
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 =  "Add: " . $result_array[0];<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 =  "Subt: " . $result_array[1];<br> 
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<code>' . $result1 . ', ' . $result2 . '</code><br><br>';

            echo '			
            &emsp;<code><i>// using list with array</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;list($add_result, $subt_result) = add_subt(20,7);<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result3 = "Add: " . $add_result;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result4 = "Subt: " . $subt_result;<br>            
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
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
