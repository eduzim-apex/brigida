<?php
include './conexao.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_lunari";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO cadastro (nome, email, senha, telefone, cpf, sexo, data_nasc, cidade, estado, endereco)
        VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
    print '\n Redirecionando...\n ';
    header ('Refresh:3; URL=formulario.php');
} else {
    echo "Erro ao cadastrar: ";
}

// Fechar a conexão
$conn->close();
?>
