
function firstname_func() {
	var firstName = document.getElementById('firstNameId').value;
	if(firstName=='') {
		document.getElementById('firstNameError').innerHTML = "Please enter the firstname value";	
		return false;
	}if(!/^[a-zA-Z]+$/.test(firstName)) {
		document.getElementById('firstNameError').innerHTML = "Invalid characters";
		return false;
	}else {
		document.getElementById('firstNameError').innerHTML = "";
	}
}

function lastname_func(){
	var lastName = document.getElementById('lastNameId').value;
	if(lastName=='') {
		document.getElementById('lastNameError').innerHTML = "Please enter the lastname value";
		return false;
	}if(!/^[a-zA-Z]+$/.test(lastName)){
		document.getElementById('lastNameError').innerHTML = "Invalid characters";
		return false;
	}else {
		document.getElementById('lastNameError').innerHTML = "";
	}
}

function dob_func(){
	var dob = document.getElementById('dateOfBirthId').value;
	if(dob=='') {
		document.getElementById('dateOfBithError').innerHTML = "Please enter the date of birth";
		return false;
	}if(!/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/.test(dob)){
		document.getElementById('dateOfBithError').innerHTML = "Invalid date of birth";
		return false;
	}else {
		document.getElementById('dateOfBithError').innerHTML = "";
	}
}

function fathername_func() {
	var fatherName = document.getElementById('fatherNameId').value;
	if(fatherName=='') {
		document.getElementById('father_name_id').innerHTML = "Please enter the father name value";	
		return false;
	}if(!/^[a-zA-Z]+$/.test(fatherName)) {
		document.getElementById('father_name_id').innerHTML = "Invalid characters";
		return false;
	}else {
		document.getElementById('father_name_id').innerHTML = "";
	}
}

function mothername_func() {
	var motherName = document.getElementById('motherNameId').value;
	if(motherName=='') {
		document.getElementById('mother_name_id').innerHTML = "Please enter the mother name value";	
		return false;
	}if(!/^[a-zA-Z]+$/.test(motherName)) {
		document.getElementById('mother_name_id').innerHTML = "Invalid characters";
		return false;
	}else {
		document.getElementById('mother_name_id').innerHTML = "";
	}
}

function pinCode_func(){
 	var pinCode = document.getElementById('pinCodeId').value;
 	if(pinCode=='') {
 		document.getElementById('pinCodeError').innerHTML = "Please enter the pincode value";
 		return false;
 	}if(!/^[0-9]{1,6}$/.test(pinCode)) {
 		document.getElementById('pinCodeError').innerHTML = "Pin code should be 6 digits";
 	}else {
 		document.getElementById('pinCodeError').innerHTML = "";
 	}
 }

function contactNO_func(){
	var contactNo = document.getElementById('contactNoId').value;
	if(contactNo=='') {
		document.getElementById('contactNoError').innerHTML = "Please enter the contact no value";
		return false;
	}if(!/^[0-9]{1,10}$/.test(contactNo)) {
		document.getElementById('contactNoError').innerHTML = "contact no should be 10 digit";
	}else {
		document.getElementById('contactNoError').innerHTML = "";
	}
}

function emailId_func(){
	var emailId = document.getElementById('email_id').value;
	if(emailId==''){
		document.getElementById('emailIdError').innerHTML = "Please enter email id";
		return false;
	}if(!/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(emailId)) {
		document.getElementById('emailIdError').innerHTML = "Invalid email id";
	}else {
		document.getElementById('emailIdError').innerHTML = "";
	}
}

function emergencyName_func() {
	var name = document.getElementById('emergencyNameId').value;
	if(name==''){
		document.getElementById('nameError').innerHTML = "Please enter name value";
		return false;
	}if(!/^[a-zA-Z]+$/.test(name)) {
		document.getElementById('nameError').innerHTML = "Invalid name value";
	}else{
		document.getElementById('nameError').innerHTML = "";
	}
}

