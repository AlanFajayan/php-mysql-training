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
            <code class="indent01"><i>// returning a value from a function</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">function add($val1, $val2) {<br>             
            <span class="indent04">$sum = $val1 + $val2;</span><br>
            <span class="indent04">return $sum;</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">$result1 = add(3,4);</span><br>	
            <span class="indent03">$result2 = add(5,$result1);</span><br>                  
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
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
              $result3 = "<div class=\"px30\">2013 is the year of the {$zodiac}.</div>";
              $result4 = "<div class=\"px30\">2027 is the year of the " . chinese_zodiac(2027) . ".</div>";
			
            echo '	 
            <code class="indent01"><i>// Chinese Zodiac as a function</i></code><br> 
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> function chinese_zodiac($year) {<br>
            <span class="indent04"> switch (($year - 4) % 12) {</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;0: $zodiac = \'Rat\';</span>break;</span><br>  
            <span class="indent05"><span class="widthFixed250">case  &nbsp;1: $zodiac = \'Ox\'; </span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;2: $zodiac = \'Tiger\';</span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;3: $zodiac = \'Rabbit\'; </span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;4: $zodiac = \'Dragon\'; </span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;5: $zodiac = \'Snake\'; </span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;6: $zodiac = \'Horse\';</span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;7: $zodiac = \'Goat\'; </span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;8: $zodiac = \'Monkey\'; </span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case  &nbsp;9: $zodiac = \'Rooster\';</span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case 10: $zodiac = \'Dog\';</span>break;</span><br>
            <span class="indent05"><span class="widthFixed250">case 11: $zodiac = \'Pig\'; </span>break;</span><br>
            <span class="indent04">}</span><br>
            <span class="indent03">}</span><br>
            <span class="indent03">$zodiac = chinese_zodiac(2013);</span><br>
            <span class="indent03">$result3 = "2013 is the year of the {$zodiac}.";</span><br>
            <span class="indent03">$result4 = "2027 is the year of the " . chinese_zodiac(2027) . ".";</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
            <code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result3 . $result4 . '</code><br>'; 
                        
            function better_hello($greeting, $target, $punct) {
				return $greeting . " " . $target . $punct . "<br />";
			}
		
            $result5 =  better_hello("Hello", "John Doe", "!");
            
            echo '			
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03">;function better_hello($greeting, $target, $punct) {<br>    <span class="indent04">return $greeting . " " . $target . $punct;</span><br>            
            <span class="indent03">}</span><br>
            <span class="indent03">$result5 =  better_hello("Hello", "John Doe", "!");</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
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
