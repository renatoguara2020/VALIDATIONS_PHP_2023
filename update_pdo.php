<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testes_pdo";

$erros = array();

if(empty($_POST['firstname']) || empty($_POST['lastname']) || !filter_input($_POST['email'], FILTER_VALIDATE_EMAIL)){

    http_response_code(500);
    $erros[] =  'Favor preencher os campos';

}else{

$nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";

$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = 'ARRUDA10000';
$email = 'nathanzinho1000_soares2020@yahoo.com';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  if ($id != "") {

  $stmt = $conn->prepare("UPDATE usuarios SET firstname = :firstname, lastname = :lastname, email = :email WHERE id=:id");

  }else{

    $stmt = $conn->prepare("INSERT INTO usuarios (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
  }
  // Prepare statement
  $stmt->bindParam(':id', $id);
  $stmt->bindValue(':firstname', $firstname);
  $stmt->bindValue(':lastname', $lastname);
  $stmt->bindValue(':email', $email);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo "<br>" . $e->getMessage() . '<br>'. $e->getTraceAsString();
}

}

$conn = null;
?>