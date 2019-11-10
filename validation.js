function validation()
{
  var parking =document.getElementById('sel').value;
  var name=document.getElementById('usr').value;
  var number=document.getElementById('num').value;
  if(parking=="" || name=="" || number=="" )
  {
    alert('All fields Required');
  }
  else {
    alert('Request Accepted we call you Soon');
  }
}
