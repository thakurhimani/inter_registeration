<?php 
session_start();
	$newfilename = $_SESSION['forminfo'][0];
	$firstname =  $_SESSION['forminfo'][1];
	$lastname =  $_SESSION['forminfo'][2];
	$dateofbirth =  $_SESSION['forminfo'][3];
	$fathername =  $_SESSION['forminfo'][4];
	$mothername =  $_SESSION['forminfo'][5];
	$gender =  $_SESSION['forminfo'][6];
	$maritalstatus =  $_SESSION['forminfo'][7];
	$address =  $_SESSION['forminfo'][8];
	$state =  $_SESSION['forminfo'][9];
	$pincode =  $_SESSION['forminfo'][10];
	$contactno =  $_SESSION['forminfo'][11];
	$emailid =  $_SESSION['forminfo'][12];
	$emergencydata =  $_SESSION['forminfo'][13];
	$Relationship =  $_SESSION['forminfo'][14];
	$ContactNo =  $_SESSION['forminfo'][15];
	$srno = $_SESSION['second_forminfo'][0];
	$nameOfDegree = $_SESSION['second_forminfo'][1];
	$yearOfPassing = $_SESSION['second_forminfo'][2];
	$University = $_SESSION['second_forminfo'][3];
	$Percentage = $_SESSION['second_forminfo'][4];
	$srNoField_2 = $_SESSION['second_forminfo'][5];
	$nameOfDegree_2 = $_SESSION['second_forminfo'][6];
	$yearOfPassing_2 = $_SESSION['second_forminfo'][7];
	$University_2 = $_SESSION['second_forminfo'][8];
	$Percentage_2 = $_SESSION['second_forminfo'][9];
	$SrNo = $_SESSION['second_forminfo'][10];
	$Certification = $_SESSION['second_forminfo'][11];
	$Passing = $_SESSION['second_forminfo'][12];
	$Duration = $_SESSION['second_forminfo'][13];
	$college = $_SESSION['second_forminfo'][14];
	$SrNo_1 = $_SESSION['second_forminfo'][15];
	$Certification_1 = $_SESSION['second_forminfo'][16];
	$Passing_1 = $_SESSION['second_forminfo'][17];
	$Duration_1 = $_SESSION['second_forminfo'][18];
	$college_1 = $_SESSION['second_forminfo'][19];
	$intersetArea = $_SESSION['third_forminfo'][0];

	foreach ($intersetArea as $key => $value) {
	}

	$Language = $_SESSION['third_forminfo'][1];
	foreach ($Language as $key => $languageValue) {
	}
	$CMSKnowledge = $_SESSION['third_forminfo'][2];
	foreach ($CMSKnowledge as $key => $CMSKnowledgeValue) {
	}
	$srNO = $_SESSION['third_forminfo'][3];
	$projectName = $_SESSION['third_forminfo'][4];
	$technology = $_SESSION['third_forminfo'][5];
	$roleInProject = $_SESSION['third_forminfo'][6];
 
	
	$email_body = '
	<html>
		<title>Intern resisgration</title>
		<head>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css" />
		</head>
			<body>
		     	<form id="multiple_page_form" >
		     		<table id="tableid">
		     			<tr>
		     				<th colspan="3">
							<h2 id="form_title">Personal Information</h2>
							</th>
		     			</tr>
		     			<tr>
							<td></td>
							<td>
								<img src = "'. $newfilename.'"  alt="your image" width="180" height="180" style= "margin-left:56%" />
							</td>
						</tr>
		     			<tr>
							<td class="td_text_right">
								<label>First Name </label>
							</td> 
							<td>
								<input type="text" name="firstname" class="form_input" disabled value= "'.$firstname.'"/> </br>
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Last Name</label>
							</td>
							<td>
								<input type="text" name="" class="form_input" disabled value="'.$lastname.'"/>
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Date Of Birth</label>
							</td>
							<td>
								<input type="txet" name="" class="form_input" disabled value="'. $dateofbirth.'"/>
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Father Name</label>
							</td>
							<td>
								<input type="text" name="" class="form_input" disabled value="'. $fathername.'"/>
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Mother name</label>
							</td>
							<td>
								<input type="text" name="" class="form_input" disabled value="'. $mothername.'"/>
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Gender</label
							</td>
							<td class="td_text" id="radioId">
								<input type="radio" name="gender" id="maleid" value="Male"  disabled /> Male	
								<input type="radio" name="gender" id="femaleid" value="Female" disabled />Female
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Marital Status</label>
							</td>
							<td class="td_text">
								<input type="radio" name="maritalStatus" id="marriedId" value="Married" disabled>Married	
								<input type="radio" name="maritalStatus" id="singleId" value="Unmarried" disabled>Unmarried
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Complete Address</label>
							</td>
							<td>
								<input type="text" name="address" class="form_input" disabled value="'.$address.'"></br>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="text" name="state" class="form_input" disabled value="'. $state.'"></br>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="text" class="form_input"  name="pinCode" disabled  value="'.$pincode.'"></br>
							</td>
						</tr>
						<tr>
							<td  class="td_text_right">
								<label>Contact No</label>
							</td>
						<td>
							<input type="text" class="form_input" name="contactno" disabled value="'.$contactno.'"/>
						</td>
						</tr>	
						<tr>
							<td  class="td_text_right">
								<label>Email Id</label>
							</td>
							<td>
								<input type="text" class="form_input" name="emailId" disabled value="'.$emailid.'">
							</td>
						</tr>	
						<tr>
							<td class="td_text_right">
								<label>In case of Emergency </label>
							</td>
							<td>
								<input type="text" class="form_input" name=" Emergencydata" disabled value="'.$emergencydata.'"/></br>
							</td>	
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="text" class="form_input" name="relationship" disabled value="'. $Relationship.'"></br>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="text" class="form_input"  name="contactNo" disabled value="'. $ContactNo.'"></br>
							</td>
						</tr>
		     		</table>
		     	</form>
		     	<form id="academic_form" >
				<h2 id="heading_form"> Academic Details</h2> 
				<fieldset class="fieldSetId">
					<legend>Academic Details</legend>
						<table class="academic_table_id">
							<tr>
								<td class="project_text">
									<label>Sr.No</label>
								</td>
								<td class="project_text">
									<label>Name Of Degree</label>
								</td>
								<td class="project_text">
									<label>Year Of Passing</label>
								</td>
								<td class="project_text">
									<label>University & College</label>
								</td>
								<td class="project_text">
									<label> Percentage</label>						
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="srNoField" id="srNo_Field" class="project_work" disabled value="'. $srno .'" >
								</td>
								<td>
									<input type="text" name="nameOfDegree" id="nameOFDegree" class="project_work" disabled value="'. $nameOfDegree .'" >
								</td>
								<td>
									<input type="text" name="yearOfPassing" id="yearOfPasing" class="project_work" disabled value="'. $yearOfPassing .'">
								</td>
								<td>
									<input type="text" name="University" id="university" class="project_work" disabled value="'. $University .'">
								</td>
								<td>
									<input type="text" name="Percentage" id="percentage" class="project_work" disabled value="'. $Percentage .'">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="srNoField_2" id ="srNoField_2" class="project_work" disabled value="'. $srNoField_2 .'">
								</td>
								<td>
									<input type="text" name="nameOfDegree_2" id="nameOfDegree_2" class="project_work" disabled value="'. $nameOfDegree_2 .'">
								</td>
								<td>
									<input type="text" name="yearOfPassing_2" id="yearOfPassing_2" class="project_work" disabled value="'. $yearOfPassing_2 .'">
								</td>
								<td>
									<input type="text" name="University_2" id="University_2" class="project_work" disabled value="'. $University_2 .'">
								</td>
								<td>
									<input type="text" name="Percentage_2" id="Percentage_2" class="project_work" disabled value="'. $Percentage .'">
								</td>
							</tr>
						</table>
				</fieldset>
				<fieldset class="fieldSetId">
					<legend>Other Certification </legend>
						<table class="academic_table_id">
							<tr>
								<td class="project_text">
									<label>Sr.No</label>
								</td>
								<td class="project_text">
									<label>Certification</label>
								</td>
								<td class="project_text">
									<label>Year Of Passing</label>
								</td>
								<td class="project_text">
									<label>Duration</label>
								</td>
								<td class="project_text">
									<label> college</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="SrNo" id="SrNo" class="project_work" disabled value="'. $SrNo .'">
								</td>
								<td>
									<input type="text" name="Certification" id="Certification" class="project_work" disabled value="'. $Certification .'">
								</td>
								<td>
									<input type="text" name="Passing" id="Passing" class="project_work" disabled value="'. $Passing .'">
								</td>
								<td>
									<input type="text" name="Duration" id="Duration" class="project_work" disabled value="'. $Duration .'">
								</td>
								<td>
									<input type="text" name="college" id="college" class="project_work" disabled value="'. $college .'">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="SrNo_1" id="SrNo_1" class="project_work" disabled value="'. $SrNo_1.'">
								</td>
								<td>
									<input type="text" name="Certification_1" id="Certification_1" class="project_work" disabled value="'. $Certification_1 .'">
								</td>
								<td>
									<input type="text" name="Passing_1" id="Passing_1" class="project_work" disabled value="'. $Passing_1 .'">
								</td>
								<td>
									<input type="text" name="Duration_1" id="Duration_1" class="project_work" disabled value="'.$Duration_1 .'">
								</td>
								<td>
									<input type="text" name="college_1" id="college_1" class="project_work" disabled value="'.$college_1 .'">
								</td>
							</tr>
						</table>
			</fieldset>	
			</form>
			<form id="technical_form_id" method="POST" action="">
			<h2 id="heading_form">Technical Details</h2>
				<fieldset class="fieldSetId">
					<legend>Interest Area</legend>
						<table class="technical_table_id">
							<tr>
								<td>
									<input type="checkbox" name="intersetArea[]" value="development"
									id="development_id" disabled >Development
									<input type="checkbox" name="intersetArea[]" value="theming" 
									id="theming_id" disabled>Theming	</br>	
									<input type="checkbox" name="intersetArea[]" value="networking" 
									id="networking_id" disabled>Networking
									<input type="checkbox" name="intersetArea[]" value="systemAdministrator"
									id="system_id" disabled>system
								</td>
							</tr>
						</table>
					</fieldset>
					<fieldset class="fieldSetId">
						<legend>Language Proficiency</legend>
							<table class="technical_table_id">
								<tr>
									<td>
										<input type="checkbox" name="Language[]" value="C" id="language_c_id" disabled>C
										<input type="checkbox" name="Language[]" value="C++" 
											id="language_id" disabled>C++
										<input type="checkbox" name="Language[]" value="Javascript" 
											id="javascript_id" disabled>Javascript </br>
										<input type="checkbox" name="Language[]" value="php" id="php_id" disabled>php
										<input type="checkbox" name="Language[]" value="HTML" 
											id="html_id" disabled>HTML
										<input type="checkbox" name="Language[]" value="CSS" id="css_id" disabled>CSS
										</td>
								</tr>
							</table>
					</fieldset>
					<fieldset class="fieldSetId">
						<legend>CMS Knowledge</legend>
							<table class="technical_table_id">
								<tr>
									<td>
										<input type="checkbox" name="CMSKnowledge[]" value="Drupal" 
										id="drupal_id" disabled>Drupal
										<input type="checkbox" name="CMSKnowledge[]" value="Wordpress" 
										id="wordpress_id" disabled>Wordpress </br>
										<input type="checkbox" name="CMSKnowledge[]" value="None" id="none_id" disabled>None
									</td>
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
										<input type="text" name="srNO" class="project_input" disabled value="'. $srNO .'">
									</td>
									<td>
										<input type="text" name="projectName" class="project_input" disabled value="'. $projectName .'">
									</td>
									<td>
										<input type="text" name="technology" class="project_input" disabled value="'. $technology .'">
									</td>
									<td>
										<textarea rows="4" cols="50" name="message" id="textarea"  class="project_input" disabled  value="" placeholder= "'.$roleInProject.'"></textarea>
									</td>
								</tr>
							</table>
					</fieldset>
				</form>
			</body>
	</html>';
	
	$to = "himanithakur815@gmail.com";
	$from = "rajender.r@gai.co.in";
	$subject = "Intern Registration forms";

	if (mail($to, $subject, $email_body)) {
	 echo("<p>Email successfully sent!</p>");
	 } else {
	 echo("<p>Email delivery failed…</p>");
	 }
