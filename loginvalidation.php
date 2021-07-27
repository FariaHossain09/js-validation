
<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{
  if(empty($_POST['username'])){
        echo"<h1 stlye='colour:red'>Username Field Empty</h1>";
    }

    if(empty($_POST['password'])){
        echo"<h1 stlye='colour:red'>password Field Empty</h1>";
    }
else{

  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = new mysqli("localhost","root","12345","wtg");

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is incorrect!";
  } else {
    header("Location: welcome.php");
    //echo "You are logged in!";
  }
}
}










?>

 