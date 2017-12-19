<?php
	session_start();
	if(isset($_POST['submit'])){
		$_SESSION['forminfo'] = array();
		$profileImage=$_POST['profileImage'];
		$image=$_POST['image'];
		$firstName= $_POST['firstName'];
		$lastName= $_POST['lastName'];		
		$dateOfBirth=$_POST['dateOfBirth'];
		$fatherName=$_POST['fatherName'];
		$motherName=$_POST['motherName'];
		$gender=$_POST['gender'];
		$maritalStatus=$_POST['maritalStatus'];
		$address=$_POST['address'];
		$state=$_POST['state'];
		$pinCode=$_POST['pinCode'];
		$contactno=$_POST['contactno'];
		$emailId=$_POST['emailId'];	
		$Emergencydata=$_POST['Emergencydata'];	
		$relationship=$_POST['relationship'];	 
		$contactNo=$_POST['contactNo'];
		array_push($_SESSION['forminfo'],$profileImage,$image,$firstName,$lastName,$dateOfBirth,$fatherName,$motherName,
			$gender,$maritalStatus,$address,$state,$pinCode,$contactno,$emailId,$Emergencydata,$relationship,$contactNo);
	}
?>
<html>
	<title>Personal details</title>
	<head>
		<script src="js_personal_form.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css" />
	</head>                                      
	<body>
		<form id="multiple_page_form" action="" method="POST" >
			<table id="tableid">
				<tr>
					<th colspan="3">
						<h2 id="form_title">Personal Information</h2>
					</th>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type='file' id="fileId" name="profileImage" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
						<img id="output" name="image" src="http://placehold.it/180" alt="your image" width="180" height="180" />
					</td>
					<td id="fileError" class="error_Id">*</td>
				</tr>
				<tr>
					<td class="td_text_right">
						<label>First Name </label>
					</td> 
					<td>
						<input type="text" name="firstName" id="firstNameId" placeholder="First Name"  onfocusout="firstname_func()"
							class="form_input"/> </br>
					</td>
					<td id="firstNameError" class="error_Id">*</td>
					</tr>
				<tr>
					<td class="td_text_right">
						<label>Last Name</label>
					</td>
					<td>
						<input type="text" class="form_input" name="lastName" id="lastNameId" 
							placeholder="Last Name" onfocusout="lastname_func()"/></br>
					</td>
					<td id="lastNameError" class="error_Id">*</td>				
				</tr>
				<tr>
					<td class="td_text_right">
						<label>Date Of Birth</label>
					</td>
					<td>
						<input type="text" class="form_input" name="dateOfBirth" id="dateOfBirthId" 
							placeholder="Date Of Birth" onfocusout="dob_func()" />
					</td>
					<td id="dateOfBithError" class="error_Id">*</td>
				</tr>
				<tr>
					<td class="td_text_right">
						<label>Father's Name</label>
					</td>
					<td>
						<input type="text" class="form_input" name="fatherName" id="fatherNameId" 
							placeholder="Father's Name" onfocusout="fathername_func()" />
					</td>
					<td id="father_name_id" class="error_Id">*</td>
			</tr>
			<tr>
				<td class="td_text_right">
					<label>Mother's Name</label>
				</td> 
				<td>
					<input type="text" class="form_input" name= "motherName" id="motherNameId" 
						placeholder="Mother's Name" onfocusout="mothername_func()"/>
				</td>
				<td id="mother_name_id" class="error_Id">*</td>
			</tr>
			<tr>
				<td class="td_text_right">
					<label>Gender</label>
				</td>
				<td class="td_text">
					<input type="radio" name="gender" id="maleid" value="Male">Male	
					<input type="radio" name="gender" id="femaleid" value="Female">Female
				</td>
				<td id="genderError" class="error_Id">*</td>
			</tr>
			<tr>
				<td class="td_text_right">
					<label>Marital Status</label>
				</td>
				<td class="td_text">
					<input type="radio" name="maritalStatus" id="marriedId" value="Married">Married	
					<input type="radio" name="maritalStatus" id="singleId" value="Single">Single
					<input type="radio" name="maritalStatus" id="anyotherId" value="anyother">Any Other
				</td>
				<td id="maritalStatusError" class="error_Id">*</td>
			</tr>
			<tr>
				<td class="td_text_right">
					<label>Complete Address</label>
				</td>
				<td>
					<input type="text" class="form_input" name="address" id="districtId" 
						placeholder="District" onfocusout="district_func()"/></br>
				</td>
				<td id="districtError" class="error_Id">*</td>	
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="text" class="form_input" name="state" id="stateidId" 
						placeholder="State" onfocusout="state_func()"></br>
				</td>
				<td id="stateError" class="error_Id">*</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="text" class="form_input"  name="pinCode" id="pinCodeId" 
						placeholder="Pin Code" onfocusout="pinCode_func()"></br>
				</td>
				<td id="pinCodeError" class="error_Id">*</td>
			</tr>
			<tr>
				<td class="td_text_right">
					<label>Contact No</label>
				</td>
				<td>
					<input type="text" class="form_input" name="contactno" id="contactNoId" 
					placeholder="Contact No" onfocusout="contactNO_func()"/>
				</td>
				<td id="contactNoError" class="error_Id">*</td>
			</tr>	
			<tr>
				<td class="td_text_right">
					<label>Email Id</label>
				</td>
				<td>
					<input type="text" class="form_input" name="emailId" id="email_id" 
					placeholder="Email Id" onfocusout="emailId_func()">
				</td>
				<td id="emailIdError" class="error_Id">*</td>
			</tr>	
			<tr>
				<td class="td_text_right">
					<label>In case of Emergency </label>
				</td>
				<td>
					<input type="text" class="form_input" name=" Emergencydata" id="emergencyNameId" 
						placeholder="Name" onfocusout="emergencyName_func()" /></br>
				</td>
				<td id="nameError" class="error_Id">*</td>	
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="text" class="form_input" name="relationship" id="relationshipId" 
					placeholder="Relatonship" onfocusout="emergencyRelationship_func()"></br>
				</td>
				<td id="relationError" class="error_Id">*</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="text" class="form_input"  name="contactNo" id="emergency_contactno_Id" 
						placeholder="Contact No" onfocusout="emergency_contactno_func()"></br>
				</td>
				<td id="emergency_contactno_error" class="error_Id">*</td>
			</tr>
			<tr>
				<td id="btn_Id" colspan="2">
				<input id="resetId" type="submit" value="Next" name="submit" onclick="return validateForm()">
			</td> 
			</tr>
			</table>
		</form>
	</body>
</html>
