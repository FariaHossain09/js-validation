
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <script type="text/javascript" src="insert.js"></script>
</head>
<body>
 <form action="insert.php" method="POST" onsubmit="return isValid()" name="mForm" id="nForm">
    <fieldset>
        <legend>Basic Information:</legend>
        <label for="fname">First name:</label>
    <input type="text" name="fname" id="fname"  > 
    <span style="color:red" id="fNameErr"> </span>
    <!--<spam style="color:red"></spam>-->
    
    <br><br>
    <label for="lname">Last name:</label>
    <input type="text" name="lname" id="lname"  > 


    <span style="color:red" id="lNameErr"> </span>
         <br> <br>
    <label for="gender">Gender:</label>


    <span style="color:red" id="genderErr"> </span>
        <br>
        <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">

        <span style="color:red" id="birthdayErr"> </span>
        <br><br>
        <label for="re">Religion:</label>
         <span style="color:red" id="reErr"> </span>
        <!--<input type="text" id="birthday" name="birthday">-->
        <select name="re" id="re" >

        <option value="select">Select</option>
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Christian">Christian</option> 
        </select> <spam style="color:red"></spam>
        </fieldset>
        <br><br>


    <fieldset>
    <legend>Contact Information:</legend>
    <label for="paddress">Present Address:</label>
    <input type="text" id="paddress" name="paddress"><br><br>
    <label for="ppaddress">Premanent address:</label>
    <input type="text" id="ppaddress" name="ppaddress"><br><br>

    <label for="phone">phone:</label>
    <input type="tel" id="phone" name="phone">
    <br><br>
    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="email">
    
    <span style="color:red" id="emailErr"> </span>
    <br><br>
    <label for="a">Personal website link:</label>
    <a href="https://github.com/FariaHossainBorna/registration-form/">Visit github.com!</a>
    </fieldset>
    <br><br>
          

     <fieldset>
    <legend>Account Information:</legend>
    <label for="username">User Name:</label>
    <input type="text" id="username" name="username">

    <span style="color:red" id="userNameErr"> </span>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    
    <span style="color:red" id="passwordErr"> </span>
    </fieldset>
    <br><br>


    <input type="submit" name="submit" value="Submit">
      </form> 
       
  




<br>



</body>
</html>