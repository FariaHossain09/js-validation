    <!DOCTYPE HTML>
<html>
<head>
  <title>Login Form</title>
    <script type="text/javascript" src="login.js"></script>
</head>
<body>


    <form action="loginvalidation.php" method="POST" onsubmit="return isValid()" name="mForm" id="nForm">
    <fieldset>
    <legend>Please Enter Your Information:</legend>
    <label for="username">User Name:</label>
    <input type="text" id="username" name="username">
    <spam style="color:red" id="userNameErr"></spam>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <spam style="color:red" id="passwordErr"></spam>
    </fieldset>
    <br><br>
    <input type="submit" name="submit" value="Login">
          
    </form>





</body>

</head>
</html>

    <br>