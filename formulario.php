<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"><!--CSS do Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <link rel="stylesheet" href="css/footerindex.css"><!--CSS do footer-->
        <link rel="stylesheet" href="css/estilobuttonzapinstaface.css"><!--CSS dos Icons das redes sociais-->
        <link rel="stylesheet" href="css/cardindex.css"><!--CSS do Card -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    
    h2 {
      text-align: center;
    }
    
    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    label {
      display: block;
      font-weight: bold;
      margin-top: 10px;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    select {
      height: 35px;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  <style>
            ::-webkit-scrollbar{
                width: 10px;
            }::-webkit-scrollbar-track{
                background: color rgb(72, 0, 205);
                border: radius 30px;
            }
        </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">Hotel Lunari </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="formulario.php">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reserva.php">Reserva</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

<h2>Cadastro de Usuário</h2>

<form method="POST" action="recebe.php">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" id="nome" required><br><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br><br>

  <label for="senha">Senha:</label>
  <input type="password" name="senha" id="senha" required><br><br>

  <label for="telefone">Telefone:</label>
  <input type="text" name="telefone" id="telefone" required><br><br>

  <label for="cpf">CPF:</label>
  <input type="text" name="cpf" id="cpf" required><br><br>

  <label for="sexo">Sexo:</label>
  <select name="sexo" id="sexo" required>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
  </select><br><br>

  <label for="data_nasc">Data de Nascimento:</label>
  <input type="date" name="data_nasc" id="data_nasc" required><br><br>

  <label for="cidade">Cidade:</label>
  <input type="text" name="cidade" id="cidade" required><br><br>

  <label for="estado">Estado:</label>
  <input type="text" name="estado" id="estado" required maxlength="2"><br><br>

  <label for="endereco">Endereço:</label>
  <input type="text" name="endereco" id="endereco" required><br><br>

  <input type="submit" value="Cadastrar">
</form>


<div style="background-color: rgb(10, 6, 14);">
                <footer>
                    <div class="footer-content">
                        <h3 class="titulo"><img src="img/icon_hotel.png" style="width: 10%;"></h3>
                        <p class="subtitulo"><div style="background-color: rgb(10, 6, 14);"
                            Este site foi criado pela equipe composta por Cauê Victor, Gabriel Sam, Gabriel Almeida, Letícia Albano, Mariana Elias e Brigida Maria (2° Informática-B-JAA) para um projeto do desenvolvimento de um website para o Hotel Lunari></div>
                        <div class="todosicon">
                            <a class="ri-whatsapp-line icon" id="zap" href="" ></a>
                            <a class="ri-instagram-line icon" id="insta" href=""></a>
                            <a class="ri-github-line icon" id="github" href=""></a>
                            <p style="max-width: 500px; margin: 1px auto;line-height: 28px;font-size: 14px;"><a href="" style="text-decoration: none;"> copyright &copy;2023 Hotel Lunari  <img src="img/cordeiro.png" alt="" style="width: 15%;margin-top: -5%;"></a>  </p>
                        </div>  
                    </div>
                </footer>
            </div>
</body>
</html>
