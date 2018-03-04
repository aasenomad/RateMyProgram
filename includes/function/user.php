<?php

function login(){
    
}

function signup($username,$password, $email, $postion, $school){
    $db = $dbconnect();
    
    
   do{
        $id = generateId();
    } while (checkId($id) == true)
    
    $sql1 = $db -> prepare(" INSERT INTO useraccount(email, password,UserId) values($email, $password, $id)")
    $sql2 = $db -> prepare(" INSERT INTO userinfo(UserID, username, school, position) values($username, $password, $email, $position, $school)")

    $sql1 -> execute();  
    $sql2 -> execute();     
   
       
if($sql1 && sql2 ){
    return true;
}else{
    return false;
    
}

    
       
          
}

/** genere unique user id*/
function generateId(){
    
 $chars = array_merge(range('a', 'z'), range(0, 9));
    shuffle($chars);
    return implode(array_slice($chars, 0,25));
}

  //actual code: 
$string= _generateRandomString();
while(!generateId($string)) //if string is unique, while loop stops.
 {
 $string= _generateRandomString();


/** check user ID unique***/
    
}

function checkId($id){
    return true
}


?>