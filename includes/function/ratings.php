<?php
include 'includes/function/ratings.php';
function getProgramRate($schoolID){
    $db = dbconnect();
    $push = array();
    $result = $db -> prepare ("SELECT AVG(rate) as avg, value
            from rating JOIN rateinfo
            ON rating.rateId = rateinfo.rateId
            WHERE schoolId = $schoolID
            GROUP BY rating.rateId");
    $result -> execute();
    while ($row = $result -> fetch (PDO::FETCH_ASSOC)){
        //$row = array_map('', $row);
        $push[] = $row;
    }
    return $push;
}

function getProgramRate2($schoolID){
    $db = dbconnect();
    $result = $db -> prepare ("SELECT AVG(rate) as avg
            from rating
            WHERE schoolId = $schoolID AND rating = 1");
    $result -> execute();
    $row = $result -> fetch (PDO::FETCH_ASSOC);
    return $row['avg'];
}


function getSchool($schoolId){
    $db = dbconnect();
    $result = $db -> prepare ("SELECT * from school WHERE schoolId = $schoolId ");
    $result -> execute();
    $p = $result -> fetch (PDO::FETCH_ASSOC);
    return $p;
}

function getProgram($programId){
    $db = dbconnect();
    $result = $db -> prepare ("SELECT name AS programName from schoolprogram WHERE programId = $programId");
    $result -> execute();
    $p = $result -> fetch (PDO::FETCH_ASSOC);
    return $p['programName'];
}

function getCity($cityId){
    $db = dbconnect();
    $result = $db -> prepare ("SELECT name as cityName from city WHERE cityId = $cityId ");
    $result -> execute();
    $p = $result -> fetch (PDO::FETCH_ASSOC);
    return $p['cityName'];
}

function getState($stateId){
    $db = dbconnect();
    $result = $db -> prepare ("SELECT name as stateName from states WHERE stateId = $stateId");
    $result -> execute();
    $p = $result -> fetch (PDO::FETCH_ASSOC);
    return$p['stateName'];
}

/*function getType($typeId){
    $db = dbconnect();
    $result = $db -> prepare ("SELECT name as typeName from schooltype WHERE typeId = $typeId");
    $result -> execute();
    $result -> fetch (PDO::FETCH_ASSOC);
    return $result;
}
*/

function getComments($schoolId){
    $db = dbconnect();
    $result = $db -> prepare ("SELECT * from comments WHERE schoolId = $schoolId ");
    $result -> execute();
    while ($row = $result -> fetch (PDO::FETCH_ASSOC)){
        $push[] = $row;
    }
    return $push;
}

/*Total Number of comments*/
function commentTotal($schoolId){
    $count = 0;
    $db = dbconnect();
    $result = $db -> prepare ("SELECT comment from comments WHERE schoolId = $schoolId ");
    $result -> execute();
    while ($row = $result -> fetch (PDO::FETCH_ASSOC)){
        $push[] = $row;
        $count++;
    }
    return $count;
}

/*Andrew's function

function storeComments($schoolId, $comment){
    $db = dbconnect();
    $result = $db -> prepare ("INSERT INTO comments(commentId, comment, userId, schoolId) VALUES ('', $comment, '', $schoolId)");
    $result -> execute();
    return $result;
}
*/

function getUserName ($userId){

    $db = dbconnect();
    $result = $db -> prepare ("SELECT username from userinfo WHERE userID = $userId");
    $result -> execute();
    $push = $result -> fetch (PDO::FETCH_ASSOC);
    return $push;
}



?>
