<?php
	session_start();
	if(isset($_POST['submit_third'])){
		$_SESSION['third_forminfo'] = array();
		$intersetArea = $_POST['intersetArea'];
		$Language = $_POST['Language'];
		$CMSKnowledge = $_POST['CMSKnowledge'];
		$srNO = $_POST['srNO'];
		$projectName = $_POST['projectName'];
		$technology = $_POST['technology'];
		$message = $_POST['message'];
		array_push($_SESSION['third_forminfo'],$intersetArea,$Language,$CMSKnowledge,$srNO,$projectName,
		$technology,$message);
		
		header("Location:email_form.php");
	}
	
?>
<html>
	<title>Technical Details</title>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css" />
		 <script src="js_personal_form.js"></script>
	</head>                                      
	<body>
		<form id="technical_form_id" method="POST" action="">
			<h2 id="heading_form">Technical Details</h2>
				<fieldset class="fieldSetId">
					<legend>Interest Area</legend>
						<table class="technical_table_id">
							<tr>
								<td>
									<input type="checkbox" name="intersetArea[]" value="development"
									id="development_id">Development
									<input type="checkbox" name="intersetArea[]" value="theming" 
									id="theming_id">Theming	</br>	
									<input type="checkbox" name="intersetArea[]" value="networking" 
									id="networking_id">Networking
									<input type="checkbox" name="intersetArea[]" value="systemAdministrator"
									id="system_id">System Administrator
								</td>
								<td id="error_intersetArea" class="formError">*</td>
							</tr>
						</table>
					</fieldset>
					<fieldset class="fieldSetId">
						<legend>Language Proficiency</legend>
							<table class="technical_table_id">
								<tr>
									<td>
										<input type="checkbox" name="Language[]" value="C" id="language_c_id">C
										<input type="checkbox" name="Language[]" value="C++" 
											id="language_id">C++
										<input type="checkbox" name="Language[]" value="Javascript" 
											id"javascript_id">Javascript </br>
										<input type="checkbox" name="Language[]" value="php" id="php_id">php
										<input type="checkbox" name="Language[]" value="HTML" 
											id="html_id">HTML
										<input type="checkbox" name="Language[]" value="CSS" id="css_id">CSS
										</td>
										<td id="error_language_id" class="formError">*</td>
								</tr>
							</table>
					</fieldset>
					<fieldset class="fieldSetId">
						<legend>CMS Knowledge</legend>
							<table class="technical_table_id">
								<tr>
									<td>
										<input type="checkbox" name="CMSKnowledge[]" value="Drupal" 
										id="drupal_id">Drupal
										<input type="checkbox" name="CMSKnowledge[]" value="Wordpress" 
										id="wordpress_id">Wordpress </br>
										<input type="checkbox" name="CMSKnowledge[]" value="None" id="none_id">None
									</td>
									<td id="checkboxError" class="formError">*</td>
								</tr>
							</table>
					</fieldset>
					<fieldset class="fieldSetId">
						<legend>Projects</legend>
							<table>
								<tr>
									<td class="project_text">
										<label>Sr No.</label>
									</td>
									<td class="project_text">
										<label>Project Name</label>
									</td>
									<td class="project_text">
										<label>Technology</label> 
									</td>
									<td class="project_text">
										<label>Role In Project</label>
									</td>
								</tr>
								<tr>
									<td >
										<input type="text" name="srNO" class="project_input" 
										>
									</td>
									<td>
										<input type="text" name="projectName" class="project_input" >
									</td>
									<td>
										<input type="text" name="technology" class="project_input" >
									</td>
									<td>
										<textarea rows="4" cols="50" name="message" id="textarea"  class="project_input"  ></textarea>
									</td>
								</tr>
								<tr>
									<td >
										<input type="text" name="srNO_1" class="project_input" >
									</td>
									<td>
										<input type="text" name="projectName_1" class="project_input" >
									</td>
									<td>
										<input type="text" name="technology_1" class="project_input" >
									</td>
									<td>
										<textarea rows="4" cols="50" name="message_1" id="textarea"  class="project_input" ></textarea>
									</td>
								</tr>
								<tr>
									<td >
										<input type="text" name="srNO_2" class="project_input" >
									</td>
									<td>
										<input type="text" name="projectName_2" class="project_input" >
									</td>
									<td>
										<input type="text" name="technology_2" class="project_input" >
									</td>
									<td>
										<textarea rows="4" cols="50" name="message_2" id="textarea"  class="project_input"  ></textarea>
									</td>
								</tr>
							</table>
					</fieldset>
					<table id="submitbtn">
						<tr>
							<td>
								<input id="submitId" type="submit" value="Submit" name="submit_third" onclick="return validate_third_Form()">
							</td>
						</tr>
					</table>
		</form>
	</body>
</html>

