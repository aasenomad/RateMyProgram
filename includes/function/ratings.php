<?php

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

/* DELETE THIS SOON
function getRatingAverage($schoolId){
        $db = dbconnect();
        $push = array();
        $result = $db -> prepare ("SELECT AVG(rate) as avg, value
                from rating JOIN rateinfo
                ON rating.rateId = rateinfo.rateId
                WHERE schoolId = $schoolID
                GROUP BY rating.rateId");
        $result -> execute();
        $push = $result -> fetch (PDO::FETCH_ASSOC)
        return $push;
}
*/

?>
