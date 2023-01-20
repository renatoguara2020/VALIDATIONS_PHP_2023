<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

//$nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
$firstname = $_POST["firstname"];

$lastname = $_POST["lastname"];
$username = $_POST["username"];
$estados =  $_POST["estados"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$description = $_POST["description"];

###########################BANCO DE DADOS CREDENCIAIS################################################endregion

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "mydatabase";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $stmt = $conn->prepare("INSERT INTO customers (firstname, lastname, estados, cep, username, cidade, description) 
  VALUES (:firstname, :lastname, :estados, :cep, :username, :cidade, :description)");
  // use exec() because no results are returned
  $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
  $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
  $stmt->bindParam(':username', $username, PDO::PARAM_STR);
  $stmt->bindParam(':estados', $estados);
  $stmt->bindParam(':cep', $cep, PDO::PARAM_STR);
  $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
  $stmt->bindParam(':description', $description, PDO::PARAM_STR);
  $stmt->execute();

  if($stmt->rowCount() > 0){

    echo '<div class="alert alert-success" role="alert">
  New record created successfully
    
  </div>';
  //echo "New record created successfully" .$stmt->rowCount() . " records were created successfully";
  }
} catch(PDOException $e) {
  echo  "<br>" . $e->getMessage() . "<br>" . $e->getTraceAsString() ;
}

$conn = null;
}
?>