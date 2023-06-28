<?php
include './conexao.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_lunari";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$quarto = $_POST['quarto'];

// Inserir os dados na tabela reserva
$sql = "INSERT INTO reserva (nome, email, quarto) VALUES ('$nome', '$email', '$quarto')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva cadastrada com sucesso!";
    print '\n Redirecionando...\n ';
    header ('Refresh:3; URL=reserva.php');
} else {
    echo "Erro ao cadastrar a reserva: " . $conn->error;
    print '\n Redirecionando...\n ';
    header ('Refresh:3; URL=reserva.php');
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
