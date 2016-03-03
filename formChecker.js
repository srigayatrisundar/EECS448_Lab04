function check() 
{
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var bangles = document.getElementById("bangles").value;
  var rings = document.getElementById("rings").value;
  var anklets = document.getElementById("anklets").value;
  var shipping = document.getElementsByName("shipping").value;
  if(!checkEmail(username)) 
  {
    alert("Enter a valid email!");
    return false;
  }
  else if (bangles == '' || rings == '' || anklets == '') 
  {
    alert("Please enter values 0 or above!");
  }
  else if (bangles < 0 || rings < 0 || anklets < 0) 
  {
    alert("Enter values from 0 and above!");
    return false;
  }
  else if (password == '') 
  {
    alert("Enter a password!");
    return false;
  }
  else 
  {
    document.getElementById("shopForm").submit();
    return true;
  }
}

// Got expression to validate email id from http://www.w3resource.com/javascript/form/email-validation.php


function checkEmail(mail)
{
  if(mail.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) 
  {
    return true;
  }
  else
  {
    return false;
  }
}

function reset() 
{
  document.getElementById("username").value = "";
  document.getElementById("password").value = "";
  document.getElementById("bangles").value = 0;
  document.getElementById("rings").value = 0;
  document.getElementById("anklets").value = 0;
  document.getElementsByName("shipping").value = 1;
}
