<?php

function dbconnect(){
  $conn = new PDO("mysql:host=localhost;dbname=rateprogram", "root", "");
  return $conn;
}

?>
