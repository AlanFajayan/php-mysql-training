<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Home</title>
		<style>			
			legend {
				font-size: 16px;
				border: 1px solid black;
				padding: 5px;
				background-color: orange;
				cursor: pointer;
			}			
			i {
				color: #00ff00; // green
			}
			span.blue {
				color: #0000ff; // blue				
			}
			span.red {
				color: #ff0000; // red				
			}
			div.lesson {
				width: 400px;
				display: inline-block;
				float: left;
				margin: 10px;
				-webkit-transition: 0.2s ease-in-out;
				-moz-transition: 0.2s ease-in-out;
				-o-transition: 0.2s ease-in-out;
				-ms-transition: 0.2s ease-in-out;
				transition: 0.2s ease-in-out;
			}
			div.lesson:hover {
				background-color: #dedede;		
				-webkit-transform: scale(1.1);
				-moz-transform: scale(1.1);
				-o-transform: scale(1.1);
				-ms-transform: scale(1.1);
				transform: scale(1.1);	
			}
		</style>
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
										<li><a href="">Logical Expressions - If statements</a></li>
										
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