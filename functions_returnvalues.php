<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Return Values</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	            
            function add($val1, $val2) {
                $sum = $val1 + $val2;
                return $sum;
              }
            
            $result1 = add(3,4);
            $result2 = add(5,$result1);            		
			
			echo '
			<fieldset>
			<legend id="legendReturnValues">Functions: Return Values</legend>
			<div id="divReturnValues">
            &emsp;<code><i>// returning a value from a function</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function add($val1, $val2) {<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$sum = $val1 + $val2;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return $sum;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = add(3,4);<br>	
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = add(5,$result1);<br>                  
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<code>' . $result1 . ', ' . $result2 . '</code><br><br>';
            
            // Chinese Zodiac as a function

			function chinese_zodiac($year) {
                switch (($year - 4) % 12) {
                  case  0: return 'Rat';
                  case  1: return 'Ox';
                  case  2: return 'Tiger';
                  case  3: return 'Rabbit';
                  case  4: return 'Dragon';
                  case  5: return 'Snake';
                  case  6: return 'Horse';
                  case  7: return 'Goat';
                  case  8: return 'Monkey';
                  case  9: return 'Rooster';
                  case 10: return 'Dog';
                  case 11: return 'Pig';
                }
              }
              
              $zodiac = chinese_zodiac(2013);
              $result3 = "<div style ='margin-left:30px;'>2013 is the year of the {$zodiac}.</div>";
              $result4 = "<div style ='margin-left:30px;'>2027 is the year of the " . chinese_zodiac(2027) . ".</div>";
			
            echo '	 
            &emsp;<code><i>// Chinese Zodiac as a function</i></code><br> 
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> function chinese_zodiac($year) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> switch (($year - 4) % 12) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;0: $zodiac = \'Rat\'; &emsp;&emsp;&emsp;&emsp;&emsp;break;<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;1: $zodiac = \'Ox\'; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;2: $zodiac = \'Tiger\'; &emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;3: $zodiac = \'Rabbit\'; &emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;4: $zodiac = \'Dragon\'; &emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;5: $zodiac = \'Snake\'; &emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;6: $zodiac = \'Horse\'; &emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;7: $zodiac = \'Goat\'; &emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;8: $zodiac = \'Monkey\'; &emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;9: $zodiac = \'Rooster\'; &emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 10: $zodiac = \'Dog\'; &emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 11: $zodiac = \'Pig\'; &emsp;&emsp;&emsp;&emsp;&emsp;break;<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $zodiac = chinese_zodiac(2013);<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $result3 = "2013 is the year of the {$zodiac}.";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> $result4 = "2027 is the year of the " . chinese_zodiac(2027) . ".";<br>
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
            &emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result3 . $result4 . '</code><br>'; 
                        
            function better_hello($greeting, $target, $punct) {
				return $greeting . " " . $target . $punct . "<br />";
			}
		
            $result5 =  better_hello("Hello", "John Doe", "!");
            
            echo '			
            &emsp;<code> PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            <span class="blue">            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;function better_hello($greeting, $target, $punct) {<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;return $greeting . " " . $target . $punct;<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;}<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result5 =  better_hello("Hello", "John Doe", "!");<br></span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code> <b>result:</b> </code>';
            echo '<code>' . $result5  . '</code><br><br>';

			echo '</div></fieldset>';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendReturnValues").on("click", function() {
					$("#divReturnValues").slideToggle();
				});				
			});
		</script>
	</body>
</html>
