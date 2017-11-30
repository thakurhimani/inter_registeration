<html>
	<title>multi page form</title>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "stylesheet.css" />        
	</head>                                      
	<body>
		<form id="multiple_page_form" action="" method="POST" >
			<table id="tableid">
				<tr>
					<th colspan="3">
						<h2 id="form_title">Academic Details</h2>
					</th>
				</tr>
				<tr>
					<td  class="td_text_right">
						<label>Name Of Degree</label>
					</td>
					<td class="td_text">
						<input type="checkbox" name="degree" value="Graduate">Graduation
						<input type="checkbox" name="degree" value="Post Graduate">PostGraduation		
					</td>
					<td>*</td>
				</tr>
				<tr>
					<td  class="td_text_right">
						<label> University And College</label>
					</td>
					<td>
						<input type="text" name="college" class="form_input" placeholder="University And College">
					</td>
					<td>*</td>
				</tr>
				<tr>
					<td class="td_text_right">
						<label>Year of passing out</label>
					</td>
					<td>
						<input type="text" name="passingOut"class="form_input"  class="form_input" placeholder="Year of passing out">
					</td>
					<td>*</td>
				</tr>
				<tr>
					<td class="td_text_right">
						<label>Percentage/Grade</label>
					</td>
					<td>
						<input type="text" name="Percentage" class="form_input" placeholder="Percentage/Grade">
					</td>
					<td>*</td>
				</tr>
				<tr>
					<td class="td_text_right">
						<label>Details of any other certification</label>
					</td>
					<td>
						<textarea rows="5" cols="30" name="otherDetails" class="form_input" 
							placeholder="Other Certification Details"></textarea>
					</td>
				</tr>
				<tr>
					<td id="btn_Id" colspan="2">
						<input id="resetId" type="reset" value="Reset">
						<input id="resetId" type="submit" value="Next" name="submit">
					</td>
			</tr>
			</table>
		</form>
	</body>
</html>
