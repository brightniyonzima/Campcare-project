// validating the year
function checkInput(dob) {
  var invalidChars = /[^1912-2013]/gi
  var x;
  if(invalidChars.test(dob.value)) {
            dob.value = dob.value.replace(invalidChars,"");
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