function emergencyRelationship_func() {
	var relation = document.getElementById('relationshipId').value;
	if(relation==''){
		document.getElementById('relationError').innerHTML = "Please enter relationship value";
		return false;
	}if(!/^[a-zA-Z]+$/.test(relation)) {
		document.getElementById('relationError').innerHTML = "Invalid name value";
	}else{
		document.getElementById('relationError').innerHTML = "";
	}
}

function emergency_contactno_func(){
	var contactno = document.getElementById('emergency_contactno_Id').value;
	if(contactno==''){
		document.getElementById('emergency_contactno_error').innerHTML = "Please enter contact no";
		return false;
	}if(!/^[0-9]{1,10}$/.test(contactno)){
		document.getElementById('emergency_contactno_error').innerHTML = "Please enter 10 digit contact no ";
	}else{
		document.getElementById('emergency_contactno_error').innerHTML = "";
	}
}

function district_func(){
	var district = document.getElementById('districtId').value;
	if(district==''){
		document.getElementById('districtError').innerHTML = "Please enter district value";
		return false;
	}if(!/^[a-zA-Z]+$/.test(district)){
		document.getElementById('districtError').innerHTML = "Invalid characters";
	}else{
		document.getElementById('districtError').innerHTML = "";
	}
}

function state_func() {
	var state = document.getElementById('stateidId').value;
	if(state==''){
		document.getElementById('stateError').innerHTML = "Please enter state value";
		return false;
	}if(!/^[a-zA-Z]+$/.test(state)){
		document.getElementById('stateError').innerHTML = "Invalid characters";
	}else{
		document.getElementById('stateError').innerHTML = "";
	}
}

