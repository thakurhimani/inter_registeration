<?php 
session_start();
/*for($i = 0 ; $i < count($_SESSION['forminfo']) ; $i++) {
    echo $_SESSION['forminfo'][$i];
   }
for($j = 0; $j < count($_SESSION['second_forminfo']) ;$j++) {
	echo $_SESSION['second_forminfo'][$j];
}

for($x = 0; $x < count($_SESSION['third_forminfo']) ;$x++){
	echo $_SESSION['third_forminfo'][$x];
}*/
	$profileimage = $_SESSION['forminfo'][0];
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
	$Language = $_SESSION['third_forminfo'][1];
	$CMSKnowledge = $_SESSION['third_forminfo'][2];
	$srNO = $_SESSION['third_forminfo'][3];
	$projectName = $_SESSION['third_forminfo'][4];
	$technology = $_SESSION['third_forminfo'][5];
	$message = $_SESSION['third_forminfo'][6];

?>

<html>
	<head></head>
	<body>
		<h2>Email form</h2>
			<h4>First Form</h4>
				<h4>Profileimage :</h4> <h5><?php echo $profileimage;?></h5>
				<h4>First Name :</h4> <h5><?php echo $firstname;?></h5>
				<h4>Last Name :</h4> <h5><?php echo $lastname;?></h5>
				<h4>Date of Birth:</h4> <h5><?php echo $dateofbirth;?></h5>
				<h4>Father Name:</h4> <h5><?php echo $fathername;?></h5>
				<h4>Mother Name:</h4> <h5><?php echo $mothername;?></h5>
				<h4>Gender :</h4> <h5><?php echo $gender;?></h5>
				<h4>Marital Status:</h4> <h5><?php echo $maritalstatus;?></h5>
				<h4>Address :</h4> <h5><?php echo $address;?></h5>
				<h4>State :</h4> <h5><?php echo $state;?></h5>
				<h4>>Pincode :</h4> <h5><?php echo $pincode;?></h5>
				<h4>Contact No :</h4> <h5><?php echo $contactno;?></h5>
				<h4>Email Id  :</h4> <h5><?php echo $emailid;?></h5>
				<h4>Emergency data :</h4> <h5><?php echo $emergencydata;?></h5>
				<h4>Relationship:</h4> <h5><?php echo $Relationship;?></h5>
				<h4>Contact no :</h4> <h5><?php echo $ContactNo;?></h5>

			<h4>Second Form</h4>
				<h4>Sr No </h4> <h5><?php echo $srno;?></h5>
				<h4>Name Of Degree :</h4> <h5><?php echo $nameOfDegree;?></h5> 
				<h4>Year Of Passing :</h4> <h5><?php echo $yearOfPassing;?></h5>
				<h4>University :</h4> <h5><?php echo $University;?></h5>
				<h4>Percentage :</h4> <h5><?php echo $Percentage;?></h5>
				<h4>Sr :</h4> <h5><?php echo $srNoField_2;?></h5>
				<h4>Name Of Degree :</h4> <h5><?php echo $nameOfDegree_2;?></h5>
				<h4>Year Of Passing  :</h4> <h5><?php echo $yearOfPassing_2;?></h5>
				<h4>University :</h4> <h5><?php echo $University_2;?></h5>
				<h4>Percentage :</h4> <h5><?php echo $Percentage_2;?></h5>
				<h4>SrNo :</h4> <h5><?php echo $SrNo;?></h5>
				<h4>Certification :</h4> <h5><?php echo $Certification;?></h5>
				<h4>Passing :</h4> <h5><?php echo $Passing;?></h5>
				<h4>Duration :</h4> <h5><?php echo $Duration;?></h5>
				<h4>college :</h4> <h5><?php echo $college;?></h5>
				<h4>SrNo_1 :</h4> <h5><?php echo $SrNo_1;?></h5>
				<h4>Certification_1 :</h4> <h5><?php echo $Certification_1;?></h5>
				<h4>Passing_1 :</h4> <h5><?php echo $Passing_1;?></h5>
				<h4>Duration_1 :</h4> <h5><?php echo $Duration_1;?></h5>
				<h4>college_1 :</h4> <h5><?php echo $college_1;?></h5>

			<h4>Third Form</h4>
				<h4>IntersetArea</h4> <h5><?php echo $intersetArea;?></h5>
				<h4>Language Proficiency</h4> <h5><?php echo $Language;?></h5>
				<h4>CMS Knowledge</h4> <h5><?php echo $CMSKnowledge;?></h5>
				<h4>SrNO</h4> <h5><?php echo $srNO;?></h5>
				<h4>ProjectName</h4> <h5><?php echo $projectName;?></h5>
				<h4>Technology</h4> <h5><?php echo $technology;?></h5>
				<h4>Role In Project</h4> <h5><?php echo $message;?></h5>
	</body>
</html>