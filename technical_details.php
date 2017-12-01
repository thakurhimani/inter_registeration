<html>
	<title>Technical Details</title>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css" />
		<script src="js_technical_details.js"></script>
	</head>                                      
	<body>
		<form id="technical_form_id">
			<h2 id="heading_form">Technical Details</h2>
				<fieldset class="fieldSetId">
					<legend>Interest Area</legend>
						<table class="technical_table_id">
							<tr>
								<td>
									<input type="checkbox" name="intersetArea" value="development">Development
									<input type="checkbox" name="intersetArea" value="theming">Theming		
								</td>
							</tr>
							<tr>
								<td>
									<input type="checkbox" name="intersetArea" value="networking">Networking
									<input type="checkbox" name="intersetArea" value="networking">Networking
								</td>
							</tr>
						</table>
					</fieldset>
					<fieldset class="fieldSetId">
						<legend>Language Proficiency</legend>
							<table class="technical_table_id">
								<tr>
									<td>
										<input type="checkbox" name="Language" value="C" id="language_c_id">C
										<input type="checkbox" name="Language" value="C++" 
											id="language_c++_id">C++
										<input type="checkbox" name="Language" value="Javascript" 
											id"javascript_id">Javascript
										</td>
										<td id="language_id" class="formError">*</td>
								</tr>
									<tr>
										<td>
											<input type="checkbox" name="Language" value="php" id="php_id">php
											<input type="checkbox" name="Language" value="HTML" 
												id="html_id">HTML
											<input type="checkbox" name="Language" value="CSS" id="css_id">CSS
										</td>
										<td></td>
									</tr>
							</table>
					</fieldset>
					<fieldset class="fieldSetId">
						<legend>CMS Knowledge</legend>
							<table class="technical_table_id">
								<tr>
									<td>
										<input type="checkbox" name="CMSKnowledge" value="Drupal" id="drupal">Drupal
										<input type="checkbox" name="CMSKnowledge" value="Wordpress" id="wordpress">Wordpress
									</td>
									<td id="checkboxError" class="formError">*</td>
								</tr>
							</table>
					</fieldset>
					<table>
						<tr>
					<td id="project_id">
						<label>Projects</label>
					</td>
				</tr>
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
							<input type="text" name="srNO" class="project_input"/>
						</td>
						<td>
							<input type="text" name="projectName" class="project_input"/>
						</td>
						<td>
							<input type="text" name="technology" class="project_input"/>
						</td>
						<td>
							<textarea rows="4" cols="50" name="message" id="textarea"  class="project_input" ></textarea>
						</td>
					</tr>
					<tr>
						<td >
							<input type="text" name="srNO"/ class="project_input">
						</td>
						<td>
							<input type="text" name="projectName" class="project_input"/>
						</td>
						<td>
							<input type="text" name="technology" class="project_input"/>
						</td>
						<td>
							<textarea rows="4" cols="50" name="message" id="textarea"  class="project_input" ></textarea>
						</td>
					</tr>
					<tr>
						<td >
							<input type="text" name="srNO"/ class="project_input">
						</td>
						<td>
							<input type="text" name="projectName" class="project_input"/>
						</td>
						<td>
							<input type="text" name="technology" class="project_input"/>
						</td>
						<td>
							<textarea rows="4" cols="50" name="message" id="textarea"  class="project_input" ></textarea>
						</td>
					</tr>
					<tr>
					<td id="btn_Id" colspan="3">
					<input id="submitId" type="submit" value="Submit" name="submit" onclick="return validateForm()">
				</td>
				</tr>
						</table>
		</form>
	</body>
</html>