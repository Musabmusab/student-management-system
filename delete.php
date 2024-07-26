<?php
   $id = $_GET['id'];
   include'config.php';
   mysqli_query($con,"DELETE FROM `teacher` WHERE  id = $id");
    header("location:edit.php");
?>