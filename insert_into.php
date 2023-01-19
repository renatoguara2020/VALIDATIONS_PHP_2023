<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testes_pdo";


$firstname = 'NATHAN BARBOSA SOARES';
$lastname = 'BARBOSA SOARES';
$email = 'nathan2020@gmail.com';


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
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage() . "<br>" . $e->getTraceAsString() ;
}

$conn = null;
?>