<?php
require_once 'conexao.php';
header("Refresh: 2; URL=index.html");
$nome = $_POST['nome_pet'];
$clienteId = $_POST['cliente_id'];

$sql = "INSERT INTO pets (nome, cliente_id) VALUES ('$nome', '$clienteId')";

if ($conn->query($sql) === TRUE) {
    echo "Pet cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar pet: " . $conn->error;
}

$conn->close();
?>
