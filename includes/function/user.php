<?php

function signup($username,$password, $email, $postion, $school){
    $db = dbconnect();
   do{
        $id = generateId();
    } while (checkId($id) == true);
    $q1 = "INSERT INTO useraccount(email, password,UserId) values(?,?,?)";
    $q2 = "INSERT INTO userinfo(UserID, username, school, position) values(?,?,?,?)";

    $sql1 = $db -> prepare($q1);
    $sql2 = $db -> prepare($q2);

    $sql1 -> execute(array($email, $password, $id));
    $sql2 -> execute(array($id,$username,$school,$postion));

  if($sql1 && $sql2 ){
    $_SESSION["userid"] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['school'] =$school;
    $_SESSION['position'] = $postion;
    $_SESSION['connected'] = true;
      return true;
  }else{
      return false;

  }


}

/** genere unique user id*/
function generateId(){
  $length = 10;
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}


/** check user ID unique***/
function checkId($id){
  $db = dbconnect();
  $query = "SELECT *  FROM userinfo WHERE userID = '".$id."' ";
  $result = $db->prepare($query);
  $result->execute();
  $row = $result->fetch(PDO::FETCH_ASSOC);
  if(empty($row)){
    return false;
  }else{
    return true;
  }
}


?>
