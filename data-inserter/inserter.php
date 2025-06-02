<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

while (true) {
    $name = "Item_" . uniqid();
    $sql = "INSERT INTO items (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "Inserido: $name\n";
    } else {
        echo "Erro: " . $conn->error . "\n";
    }
    sleep(5);
}

$conn->close();
?>
