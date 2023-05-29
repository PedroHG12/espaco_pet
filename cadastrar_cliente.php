<?php
require_once 'conexao.php';
header("Refresh: 2; URL=index.html");
$nome = $_POST['nome_cliente'];
$endereco = $_POST['endereco_cliente'];

$sql = "INSERT INTO clientes (nome, endereco) VALUES ('$nome', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar cliente: " . $conn->error;
}

$conn->close();
?>
