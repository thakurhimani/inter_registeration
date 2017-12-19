function validate_second_Form(){
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