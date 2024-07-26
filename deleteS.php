<?php
   $id = $_GET['id'];
   include'config.php';
   mysqli_query($con,"DELETE FROM `student` WHERE  id = $id");
    header("location:editS.php");
?>