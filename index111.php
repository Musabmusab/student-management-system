<?php
//  include 'config.php';

//  $name = $_POST['name'];
//  $password =$_POST['password'];

//  $result = mysqli_query($con,"SELECT * FROM `singup` WHERE (name = '$name' OR email = '$name') AND password = '$password' ");

// session_start();
// if (mysqli_num_rows($result)){
//      $_SESSION['user'] = $name;

//      echo"
//      <script>
//           alert('Successfully Login ');
//           window.location.href='wellcom.php';
//      </script>
//      ";
// }else {
//      echo"
//      <script>
//           alert('incorrect email or name or password');
//           window.location.href='index.php';
//      </script>
//      ";
// ;
// }

?>
<?php 
  $con = mysqli_connect('localhost','root','','singin');

  $name  =  $_POST['name'];
  $password = $_POST['password'];

  $result = mysqli_query($con,"SELECT * FROM `singup` WHERE(name = '$name' or email= '$name' and password = '$password')");

session_start();
if (mysqli_num_rows($result)) {
    $_SESSION['user'] = $name;
    echo"
    <script>
    alert('Success fully Login');
    window.location.href='wellcom.php';
    </script>
    ";
}else {
    echo"
    <script>
    alert('Inccorect name or email or password');
    window.location.href='index.php';
    </script>
    ";
};

?>