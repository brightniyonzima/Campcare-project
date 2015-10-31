//validating the names
function checkName(rfname) {
  var invalidChars = /[^a-z]/gi
  if(invalidChars.test(rfname.value)) {
            rfname.value = rfname.value.replace(invalidChars,"");
      }
	  
}
function checkNames(rlname) {
  var invalidChars = /[^a-z]/gi
  if(invalidChars.test(rlname.value)) {
            rlname.value = rlname.value.replace(invalidChars,"");
      }
	  
}