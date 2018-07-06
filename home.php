<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	
	<body>
		<?php
			echo '
				<fieldset>
					<legend id="legendPHPMySQL">PHP with MySQL Essential Training</legend>
					<div id="divPHPMySQL" class="row">						
						<div class="lesson col-sm-3">
							<fieldset class="subFieldset">
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
						<div class="lesson col-sm-3">
							<fieldset class="subFieldset">
								<legend id="legendControlStructures">Control Structures</legend>
								<div id="divControlStructures">				
									&emsp;<code><i>// PHP logical expressions and loops</i><br>		
									<ul>
										<li><a href="logical.php">Logical Expressions - If, Else, ElseIf</a></li>
										<li><a href="operators.php">Logical Expressions - Operators</a></li>
										<li><a href="switch.php">Logical Expressions - Switch</a></li>
										<li><a href="while_loops.php">Loops  - While</a></li>
										<li><a href="for_loops.php">Loops  - For</a></li>
										<li><a href="foreach_loops.php">Loops  - ForEach</a></li>
										<li><a href="continue.php">Loops  - Continue</a></li>
										<li><a href="break.php">Loops  - Break</a></li>
										<li><a href="pointers.php">Loops  - Pointers</a></li>
									</ul></code>
								</div>
							</fieldset>
						</div>
						<div class="lesson col-sm-3">
							<fieldset class="subFieldset">
								<legend id="legendFunctions">User-Defined Functions</legend>
								<div id="divFunctions">				
									&emsp;<code><i>// PHP user-defined functions</i><br>		
									<ul>
										<li><a href="functions_defining.php">Functions - Defining</a></li>
										<li><a href="functions_arguments.php">Functions - Arguments</a></li>
										<li><a href="functions_returnvalues.php">Functions - Return Values</a></li>
										<li><a href="functions_multiplereturns.php">Functions - Multiple Return Values</a></li>								
										<li><a href="functions_scope.php">Functions - Scope & Global Variables</a></li>
										<li><a href="functions_defaults.php">Functions - Default Argument Values</a></li>
									</ul></code>
								</div>
							</fieldset>
						</div>
						<div class="lesson col-sm-3">
							<fieldset class="subFieldset">
								<legend id="legendDebugging">Debugging</legend>
								<div id="divDebugging">				
									&emsp;<code><i>// Debugging</i><br>		
									<ul>
										<li><a href="debugging.php">Debugging</a></li>
									</ul></code>
								</div>
							</fieldset>
						</div>
						<div class="lesson col-sm-3">
							<fieldset class="subFieldset">
								<legend id="legendWebPages">Building Web Pages with PHP</legend>
								<div id="divWebPages">				
									&emsp;<code><i>// Building PHP pages</i><br>		
									<ul>
										<li><a href="links.php">Links and URLs</a></li>
										<li><a href="urlencode.php">Encoding GET values</a></li>
										<li><a href="htmlencoding.php">Encoding for HTML</a></li>
										<li><a href="includes.php">Including and Requiring Files</a></li>
										<li><a href="headers.php">Modifying Headers</a></li>
										<li><a href="redirect.php">Page Redirection</a></li>
									</ul></code>
								</div>
							</fieldset>
						</div>
						<div class="lesson col-sm-3">
							<fieldset class="subFieldset">
								<legend id="legendForms">Working with Forms</legend>
								<div id="divForms">				
									&emsp;<code><i>// Forms and form data</i><br>		
									<ul>
										<li><a href="form.php">Building forms</a></li>
										<li><a href="form_single.php">Single-page form processing</a></li>
										<li><a href="validations.php">Validating form values</a></li>
										<li><a href="false_positives.php">Problems with validation logic</a></li>
										<li><a href="validation_errors.php">Displaying validation errors</a></li>
										<li><a href="validation_functions.php">Custom validation functions</a></li>
										<li><a href="form_with_validation.php">Single-page form with validation</a></li>
									</ul></code>
								</div>
							</fieldset>
						</div>
					</div>
				</fieldset>
			';
		?>
		
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				$(document).on("click", "body *", function() {	
					switch($(this).attr("id")) {
						case "legendPHPMySQL":
							$("#divPHPMySQL").slideToggle();
							break;
						case "legendDataTypes":
							changeDiv("divDataTypes",$("#divDataTypes").is(":visible"));
							break;
						case "legendControlStructures":
							changeDiv("divControlStructures",$("#divControlStructures").is(":visible"));
							break;
						case "legendFunctions":
							changeDiv("divFunctions",$("#divFunctions").is(":visible"));
							break;
						case "legendDebugging":
							changeDiv("divDebugging",$("#divDebugging").is(":visible"));
							break;
						case "legendWebPages":
							changeDiv("divWebPages",$("#divWebPages").is(":visible"));	
						case "legendForms":
							changeDiv("divForms",$("#divForms").is(":visible"));		
					}									
				});	
				$(".lesson").on("mouseover", function() {					
					$(this).find("legend").css({
						backgroundColor: '#000',
						color: '#fff'
					});
				});
				$(".lesson").on("mouseout", function() {					
					$(this).find("legend").css({
						backgroundColor: 'orange',
						color: '#000'
					});
				});

				function changeDiv(divId,isVisible) {
					var height = isVisible === true ? 20 : 325;
					$("#" + divId).slideToggle();							
					$("#" + divId).parent().animate({height:height},400);
				}			
			});
		</script>
	</body>
	
</html>