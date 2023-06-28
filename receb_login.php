<?php
if (isset($_POST['email']) && isset($_POST['senha'])) {
    // Obtenha os valores enviados pelo formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // ...
}
$servidor = 'localhost';  // Endereço do servidor do banco de dados
$usuario = 'seu_usuario'; // Usuário do banco de dados
$senha_bd = 'sua_senha';  // Senha do banco de dados
$banco = 'seu_banco';     // Nome do banco de dados

$conexao = new mysqli($servidor, $usuario, $senha_bd, $banco);
// Verificar se houve erro na conexão
if ($conexao->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
}

$sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
$resultado = $conexao->query($sql);
// Verificar se a consulta retornou algum resultado
if ($resultado->num_rows == 1) {
    // Autenticação bem-sucedida
    // ...
} else {
    // Autenticação falhou, redirecionar para a página de login novamente
    header('Location: login.html');
    exit();
}

$cliente = $resultado->fetch_assoc();
$cliente_id = $cliente['id'];

$sql_hoteis = "SELECT * FROM hoteis WHERE cliente_id = '$cliente_id'";
$resultado_hoteis = $conexao->query($sql_hoteis);

if ($resultado_hoteis->num_rows > 0) {
    echo "<h3>Hotéis Cadastrados:</h3>";
    while ($hotel = $resultado_hoteis->fetch_assoc()) {
        echo "Nome do Hotel: " . $hotel['nome'] . "<br>";
        echo "Endereço: " . $hotel['endereco'] . "<br>";
        echo "Descrição: " . $hotel['descricao'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum hotel cadastrado.";
}

$conexao->close();

header('Location: login.html');
exit();

?>
