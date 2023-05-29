<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espaco_pet";

$conn = new mysqli($servername, $username, $password, $dbname);
header("Refresh: 2; URL=index.html");

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter o nome do cliente enviado pelo formulário
$nomeCliente = $_POST['nome_cliente'];

// Consultar o ID do cliente no banco de dados
$sql = "SELECT id FROM clientes WHERE nome = '$nomeCliente'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $idCliente = $row['id'];
    echo "O ID do cliente $nomeCliente é: $idCliente";
} else {
    echo "Cliente não encontrado.";
}

