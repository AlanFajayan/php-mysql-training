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
            <code class="indent01"><i>// foreach loop</i></code><br>  
            <code class="indent01">$ages = array(4,8,15,16,23,42);</code><br>          
            <code class="indent01">$result = "";</code><br>				
            <code class="indent01">PHP Code:<br>
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> foreach ($ages as $age) {<br>
            <span class="indent04">$result = $result . "Age: {$age}";</span><br>            
            <span class="indent03">}</span><br>                       
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
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
                $result1 = $result1 . "<div class=\"px30\">{$attr_nice}: {$data}</div>";
            }
			
            echo '	  
            <code class="indent01"><i>// foreach using assoc. array</i></code><br>           
            <code class="indent01">$result1 = "";</code><br>	
            <code class="indent01">$person = array(</code><br>
            <code class="indent02">"first_name" => "Kevin",</code><br>
            <code class="indent02">"last_name" &emsp;=> "Skoglund",</code><br>
            <code class="indent02">"address" &emsp;&emsp; => "123 Main Street",</code><br>
            <code class="indent02">"city" &emsp;&emsp;&emsp;&emsp;&emsp; => "Beverly Hills",</code><br>
            <code class="indent02">"state" &emsp;&emsp;&emsp;&emsp; => "CA",</code><br>
            <code class="indent02">"zip_code" &emsp; => "90210"</code><br>
            <code class="indent01">);</code><br>			
            <code class="indent01">PHP Coden:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> foreach ($person as $attribute => $data) {<br>
            <span class="indent04">$attr_nice = ucwords(str_replace("_", " ", $attribute));</span><br>
            <span class="indent04">$result1 = $result1 . "{$attr_nice}: {$data}";</span><br> 
            <span class="indent03">}</span><br>                       
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
            echo '<code>' . $result1 . '</code><br><br>';
            
            $result2 = "";
            $prices = array(
                "Brand New Computer" => 2000,
		        "1 month of Lynda.com" => 25,
                "Learning PHP" => null
            );

            foreach ($prices as $item => $price) {
                $result2 = $result2 . "<div class=\"px30\">{$item}: ";
                if (is_int($price)) {
                    $result2 = $result2 . "$" . $price . "</div>";
                } else {
                    $result2 = $result2 . "priceless</div>";
                }                
            }
            
            echo '                     
            <code class="indent01">$result2 = "";</code><br>	
            <code class="indent01">prices = array(</code><br>
            <code class="indent02">"Brand New Computer" &emsp; => 2000,</code><br>
            <code class="indent02">"1 month of Lynda.com" => 25,</code><br>
            <code class="indent02">"Learning PHP" &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; => null</code><br>            
            <code class="indent01">);</code><br>				
            <code class="indent01">PHP Code:<br> 
            <span class="red indent02">&lt;?php</span><br>
            <span class="blue indent03"> foreach ($prices as $item => $price) {<br>
            <span class="indent04">$result2 = $result2 . "{$item}: ";</span><br>
            <span class="indent04">if (is_int($price)) {</span><br> 
            <span class="indent05">$result2 = $result2 . "$" . $price;</span><br>  
            <span class="indent04">} else {</span><br>   
            <span class="indent05">$result2 = $result2 . "priceless";</span><br>
            <span class="indent04">}</span><br>
            <span class="indent03">}</span><br>
            </span>
            <span class="red indent02">?&gt;</span></code><br>
			<code class="indent01"><b>result:</b> </code>';
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
