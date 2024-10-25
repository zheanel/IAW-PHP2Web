<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_php1";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST["name"];
$subname = $_POST["subname"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "¡Datos Enviados!";

$stmt = $conn->prepare("INSERT INTO usuarios (name, subname) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $subname); //
$stmt->execute();
$conn->close();


?>