<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: ForEach</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
	    <a href="home.php"><button id="home">Home</button></a>
        <?php	
            $ages = array(4,8,15,16,23,42);
            $result = "";
            foreach ($ages as $age) {
              $result = $result . "<div style='margin-left:30px;'>Age: {$age}</div>";
            }
			
			echo '
			<fieldset>
			<legend id="legendForEach">Loops: ForEach</legend>
			<div id="divForEach">
            &emsp;<code><i>// foreach loop</i></code><br>  
            &emsp;<code>$ages = array(4,8,15,16,23,42);</code><br>          
            &emsp;<code>$result = "";</code><br>				
			&emsp;<code>PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> foreach ($ages as $age) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result = $result . "Age: {$age}";<br>            
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result . '</code><br><br>';
            
            $result1 = "";
            $person = array(
                "first_name" => "Kevin", 
                "last_name"  => "Skoglund",
                "address"    => "123 Main Street",
                "city"       => "Beverly Hills",
                "state"      => "CA",
                "zip_code"   => "90210"
            );

            foreach ($person as $attribute => $data) {
                $attr_nice = ucwords(str_replace("_", " ", $attribute));
                $result1 = $result1 . "<div style='margin-left:30px;'>{$attr_nice}: {$data}</div>";
            }
			
            echo '	  
            &emsp;<code><i>// foreach using assoc. array</i></code><br>           
            &emsp;<code>$result1 = "";<br>	
            &emsp; $person = array(<br>
            &emsp;&emsp;&emsp;&emsp;"first_name" => "Kevin",<br>
            &emsp;&emsp;&emsp;&emsp;"last_name" &emsp;=> "Skoglund",<br>
            &emsp;&emsp;&emsp;&emsp;"address" &emsp;&emsp; => "123 Main Street",<br>
            &emsp;&emsp;&emsp;&emsp;"city" &emsp;&emsp;&emsp;&emsp;&emsp; => "Beverly Hills",<br>
            &emsp;&emsp;&emsp;&emsp;"state" &emsp;&emsp;&emsp;&emsp; => "CA",<br>
            &emsp;&emsp;&emsp;&emsp;"zip_code" &emsp; => "90210"<br>
            &emsp; );</code><br>			
			&emsp;<code>PHP Coden:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> foreach ($person as $attribute => $data) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$attr_nice = ucwords(str_replace("_", " ", $attribute));<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result1 = $result1 . "{$attr_nice}: {$data}";<br>                      
            &emsp;&emsp;&emsp;&emsp;&emsp; }<br>                       
            </span>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">?&gt;</span></code><br>
			&emsp;<code><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';
            
            $result2 = "";
            $prices = array(
                "Brand New Computer" => 2000,
		        "1 month of Lynda.com" => 25,
                "Learning PHP" => null
            );

            foreach ($prices as $item => $price) {
                $result2 = $result2 . "<div style='margin-left:30px;'>{$item}: ";
                if (is_int($price)) {
                    $result2 = $result2 . "$" . $price . "</div>";
                } else {
                    $result2 = $result2 . "priceless</div>";
                }                
            }
            
            echo '                     
            &emsp;<code>$result2 = "";<br>	
            &emsp; $prices = array(<br>
            &emsp;&emsp;&emsp;&emsp;"Brand New Computer" &emsp; => 2000,<br>
            &emsp;&emsp;&emsp;&emsp;"1 month of Lynda.com" => 25,<br>
            &emsp;&emsp;&emsp;&emsp;""Learning PHP" &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; => null<br>            
            &emsp; );</code><br>				
			&emsp;<code>PHP Code:<br> &emsp;&emsp;&emsp;&emsp;&emsp;<span class="red">&lt;?php</span><br>
            &emsp;&emsp;&emsp;&emsp;&emsp;<span class="blue"> foreach ($prices as $item => $price) {<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = $result2 . "{$item}: ";<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if (is_int($price)) {<br> 
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = $result2 . "$" . $price;<br>  
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;} else {<br>   
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$result2 = $result2 . "priceless";<br>
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
				$("#legendForEach").on("click", function() {
					$("#divForEach").slideToggle();
				});				
			});
		</script>
	</body>
</html>