function validateForm() {
	//validate profileImage
	if (!document.getElementById("fileId").value) {
    document.getElementById('fileError').innerHTML = "Please choose a profile picture!";
		}else {
      document.getElementById('fileError').innerHTML = "";
     }
	//firstname validation
	var firstName = document.getElementById('firstNameId').value;
	if(firstName=='') {
		document.getElementById('firstNameError').innerHTML = "Please enter the firstname value";	
	}else{
		document.getElementById('firstNameError').innerHTML = "";
	}

	//lastname validation	
	var lastName = document.getElementById('lastNameId').value;
	if(lastName==''){
		document.getElementById('lastNameError').innerHTML = "Please enter the lastname value";
	}else{
		document.getElementById('lastNameError').innerHTML = "";
	}

	// date of birth validation
	var dob = document.getElementById('dateOfBirthId').value;
	if(dob=='') {
		document.getElementById('dateOfBithError').innerHTML = "Please enter the date of birth";
		}else{
		document.getElementById('dateOfBithError').innerHTML = "";
	}

	// father's name validation
	var fatherName = document.getElementById('fatherNameId').value;
	if(fatherName=='') {
		document.getElementById('father_name_id').innerHTML = "Please enter the father name value";	
	}else{
		document.getElementById('father_name_id').innerHTML = "";
	}

	//mother's name validation
	var motherName = document.getElementById('motherNameId').value;
	if(motherName=='') {
		document.getElementById('mother_name_id').innerHTML = "Please enter the mother name value";	
	}else{
		document.getElementById('mother_name_id').innerHTML = "";
	}

	//gender validation
	var gender = document.getElementsByName('gender');
  var genValue = false;
	for(var i=0; i<gender.length;i++){
    if(gender[i].checked == true){
      genValue = true;    
    }

  }
    if(!genValue){
      document.getElementById('genderError').innerHTML = "Must check some option";
    }else {
    	document.getElementById('genderError').innerHTML = "";
    }

   //marital status validation
   var status = document.getElementsByName('maritalStatus');
   var statusValue = false;
   for (var i=0; i<status.length ; i++) {
	   	if(status[i].checked == true){
	   		statusValue = true;
	   	}
   	}
   		if(!statusValue){
   			document.getElementById('maritalStatusError').innerHTML ="Must check some option";
   		}else{
   			document.getElementById('maritalStatusError').innerHTML ="";

   		}

   	// district validation
   	var district = document.getElementById('districtId').value;
		if(district==''){
			document.getElementById('districtError').innerHTML = "Please enter district value";
		}else{
   		document.getElementById('districtError').innerHTML ="";
   	}

   // state validation
   var state = document.getElementById('stateidId').value;
		if(state==''){
			document.getElementById('stateError').innerHTML = "Please enter state value";
		}else{
			document.getElementById('stateError').innerHTML ="";
		}

		// pin code validation
		var pinCode = document.getElementById('pinCodeId').value;
	 	if(pinCode=='') {
	 		document.getElementById('pinCodeError').innerHTML = "Please enter the pincode value";
	 	}else{
	 		document.getElementById('pinCodeError').innerHTML ="";
	 	}

	 	// contact no validation
	 	var contactNo = document.getElementById('contactNoId').value;
		if(contactNo=='') {
			document.getElementById('contactNoError').innerHTML = "Please enter the contact no value";
		}else{
			document.getElementById('contactNoError').innerHTML ="";
		}

		// email id validation
		var emailId = document.getElementById('email_id').value;
		if(emailId==''){
			document.getElementById('emailIdError').innerHTML = "Please enter email id";
			}else{
				document.getElementById('emailIdError').innerHTML ="";
			}

		//emergency name validation
			var name = document.getElementById('emergencyNameId').value;
			if(name==''){
				document.getElementById('nameError').innerHTML = "Please enter name value";
			}else{
				document.getElementById('nameError').innerHTML ="";
		}

		//
		var relation = document.getElementById('relationshipId').value;
		if(relation==''){
			document.getElementById('relationError').innerHTML = "Please enter relationship value";
		}else{
			document.getElementById('relationError').innerHTML ="";
		}

		// emergency contact no validation
		var contactno = document.getElementById('emergency_contactno_Id').value;
		if(contactno==''){
			document.getElementById('emergency_contactno_error').innerHTML = "Please enter contact no";
		}else{
			document.getElementById('emergency_contactno_error').innerHTML ="";
		}

		if(!document.getElementById("fileId").value|| firstName=='' ||lastName=='' ||dob=='' ||fatherName=='' ||motherName=='' || !genValue ||!statusValue
				||district=='' ||state=='' ||pinCode=='' || contactNo=='' ||emailId=='' ||name=='' ||relation=='' ||contactno==''){
			return false;	
	}
	else{
		return true;
	}
		
}
function validate_third_Form(){
//interst area validation
	var check= document.getElementsByName('intersetArea[]');
	for (var i=0; i<check.length; i++) {
		if (check[i].checked)
		break;
	}
		if(i==check.length) {
			document.getElementById('error_intersetArea').innerHTML= "Please check at least one";
		}else{
			document.getElementById('error_intersetArea').innerHTML= "";
		}

// language validation
	var count= document.getElementsByName('Language[]');
	for (var n=0; n<count.length; n++) {
		if (count[n].checked)
		break;
	}
	if(n==count.length) {
		document.getElementById('error_language_id').innerHTML= "Please check at least one";
	}else{
		document.getElementById('error_language_id').innerHTML= "";
	} 


// cms validation
	var cms= document.getElementsByName('CMSKnowledge[]');
	for (var x=0; x<cms.length; x++) {
		if (cms[x].checked)
		break;
	}
	if(x==cms.length) {
		document.getElementById('checkboxError').innerHTML= "Please check at least one";
	}else{
		document.getElementById('checkboxError').innerHTML= "";		
	}

	if(i==check.length || n==count.length || x==cms.length){
		return false;
	}else{
		return true;
	}
}
/*
function srNo(){
	var srNoField = document.getElementById('srNo_Field').value;
	}if(!"/^[^0-9]/".test(srNoField)){
		document .getElementById('error_table').innerHTML = "Please enter digit no ";
		return false;
	}else{
		document.getElementById('error_table').innerHTML = "";
		return true;
	}
}*/
 