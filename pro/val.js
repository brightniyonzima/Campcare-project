// email validation
function validateForm()
{
var x=document.forms["staff"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
//contact field validation
function checkInput(contact) {
  var invalidChars = /[^0-9]/gi
  if(invalidChars.test(contact.value)) {
            contact.value = contact.value.replace(invalidChars,"");
      }
}
//year of birth validation
function checkResidence(residence) {
  var invalidChars = /[^a-z]/gi
  var x;
  if(invalidChars.test(residence.value)) {
            residence.value = residence.value.replace(invalidChars,"");
      }
	   
}
//validating the names
function checkName(fname) {
  var invalidChars = /[^a-z]/gi
  if(invalidChars.test(fname.value)) {
            fname.value = fname.value.replace(invalidChars,"");
      }
	  
}
function checkNames(lname) {
  var invalidChars = /[^a-z]/gi
  if(invalidChars.test(lname.value)) {
            lname.value = lname.value.replace(invalidChars,"");
      }
	  
}