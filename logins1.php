<?php
if(isset($_POST['submit'])){

$con =mysqli_connect('localhost','root','','school');

$cname  = $_POST['cname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$bdate = $_POST['bdate'];
$fname = $_POST['fname'];
$phone = $_POST['phone'];
$district = $_POST['district'];
$city  = $_POST['city'];
$state = $_POST['state'];
$nationality  = $_POST['nationality'];
$image = $_FILES['image'];
$image_loc = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];

$image_des = "student/".$image_name ;

move_uploaded_file($image_loc,"student/".$image_name);


mysqli_query($con,"INSERT INTO `student`(`name`, `lname`, `email`, `bdate`, `fname`, `phone`, `district`, `city`, `state`, `nationality`, `image`)
                               VALUES ('$cname ','$lname','$email','$bdate','$fname','$phone','$district','$city','$state','$nationality','$image_des')");


header("location:logins.php");

}

?>