<html>
	<title>form</title>
	<head>
		<script src="js_personal_form.js"></script>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
	</head>
	<body>
			<form id="academic_form" action="technical_details.php" method="POST">
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
									<input type="text" name="srNoField" id="srNo_Field" class="project_work" onfocusout="srNo()">
								</td>
								<td>
									<input type="text" name="nameOfDegree" id="nameOFDegree" class="project_work">
								</td>
								<td>
									<input type="text" name="yearOfPassing" id="yearOfPasing" class="project_work">
								</td>
								<td>
									<input type="text" name="University" id="university" class="project_work">
								</td>
								<td>
									<input type="text" name="Percentage" id="percentage" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="srNoField_2" id ="srNoField_2" class="project_work">
								</td>
								<td>
									<input type="text" name="nameOfDegree_2" id="nameOfDegree_2" class="project_work">
								</td>
								<td>
									<input type="text" name="yearOfPassing_2" id="yearOfPassing_2" class="project_work">
								</td>
								<td>
									<input type="text" name="University_2" id="University_2" class="project_work">
								</td>
								<td>
									<input type="text" name="Percentage_2" id="Percentage_2" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="srNoField_3" class="project_work">
								</td>
								<td>
									<input type="text" name="nameOfDegree_3" class="project_work">
								</td>
								<td>
									<input type="text" name="yearOfPassing_3" class="project_work">
								</td>
								<td>
									<input type="text" name="University_3" class="project_work">
								</td>
								<td>
									<input type="text" name="Percentage_3" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="srNoField_4" class="project_work">
								</td>
								<td>
									<input type="text" name="nameOfDegree_4" class="project_work">
								</td>
								<td>
									<input type="text" name="yearOfPassing_4" class="project_work">
								</td>
								<td>
									<input type="text" name="University_4" class="project_work">
								</td>
								<td>
									<input type="text" name="Percentage_4" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="srNoField_5" class="project_work">
								</td>
								<td>
									<input type="text" name="nameOfDegree_5" class="project_work">
								</td>
								<td>
									<input type="text" name="yearOfPassing_5" class="project_work">
								</td>
								<td>
									<input type="text" name="University_5" class="project_work">
								</td>
								<td>
									<input type="text" name="Percentage_5" class="project_work">
								</td>
							</tr>
						</table>
				</fieldset>
				<table>
					<tr>
						<td id="error_table">*</td>
					</tr>
				</table>
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
									<input type="text" name="SrNo" id="SrNo" class="project_work">
								</td>
								<td>
									<input type="text" name="Certification" id="Certification" class="project_work">
								</td>
								<td>
									<input type="text" name="Passing" id="Passing" class="project_work">
								</td>
								<td>
									<input type="text" name="Duration" id="Duration" class="project_work">
								</td>
								<td>
									<input type="text" name="college" id="college" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="SrNo_1" id="SrNo_1" class="project_work">
								</td>
								<td>
									<input type="text" name="Certification_1" id="Certification_1" class="project_work">
								</td>
								<td>
									<input type="text" name="Passing_1" id="Passing_1" class="project_work">
								</td>
								<td>
									<input type="text" name="Duration_1" id="Duration_1" class="project_work">
								</td>
								<td>
									<input type="text" name="college_1" id="college_1" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="SrNo_2" class="project_work">
								</td>
								<td>
									<input type="text" name="Certification_2" class="project_work">
								</td>
								<td>
									<input type="text" name="Passing_2" class="project_work">
								</td>
								<td>
									<input type="text" name="Duration_2" class="project_work">
								</td>
								<td>
									<input type="text" name="college_2" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="SrNo_3" class="project_work">
								</td>
								<td>
									<input type="text" name="Certification_3" class="project_work">
								</td>
								<td>
									<input type="text" name="Passing_3" class="project_work">
								</td>
								<td>
									<input type="text" name="Duration_3" class="project_work">
								</td>
								<td>
									<input type="text" name="college_3" class="project_work">
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="SrNo_4" class="project_work">
								</td>
								<td>
									<input type="text" name="Certification_4" class="project_work">
								</td>
								<td>
									<input type="text" name="Passing_4" class="project_work">
								</td>
								<td>
									<input type="text" name="Duration_4" class="project_work">
								</td>
								<td>
									<input type="text" name="college_4" class="project_work">
								</td>
							</tr>
						</table>
			</fieldset>
						<table id="submitbtn_id">
							<tr>
								<td>
									<input id="submitId" type="submit" value="Next" name="submit_second">
								</td>
							</tr>
						</table>		
			</form>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit_second'])){
	$_SESSION['second_forminfo'] = array();
	$srNoField = $_POST['srNoField'];
	$nameOfDegree = $_POST['nameOfDegree'];
	$yearOfPassing = $_POST['yearOfPassing'];
	$University = $_POST['University'];
	$Percentage = $_POST['Percentage'];
	$srNoField_2 = $_POST['srNoField_2'];
	$nameOfDegree_2 = $_POST['nameOfDegree_2'];
	$yearOfPassing_2 = $_POST['yearOfPassing_2'];
	$University_2 = $_POST['University_2'];
	$Percentage_2 = $_POST['Percentage_2'];
	$SrNo = $_POST['SrNo'];
	$Certification = $_POST['Certification'];
	$Passing = $_POST['Passing'];
	$Duration = $_POST['Duration'];
	$college = $_POST['college'];
	$SrNo_1 = $_POST['SrNo_1'];
	$Certification_1 = $_POST['Certification_1'];
	$Passing_1 = $_POST['Passing_1'];
	$Duration_1 = $_POST['Duration_1'];
	$college_1 = $_POST['college_1'];
	array_push($_SESSION['second_forminfo'],$srNoField ,$nameOfDegree,$yearOfPassing,$University,$Percentage,$srNoField_2,
		$nameOfDegree_2,$yearOfPassing_2,$University_2,$Percentage_2,$SrNo,$Certification,$Passing ,$Duration,$college,$SrNo_1,
		$Certification_1,$Passing_1,$Duration_1,$college_1);
		header("Location:technical_details.php");
	}
	
?>