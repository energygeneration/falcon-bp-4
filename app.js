function passverif() {
   var pass = document.getElementById('inputEmail').value;
   var vpass = document.getElementById('inputConfEmail').value;
   if (pass != vpass) {
      document.getElementById('passs').style.color = "#f00";
   } else {
      document.getElementById('passs').style.color = "#0f0";
   }
}

