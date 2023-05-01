
function function_validate(){
  var Namere = /[A-Za-z]{0}[A-Za-z]/;
  if (!Namere.test($("#first_name").val())) {
               alert ("Please insert valid first name");
      return false;
  } 
  
  var Namere = /[A-Za-z]{0}[A-Za-z]/;
  if (!Namere.test($("#last_name").val())) {
               alert ("Please insert valid last name");
      return false;
  } 

  var mailformat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
  if (!mailformat.test($("#email").val())) {
    alert ("Please insert valid email");
  return false;
  } 

  var mobilere = /[0-9]{11,12}$/;
  if (!mobilere.test($("#contact_number").val())) {
      alert ("Please insert valid contact number");
      return false;
  }
}