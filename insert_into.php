<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$firstname = (isset($_POST["firstname"]) && $_POST["firstname"] != null) ? $_POST["firstname"] : "";
$lastname = (isset($_POST["lastname"]) && $_POST["lastname"] != null) ? $_POST["lastname"] : "";
$username = (isset($_POST["username"]) && $_POST["username"] != null) ? $_POST["username"] : "";
$estados = (isset($_POST["estados"]) && $_POST["estados"] != null) ? $_POST["estados"] : "";
$cidade = (isset($_POST["cidade"]) && $_POST["cidade"] != null) ? $_POST["cidade"] : "";
$cep = (isset($_POST["cep"]) && $_POST["cep"] != null) ? $_POST["cep"] : "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $stmt = $conn->prepare("INSERT INTO usuarios (firstname, lastname, estados, cep, username, cidade) 
  VALUES (:firstname, :lastname, :estados, :cep, :username, :cidade)");
  // use exec() because no results are returned
  $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
  $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
  $stmt->bindParam(':username', $username, PDO::PARAM_STR);
  $estados->bindParam(':estados', $estados, PDO::PARAM_STR);
  $cep->bindParam(':cep', $cep, PDO::PARAM_STR);
  $username->bindParam(':cidade', $cidade, PDO::PARAM_STR);
  $stmt->execute();

  if($stmt->rowCount() > 0){
  echo "New record created successfully" .$stmt->rowCount() . " records were created successfully";
  }
} catch(PDOException $e) {
  echo  "<br>" . $e->getMessage() . "<br>" . $e->getTraceAsString() ;
}

$conn = null;
?>