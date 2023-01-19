<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testes_pdo";


$firstname = "John10000";
$lastname = 'ARRUDA10000';
$email = 'nathanzinho1000_soares2020@yahoo.com';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("UPDATE usuarios SET firstname = :firstname, lastname = :lastname, email = :email WHERE id=3");

  // Prepare statement
  $stmt->bindValue(':firstname', $firstname);
  $stmt->bindValue(':lastname', $lastname);
  $stmt->bindValue(':email', $email);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo "<br>" . $e->getMessage();
}

$conn = null;
?>