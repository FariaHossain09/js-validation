function isValid(){
      var fname=document.forms["mForm"]["fname"].value;
      var lname=document.forms["mForm"]["lname"].value;
      var gender=document.forms["mForm"]["gender"].value;
      var birthday=document.forms["mForm"]["birthday"].value;
      var re=document.forms["mForm"]["re"].value;
      var email=document.forms["mForm"]["email"].value;
      var username=document.forms["mForm"]["username"].value;
      var password=document.forms["mForm"]["password"].value;
      
      if(fname===""||lname===""||gender===""||birthday===""||re===""||email===""||username===""||password==="")
      {
        document.getElementById("fNameErr").innerHTML="Field Empty";
        document.getElementById("lNameErr").innerHTML="Field Empty";
        document.getElementById("genderErr").innerHTML="Field Empty";
        document.getElementById("birthdayErr").innerHTML="Field Empty";
        document.getElementById("reErr").innerHTML="Field Empty";
        document.getElementById("emailErr").innerHTML="Field Empty";
        document.getElementById("userNameErr").innerHTML="Field Empty";
        document.getElementById("passwordErr").innerHTML="Field Empty";
        return false;
      }
    }