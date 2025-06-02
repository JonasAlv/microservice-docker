<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM items");

echo "<h1>Itens no Banco</h1>";
echo "<ul>";
while($row = $result->fetch_assoc()) {
    echo "<li>ID: " . $row['id'] . " - Nome: " . $row['name'] . "</li>";
}
echo "</ul>";

$conn->close();
?>
