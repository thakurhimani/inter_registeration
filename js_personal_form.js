
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

// Third form validation
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

// Second form validation
function srNo() {
	var srNoField = document.getElementById('srNo_Field').value;
	if(!/^[0-9]+$/.test(srNoField)) {
		document .getElementById('error_srno').innerHTML = "Please enter digit no ";
		return false;
	}else{
		document.getElementById('error_srno').innerHTML = "";
		return true;
	}
}
 
 function nameOfdegree() {
 	var nameofdegree = document.getElementById('nameOFDegree').value;
 	if(!/^[a-zA-Z]+$/.test(nameofdegree)) {
 		document.getElementById('error_nameOfDegree').innerHTML = "Please enter the value of degree in characters ";
 		return false;
 	}else{
 		document.getElementById('error_nameOfDegree').innerHTML = "";
 		return true;
 	}
 }

 function yearofpassing() {
 	var yearofpassing = document.getElementById('yearOfPasing').value;
 	if(!/^[0-9]+$/.test(yearofpassing)) {
 		document.getElementById('error_yearofpassing').innerHTML = "Please enter the value of yearofpasing in digit no";
 		return false;
 	}else{
 		document.getElementById('error_yearofpassing').innerHTML = "";
 		return true;
 	}
 }

 function university_function(){
 	var university = document.getElementById("university").value;
 	if(!/^[a-zA-Z]+$/.test(university)) {
 		document.getElementById('error_university').innerHTML = "Please enter the value of university in characters ";
 		return false;
 	}else{
 		document.getElementById("error_university").innerHTML = "";
 		return true;
 	}
 }

 function percentage_function(){
 	var percentage = document.getElementById('percentage').value;
 	if(!/^[0-9]+$/.test(percentage)) {
 		document.getElementById('error_percentage').innerHTML = "Please enter the value of percentage in digit no ";
 		return false;
 	}else{
 		document.getElementById('error_percentage').innerHTML = "";
 		return true;
 	}
 }

 function srNoField_2_fuction(){
 	var srNoField_2 = document.getElementById('srNoField_2').value;
 	if(!/^[0-9]+$/.test(srNoField_2)) {
 		document.getElementById('error_srNoField_2').innerHTML = "Please enter the value of srNoField in digit no";
 		return false;
 	}else{
 		document.getElementById('error_srNoField_2').innerHTML = "";
 		return true;
 	}
 }

function nameOfDegree_2_function(){
	var nameOfDegree_2 = document.getElementById('nameOfDegree_2').value;
	if(!/^[a-zA-Z]+$/.test(nameOfDegree_2)) {
		document.getElementById('error_nameOfDegree_2').innerHTML = "Please enter the value of nameOfDegree in characters";
		return false;
	}else{
		document.getElementById('error_nameOfDegree_2').innerHTML = "";
		return true;
	}
}

function yearOfPassing_2_function() {
	var yearOfPassing_2 = document.getElementById('yearOfPassing_2').value;
	if(!/^[0-9]+$/.test(yearOfPassing_2)) {
		document.getElementById('error_yearofpassing_2').innerHTML = "Please enter the value of pssing year in digit no";
		return false;		
	}else{
		document.getElementById('error_yearofpassing_2').innerHTML = "";
		return true;
	}
}

function University_2_function() {
	var University_2 = document.getElementById('University_2').value;
	if(!/^[a-zA-Z]+$/.test(University_2)) {
		document.getElementById('error_university_2').innerHTML = "Please enter the value of university in characters";
		return false;
	}else{
		document.getElementById('error_university_2').innerHTML = "";
		return true;
	}
}

function percentage_2_function() {
	var percentage_2 = document.getElementById('Percentage_2').value;
	if(!/^[0-9]+$/.test(percentage_2)) {
		document.getElementById('error_percentage_2').innerHTML = "Please enter the value of percentage in digit no ";
		return false;
	}else{
		document.getElementById('error_percentage_2').innerHTML = "";
		return true;
	}
}

//other Certification validation
function other_SrNo_function() {
	var other_sr_no = document.getElementById('other_SrNo').value;
	if(!/^[0-9]+$/.test(other_sr_no)) {
		document.getElementById('error_other_sr_no').innerHTML = "Please enter the value of srno in digit"
		return false;
	}else{
		document.getElementById('error_other_sr_no').innerHTML ="";
		return true;
	}
}

function other_Certification_function() {
	var other_Certification = document.getElementById('other_Certification').value;
	if(!/^[a-zA-Z]+$/.test(other_Certification)) {
		document.getElementById('error_other_Certification').innerHTML = "Please enter the value of Certificate in characters";
		return false;
	}else{
		document.getElementById('error_other_Certification').innerHTML = "";
		return true;
	}
}

function other_Passing_function() {
	var other_Passing = document.getElementById('other_Passing').value;
	if(!/^[0-9]+$/.test(other_Passing)) {
		document.getElementById('error_other_Passing').innerHTML = "Please enter the value of passing in digit no ";
		return false;
	}else{
		document.getElementById('error_other_Passing').innerHTML ="";
		return true;
	}
}

function other_Duration_function() {
	var  other_Duration = document.getElementById('other_Duration').value;
	if(!/^[0-9]+$/.test( other_Duration)) {
		document.getElementById('error_other_Duration').innerHTML = "Please enter the value of duration in digit no ";
		return false;
	}else{
		document.getElementById('error_other_Duration').innerHTML ="";
		return true;
	}
}

function other_college_function() {
	var other_college = document.getElementById('other_college').value;
	if(!/^[a-zA-Z]+$/.test(other_college)) {
		document.getElementById('error_other_college').innerHTML = "Please enter the value of college in characters";
		return false;
	}else{
		document.getElementById('error_other_college').innerHTML = "";
		return true;
	}
}


function validateSecondForm(){
	//sr no1 validation
	var srNoField = document.getElementById('srNo_Field').value;
	if(srNoField=="") {
		document .getElementById('error_srno').innerHTML = "Please enter the value of sr.no. ";
	}else{
		document.getElementById('error_srno').innerHTML = "";
	}

	//name of degree1 validation
	var nameofdegree = document.getElementById('nameOFDegree').value;
 	if(nameofdegree=="") {
 		document.getElementById('error_nameOfDegree').innerHTML = "Please enter the value of degree";
 	}else{
 		document.getElementById('error_nameOfDegree').innerHTML = "";
 	}

 	// passing year1 validation
 	var yearofpassing = document.getElementById('yearOfPasing').value;
 	if(yearofpassing=="") {
 		document.getElementById('error_yearofpassing').innerHTML = "Please enter the value of yearofpasing ";
 	}else{
 		document.getElementById('error_yearofpassing').innerHTML = "";
 	}

 	//university validation
 	var university = document.getElementById("university").value;
 	if(university=="") {
 		document.getElementById('error_university').innerHTML = "Please enter the value of university in characters ";
 	}else{
 		document.getElementById("error_university").innerHTML = "";
 	}
//percentage validation
 	var percentage = document.getElementById('percentage').value;
 	if(percentage=="") {
 		document.getElementById('error_percentage').innerHTML = "Please enter the value of percentage ";
 	}else{
 		document.getElementById('error_percentage').innerHTML = "";
 	}

 	if(srNoField=="" ||nameofdegree=="" ||yearofpassing=="" ||university=="" ||percentage==""  ){
			return false;	
	}
	else{
		return true;
	}

}
