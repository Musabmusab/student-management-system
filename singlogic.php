<?php
  
// if(isset($_POST['submit'])){

//   include 'config.php';

//  $name = $_POST['name'];
//  $email =$_POST['email'];
//  $phone = $_POST['phone'];
//  $password =$_POST['password'];

//         $dup_email = mysqli_query($con,"SELECT * FROM `singup` WHERE email = '$email' ");
//         $dup_name = mysqli_query($con,"SELECT * FROM `singup` WHERE name = '$name' ");

//         if (mysqli_num_rows($dup_email)) {
//           echo"
//           <script>
//           alert('This email already taken');
//           window.location.href='sing.php';
//           </script>";
//         };
        
//         if (mysqli_num_rows($dup_name)) {
//           echo"
//           <script>
//           alert('This name already taken');
//           window.location.href='sing.php';
//           </script>";
//         }else{
//            mysqli_query($con,"INSERT INTO `singup`( `name`, `email`, `phone`, `password`)
//            VALUES ('$name ','$email','$phone','$password')");
//              echo"
//              <script>
//              alert('Register successfully');
//              window.location.href='wellcom.php';
//              </script>";
//         };

        
// };


?>


<?php


if (isset($_POST['submit'])) {
  $con = mysqli_connect('localhost','root','','singin');


    $name  =  $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_cPassword =$_POST['confirmPassword'];
  
$d_name= mysqli_query($con,"SELECT * FROM `singup` WHERE name ='$name'");
$d_email= mysqli_query($con,"SELECT * FROM `singup` WHERE email ='$email'");

if (mysqli_num_rows($d_email)) {
    echo"
    <script>
    alert('This email  already taken');
    window.location.href='sing.php';
    </script>";
  };
  
  if (mysqli_num_rows($d_name)) {
    echo"
    <script>
    alert('This name already taken');
    window.location.href='sing.php';
    </script>";
  }else{
    mysqli_query($con,"INSERT INTO `singup`(`name`, `email`, `password`, `Confirm Password`)
                               VALUES ('$name','$email','$password','$_cPassword ')");
       echo"
       <script>
       alert('Register successfully');
       window.location.href='wellcom.php';
      </script>";
  };

  
};

?>