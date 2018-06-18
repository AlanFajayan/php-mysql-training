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
            &emsp;<code><i>// switch: test multiple values</i></code><br>        
            &emsp;<code>$a = 2;</code><br>            					
            &emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> switch ($a) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; case 0:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a equals 0";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; case 1:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a equals 1";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; case 2:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a equals 2";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; case 3:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a equals 3";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; default:<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = "a is not 0, 1, 2, or 3";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
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
            &emsp;<code>$year = 2018;</code><br>					
            &emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> switch (($year - 4) % 12) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;0: $zodiac = \'Rat\'; &emsp;&emsp;&emsp;&emsp;&emsp;break;<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;1: $zodiac = \'Ox\'; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;2: $zodiac = \'Tiger\'; &emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;3: $zodiac = \'Rabbit\'; &emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;4: $zodiac = \'Dragon\'; &emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;5: $zodiac = \'Snake\'; &emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;6: $zodiac = \'Horse\'; &emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;7: $zodiac = \'Goat\'; &emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;8: $zodiac = \'Monkey\'; &emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case  &nbsp;9: $zodiac = \'Rooster\'; &emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 10: $zodiac = \'Dog\'; &emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case 11: $zodiac = \'Pig\'; &emsp;&emsp;&emsp;&emsp;&emsp;break;<br>             
            &emsp;&emsp;&emsp;&emsp;&emsp; }
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
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
            &emsp;<code><i>// case with multiple values</i></code><br>	            
            &emsp;<code>$user_type = \'customer\';</code><br>					
            &emsp;<code>Logical expression:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> switch ($user_type) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case \'student\':<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = "Welcome!";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case \'press\':<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case \'customer\':<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;case \'admin\':<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = "Hello!";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;break;<br>
            &emsp;&emsp;&emsp;&emsp;&emsp; }
            </span>
            <br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
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
