<?php
session_start();
include 'includes/dbconnect.php';
    // Only process POST reqeusts.
      if(isset($_POST['id']) && isset($_SESSION["userid"])){
        $db = dbconnect();
        $q2 = "INSERT INTO savedprogram(userId, schoolId) values(?,?)";
        $sql2 = $db -> prepare($q2);
        $sql2 -> execute(array($_SESSION["userid"], $_POST['id']));
      }



?>
