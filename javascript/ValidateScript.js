function validateForm()
{
	// A variable to save if the form is valid
	var vIsValid = false;
	
	// Get the student details from the document
	var vStudentId = document.getElementById("txtStudentId");
	var vStudentLname = document.getElementById("txtLastName");
	var vStudentFname = document.getElementById("txtFirstName");
	var vStudentPhone = document.getElementById("txtPhone");
	var vStudentCellPhone = document.getElementById("txtCellPhone");
	var vStudentEmail = document.getElementById("txtEmail");
	var vStudentCity = document.getElementById("txtCity");
	var vStudentAddress = document.getElementById("txtAddress");
	var AtPos = vStudentEmail.value.indexOf("@");
    var StopPos = vStudentEmail.value.lastIndexOf(".");
    alert(AtPos);
    alert(StopPos);
	// Check if the student id isn't empty, or not have 9 digits
	if ((vStudentId.value != null) && (vStudentId.value != "") && (vStudentId.value.length == 9))
	{
		// Change the color to green
		vStudentId.style.backgroundColor = "green";
		
		// Check if the student last name isn't empty
		if ((vStudentLname.value != null) && (vStudentLname.value != ""))
		{
			// Change the color to green
			vStudentLname.style.backgroundColor = "green";		
			
			// Check if the student first name isn't empty
			if((vStudentFname.value != null) && (vStudentFname.value != "")) 
			{
				// Change the color to green
				vStudentFname.style.backgroundColor = "green";
				
				//check if the student phone isn't empty
				if((vStudentPhone.value != null) && (vStudentPhone.value != ""))
				{
					// Change the color to green 
					vStudentPhone.style.backgroundColor = "green";
					
					//check if the student cellphone isn't empty
					if((vStudentCellPhone.value != null) && (vStudentCellPhone.value != ""))
					{
						// Change the color to green 
						vStudentCellPhone.style.backgroundColor = "green";
						
						//check if the student Email isn't empty, and is valid
						if((vStudentEmail.value != null) && (vStudentEmail.value != "") && (AtPos != -1) && (StopPos != -1) && (StopPos > AtPos) && (StopPos-AtPos != 1))
						{
							// Change the color to green 
							vStudentEmail.style.backgroundColor = "green";
						
							// Indicates that the form is valid
							vIsValid = true;	
						}
						else
						{
							// Alert the user about the error
							alert ("יש להזין מספר אימייל תקין");
							
							// Change the color to red and focus
							vStudentEmail.style.backgroundColor = "red";
							vStudentEmail.focus();
						
							// Indicates that there was an error
							vIsVaild = false;
						}	
					}
					else
					{
						// Alert the user about the error
						alert ("יש להזין מספר פלאפון נייד");
						
						// Change the color to red and focus
						vStudentCellPhone.style.backgroundColor = "red";
						vStudentCellPhone.focus();
						
						// Indicates that there was an error
						vIsVaild = false;
					}	
				}
				else
				{
					// Alert the user about the error
					alert ("יש להזין מספר טלפון");
					
					// Change the color to red and focus
					vStudentPhone.style.backgroundColor = "red";
					vStudentPhone.focus();
					
					// Indicates that there was an error
					vIsVaild = false;
				}
			}
			else
			{
				// Alert the user about the error 
				alert ("יש להזין שם פרטי");
						
				// Change the color to red
				vStudentFname.style.backgroundColor = "red";
				vStudentFname.focus();	
				
				// Indicates that there was an error
				vIsValid = false;
			}
		}
		else
		{
			// Alert the user about the error
			alert ("יש להזין שם משפחה");
			
			// Change the color to red
			vStudentLname.style.backgroundColor = "red";
			vStudentLname.focus();
			
			// Indicates that there was an error
			vIsValid = false;
		}
	}
	else
	{
		// Alert the user about the error
		alert ("יש להזין ת.ז - בגודל של 9 ספרות");
		
		// Change the color to red
		vStudentId.style.backgroundColor = "red";
		vStudentId.focus();
		
		// Indicates that there was an error
		vIsValid = false;
	}
	
	return (vIsValid);
}
