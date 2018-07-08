<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Switch</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
        <a href="home.php"><button id="home">Home</button></a>
		<?php
            $a = 2;
			
			switch ($a) {
				case 0:
					$result = "a equals 0";
					break;
				case 1:
                    $result = "a equals 1";
					break;
				case 2:
                    $result = "a equals 2";
					break;
				case 3:
                    $result = "a equals 3";
					break;
				default:
                    $result = "a is not 0, 1, 2, or 3";
					break;
			}

            echo '
			<fieldset>
			<legend id="legendSwitch">Switch</legend>
			<div id="divSwitch">
            <code class="indent01"><i>// switch: test multiple values</i></code><br>        
            <code class="indent01">$a = 2;</code><br>            					
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> switch ($a) {<br>
            <span class="indent04">case 0:</span><br>
            <span class="indent05">$result = "a equals 0";</span><br>
            <span class="indent05">break;</span><br> 
            <span class="indent04">case 1:</span><br>
            <span class="indent05">$result = "a equals 1";</span><br>
            <span class="indent05">break;</span><br> 
            <span class="indent04">case 2:</span><br>
            <span class="indent05">$result = "a equals 2";</span><br>
            <span class="indent05">break;</span><br> 
            <span class="indent04">case 3:</span><br>
            <span class="indent05">$result = "a equals 3";</span><br>
            <span class="indent05">break;</span><br>
            <span class="indent04">default:</span><br>
            <span class="indent05">$result = "a is not 0, 1, 2, or 3";</br>
            <span class="indent05">break;</span><br>
            <span class="indent03">}</span>
            </span><br>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';

            // ChineseZodiac
            // whitespace doesn't matter
            // colons, semicolons and breaks do
            $year = 2018;
            switch (($year - 4) % 12) {
                case  0: $zodiac = 'Rat'; 		break;
                case  1: $zodiac = 'Ox'; 		break;
                case  2: $zodiac = 'Tiger'; 	break;
                case  3: $zodiac = 'Rabbit'; 	break;
                case  4: $zodiac = 'Dragon'; 	break;
                case  5: $zodiac = 'Snake'; 	break;
                case  6: $zodiac = 'Horse'; 	break;
                case  7: $zodiac = 'Goat'; 		break;
                case  8: $zodiac = 'Monkey';    break;
                case  9: $zodiac = 'Rooster';   break;
                case 10: $zodiac = 'Dog'; 		break;
                case 11: $zodiac = 'Pig'; 		break;
            }
            			
            echo '		            
            <code class="indent01">$year = 2018;</code><br>					
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> switch (($year - 4) % 12) {<br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;0: $zodiac = \'Rat\'; </span>break;</span><br>  
            <span class="indent04"><span class="widthFixed250">case  &nbsp;1: $zodiac = \'Ox\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;2: $zodiac = \'Tiger\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;3: $zodiac = \'Rabbit\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;4: $zodiac = \'Dragon\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;5: $zodiac = \'Snake\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;6: $zodiac = \'Horse\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;7: $zodiac = \'Goat\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;8: $zodiac = \'Monkey\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case  &nbsp;9: $zodiac = \'Rooster\';</span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case 10: $zodiac = \'Dog\'; </span>break;</span><br>
            <span class="indent04"><span class="widthFixed250">case 11: $zodiac = \'Pig\'; </span>break;</span><br>             
            <span class="indent03"> }</span>
            </span><br>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . "{$year} is the year of the {$zodiac}" . '</code><br><br>';

            // case with multiple values
			$user_type = 'customer';
			
			switch ($user_type) {
				case 'student':
					$result2 = "Welcome!";
					break;
				case 'press':
				case 'customer':
				case 'admin':
					$result2 = "Hello!";
					break;
			}

            echo '	
            <code class="indent01"><i>// case with multiple values</i></code><br>	            
            <code class="indent01">$user_type = \'customer\';</code><br>					
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> switch ($user_type) {<br>
            <span class="indent04">case \'student\':</span><br>
            <span class="indent05">$result2 = "Welcome!";</span><br>
            <span class="indent05">break;</span><br>
            <span class="indent04">case \'press\':</span><br>
            <span class="indent04">case \'customer\':</span><br>
            <span class="indent04">case \'admin\':</span><br>
            <span class="indent05">$result2 = "Hello!";</span><br>
            <span class="indent05">break;</span><br>
            <span class="indent03"> }</span>
            </span><br>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result2 . '</code><br><br>';

			echo '</div></fieldset>';
		?>

		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#legendSwitch").on("click", function() {
					$("#divSwitch").slideToggle();
				});				
			});
		</script>
	</body>
</html>
