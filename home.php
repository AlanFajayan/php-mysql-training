<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	
	<body>
		<?php
			echo '
				<fieldset>
					<legend id="legendPHPMySQL">PHP with MySQL Essential Training</legend>
					<div id="divPHPMySQL">						
						<div class="lesson">
							<fieldset>
								<legend id="legendDataTypes">Exploring Data Types</legend>
								<div id="divDataTypes">				
									&emsp;<code><i>// PHP data types</i><br>		
									<ul>
										<li><a href="variables.php">Variables</a></li>
										<li><a href="strings.php">Strings</a></li>
										<li><a href="string_functions.php">String functions</a></li>
										<li><a href="integers.php">Numbers - integers</a></li>
										<li><a href="floats.php">Numbers - floats</a></li>
										<li><a href="arrays.php">Arrays</a></li>
										<li><a href="assoc_arrays.php">Associative Arrays</a></li>
										<li><a href="array_functions.php">Array functions</a></li>
										<li><a href="booleans.php">Booleans</a></li>
										<li><a href="nulls.php">NULL and empty</a></li>
										<li><a href="type_casting.php">Type juggling and casting</a></li>
										<li><a href="constants.php">Constants</a></li>
									</ul></code>
								</div>
							</fieldset>
						</div>
						<div class="lesson">
							<fieldset>
								<legend id="legendControlStructures">Control Structures</legend>
								<div id="divControlStructures">				
									&emsp;<code><i>// PHP control structures - logical expressions and loops</i><br>		
									<ul>
										<li><a href="logical.php">Logical Expressions - If, Else, ElseIf</a></li>
										<li><a href="operators.php">Logical Expressions - Operators</a></li>
										<li><a href="switch.php">Logical Expressions - Switch</a></li>
									</ul></code>
								</div>
							</fieldset>
						</div>
					</div>
				</fieldset>
			';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$(document).on("click", "body *", function() {	
					if ($(this).attr("id") === "legendPHPMySQL") {
						$("#divPHPMySQL").slideToggle();
					} else if ($(this).attr("id") === "legendDataTypes") {
						$("#divDataTypes").slideToggle();
					} else if ($(this).attr("id") === "legendControlStructures") {
						$("#divControlStructures").slideToggle();
					}
					
				});				
			});
		</script>
	</body>
	
</html>