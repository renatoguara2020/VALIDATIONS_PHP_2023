<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testes_pdo";

try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
  $stmt->execute();

  while($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){

    echo  $row['id'] .' '. $row['firstname']. ' ' . $row['lastname'] .' '.$row['email'];
  }

}catch(PDOException $e){

    echo $e->getMessage() .''.$e->getTraceAsString();

}