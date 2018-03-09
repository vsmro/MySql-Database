// MODAL FOR CONFIRM DELETE USER
$('#confirm-delete').on('show.bs.modal', function() {
	$('.btn-danger').trigger('focus')
});



// function to validate inputs on submit
function validateForm () {

	var name = document.forms["users"]["name"].value;

	var surname = document.forms["users"]["surname"].value;

	var email = document.forms["users"]["email"].value;

	var phone = document.forms["users"]["phone"].value;

	var position = document.forms["users"]["position"].value;

	var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");


	if(name == "") {

		alert("Please enter your Name!");
		
		return false;
	}

	if(surname == "") {

		alert("Please enter your Surname!");
		
		return false;
	}

	if(email == "") {

		alert("Please enter a correct Email adress!");
		
		return false;
	}

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        alert("Not a valid e-mail address");
        return false;
    }

	if(phone == "") {

		alert("Please enter a Phone no. !");


		return false;
	}

	if(isNaN(document.forms["users"]["phone"].value) || phone.length !=10) {

		alert("Please enter only digits, Phone no. must be 10 digits");


		return false;
	}

	if(position == "") {

		alert("Please enter your Position!");
		
		return false;
	}


	


}



	