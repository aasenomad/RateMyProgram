<?php

function dbconnect(){
  $conn = new PDO("mysql:host=localhost;dbname=rateprogram", "root", "root");
  return $conn;
}

?>
