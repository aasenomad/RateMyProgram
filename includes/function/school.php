<?php

function SearchSchoolName($schoolText){
    $db = dbconnect();
    $push = array();
    $result = $db -> prepare ("SELECT * from school WHERE nom like %$schoolText% ");
    $result -> execute();
    while ($row = $result -> fetch (PDO::FETCH_ASSOC)){
        $push[] = $row;
    }
    return $push;
}

function SearchSchoolType($programId){
    $db = dbconnect();
    $push = array();
    $result = $db -> prepare ("SELECT * from school WHERE program = $programId ");
    $result -> execute();
    while ($row = $result -> fetch (PDO::FETCH_ASSOC)){
        $push[] = $row;
    }
    return $push;
}

function SearchSchoolNameandType($programId, $schoolText){
    $db = dbconnect();
    $push = array();
    $schoolText = '%'.$schoolText.'%';
    $result = $db -> prepare ("SELECT * from school WHERE (nom like ?  OR Degree like ? ) AND program = ? ");
    $result -> execute(array($schoolText,$schoolText, $programId));
    while ($row = $result -> fetch (PDO::FETCH_ASSOC)){
        $push[] = $row;
    }
    return $push;
}

 ?>
