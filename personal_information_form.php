<html>
	<title>multi page form</title>
	<head>
		<script src="js_personal_form.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css" />
	</head>                                      
	<body>
		<form id="multiple_page_form" action="academic_details_form.php" method="POST" >
			<table id="tableid">
				<tr>
					<th colspan="3">
						<h2 id="form_title">Personal Information</h2>
					</th>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="file" name="profileImage" id="fileId">
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
					<input type="text" class="form_input" name="address" id="stateidId" 
						placeholder="State" onfocusout="state_func()"></br>
				</td>
				<td id="stateError" class="error_Id">*</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="text" class="form_input"  name="address" id="pinCodeId" 
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
					<input type="text" class="form_input" name="Emergencydata" id="relationshipId" 
					placeholder="Relatonship" onfocusout="emergencyRelationship_func()"></br>
				</td>
				<td id="relationError" class="error_Id">*</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="text" class="form_input"  name="Emergencydata" id="emergency_contactno_Id" 
						placeholder="Contact No" onfocusout="emergency_contactno_func()"></br>
				</td>
				<td id="emergency_contactno_error" class="error_Id">*</td>
			</tr>
			<tr>
				<td id="btn_Id" colspan="2">
				<input id="resetId" type="reset" value="Reset">
				<input id="resetId" type="submit" value="Next" name="submit" onclick="return validateForm()">
			</td>
			</tr>
			</table>
		</form>
	</body>
</html>
