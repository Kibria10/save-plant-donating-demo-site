<?php 
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "registration-system";
try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}

$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $cardID = $_POST['cardID'];
  $expMonth = $_POST['expMonth'];
  $expYear = $_POST['expYear'];
  $cvv = $_POST['cvv'];
  $usersEmail =  $_SESSION['usersEmail'];
  if(empty($cardID) || empty($expMonth) || empty($expYear) || empty($cvv)) {
    $status = "All fields are compulsory.";
  } else {
      $sql = "UPDATE users SET cardID=:cardID, expMonth=:expMonth, expYear=:expYear, cvv=:cvv WHERE usersEmail =:usersEmail";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['cardID' => $cardID, 'expMonth' => $expMonth, 'expYear' => $expYear, 'cvv' => $cvv, 'usersEmail'=> $usersEmail]);


      $status = "Your Credit Card Info Has Been Stored Successfully.";
      $cardID = "";
      $expMonth = "";
      $expYear = "";
      $cvv = "";
    }
  }

  ?>