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

 ?>
