function isValid(){

      var username=document.forms["mForm"]["username"].value;
      var password=document.forms["mForm"]["password"].value;
      
      if(username===""||password==="")
      {
        document.getElementById("userNameErr").innerHTML="Field Empty";
        document.getElementById("passwordErr").innerHTML="Field Empty";
        return false;
      }
      

      
    }