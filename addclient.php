<?php

$servername = "localhost";
$username ="root";
$password ="1234";
$dbname="clientdb";

$con =new mysqli($servername, $username,$password,$dbname);

if($con->connect_error) {
	die("connection failed".$con->connect_error);
}

$nume= $_POST["nume"];
$prenume= $_POST["prenume"];
$mail= $_POST["mail"];
$subiect= $_POST["subiect"];
$mesaj= $_POST["mesaj"];




$stmt= $con->prepare("INSERT INTO clients (nume, prenume, mail, subiect, mesaj) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $nume,$prenume,$mail,$subiect,$mesaj);
$stmt->execute();

mysqli_stmt_close($stmt);
mysqli_close($con);
header('location: clients.php');

?>
