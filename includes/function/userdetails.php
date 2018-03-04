<?php

 function login($email, $password){
   $db = dbconnect();
    $found = false;
    $query = "SELECT *  FROM useraccount WHERE email = '".$email."' ";
    $result =  $db->prepare($query);
    $result->execute();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if($password == $row['password']){
        $details = getUser( $row['UserId']);
        $_SESSION["userid"] = $row['UserId'];
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $details['username'];
        $_SESSION['school'] =$details['school'];
        $_SESSION['position'] = $details['position'];
        $_SESSION['connected'] = true;
        $found = true;
    }
    return $found;

 }

 function getUser($id){
    $db = dbconnect();
    $query = "SELECT *  FROM userinfo WHERE userID = '".$id."' ";
    $result = $db->prepare($query);
    $result->execute();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    return $row;
}

 function review($comment, $school){
     $db = dbconnect();
     $query = "INSERT INTO comments(comment ,userId,	schoolId) values(?,?,?)";
     $sql1 = $db -> prepare($query);
     $sql1 -> execute(array($comment,$_SESSION["userid"], $school));

 }

 function rate($rateId,$rate, $school){
     $db = dbconnect();
     $query = "INSERT INTO rating(rateId,schoolId,userId,rate) values(?,?,?,?)";
     $sql1 = $db -> prepare($query);
     $sql1 -> execute(array($rateId, $school, $_SESSION["userid"], $rate));

 }
/*
$review($_POST['review'],$schoolId);
$rate(1,$_POST['option1'],$schoolId);
$rate(2,$_POST['option2'],$schoolId);
$rate(3,$_POST['option3'],$schoolId);
$rate(4,$_POST['option4'],$schoolId);
$rate(5,$_POST['option5'],$schoolId);
$rate(6,$_POST['option6'],$schoolId);
 */

 function getSave($user){
    $db = dbconnect();
    $push = array();
    $user = "SELECT * FROM savedprogram WHERE userID = '".$user."' ";
    $result = $db->prepare($user);
    $result->execute();
    while ($row = $result -> fetch (PDO::FETCH_ASSOC)){
        $push[] = $row;
    }
    return $push;
  }

 ?>
