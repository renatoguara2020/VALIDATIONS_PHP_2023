<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testes_pdo";

$firstname = (isset($_POST["firstname"]) && $_POST["firstname"] != null) ? $_POST["firstname"] : "";
$lastname = (isset($_POST["lastname"]) && $_POST["lastname"] != null) ? $_POST["lastname"] : "";
$email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
$estado = (isset($_POST["estado"]) && $_POST["estado"] != null) ? $_POST["estado"] : "";
$cidade = (isset($_POST["cidade"]) && $_POST["cidade"] != null) ? $_POST["cidade"] : "";
$cep = (isset($_POST["cep"]) && $_POST["cep"] != null) ? $_POST["cep"] : "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $stmt = $conn->prepare("INSERT INTO usuarios (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
  // use exec() because no results are returned
  $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
  $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->execute();

  if($stmt->rowCount() > 0){
  echo "New record created successfully" .$stmt->rowCount() . " records were created successfully";
  }
} catch(PDOException $e) {
  echo  "<br>" . $e->getMessage() . "<br>" . $e->getTraceAsString() ;
}

$conn = null;
?>