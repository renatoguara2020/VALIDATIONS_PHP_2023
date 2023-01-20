<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testes_pdo";

$id = 4;

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  // sql to delete a record
  $stmt = $conn->prepare("DELETE FROM usuarios WHERE id= $id ");

  // use exec() because no results are returned
  $stmt->execute();
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo  "<br>" . $e->getMessage() . ' ' .$e->getTraceAsString();
}

$conn = null;
?>