?>

<html>
	<head>
		<script type="text/javascript" src="jquery-3.2.1.js"></script>
	</head>
	<body>
		<?php if($gender == "Female"){
				echo '<script type="text/javascript">
							$("#femaleid").attr("checked", true);
						</script>';
			}else if($gender == "Male"){
				echo '<script type="text/javascript">
							$("#maleid").attr("checked", true);
						</script>';
			}

			if($maritalstatus == "Married") {
				echo '<script type="text/javascript">
							$("#marriedId").attr("checked", true);
						</script>';	
			}else if($maritalstatus == "Unmarried") {
				echo '<script type="text/javascript">
							$("#singleId").attr("checked", true);
						</script>';
			}
			if($value == "development"){
				echo '<script type="text/javascript">
							$("#development_id").attr("checked", true);
						</script>';	
			}else if($value == "theming") {
				echo '<script type="text/javascript">
							$("#theming_id").attr("checked", true);
						</script>';
			}else if($value == "networking") {
				echo '<script type="text/javascript">
							$("#networking_id").attr("checked", true);
						</script>';
			}else if($value == "systemAdministrator") {
				echo '<script type="text/javascript">
							$("#system_id").attr("checked", true);
						</script>';
			}
			
		foreach ($Language as $key => $languageValue) {
			if($languageValue == "C"){
				echo '<script type="text/javascript">
							$("#language_c_id").attr("checked", true);
						</script>';	
			}else if($languageValue == "C++") {
				echo '<script type="text/javascript">
							$("#language_id").attr("checked", true);
						</script>';
			}else if($languageValue == "Javascript") {
				echo '<script type="text/javascript">
							$("#javascript_id").attr("checked", true);
						</script>';
			}else if($languageValue == "php") {
				echo '<script type="text/javascript">
							$("#php_id").attr("checked", true);
						</script>';
			}else if($languageValue == "HTML") {
				echo '<script type="text/javascript">
							$("#html_id").attr("checked", true);
						</script>';
			}else if($languageValue == "CSS") {
				echo '<script type="text/javascript">
							$("#css_id").attr("checked", true);
						</script>';
			}
		}

			 if($CMSKnowledgeValue == "Drupal") {
				echo '<script type="text/javascript">
							$("#drupal_id").attr("checked", true);
						</script>';
			}else if($CMSKnowledgeValue == "Wordpress") {
				echo '<script type="text/javascript">
							$("#wordpress_id").attr("checked", true);
						</script>';
			}else if($CMSKnowledgeValue == "None") {
				echo '<script type="text/javascript">
							$("#none_id").attr("checked", true);
						</script>';
			}
		?>	
	</body>
</html>

