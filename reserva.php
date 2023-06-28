<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <link rel="stylesheet" href="css/footerindex.css"><!--CSS do footer-->
        <link rel="stylesheet" href="css/estilobuttonzapinstaface.css"><!--CSS dos Icons das redes sociais-->
        <link rel="stylesheet" href="css/cardindex.css"><!--CSS do Card -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Formulário de Reserva</title>
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



<div class="container">
        <h2 class="mt-5">Formulário de Reserva</h2>
        <form action="recebe_reserva.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="quarto" class="form-label">Quarto</label>
                <select class="form-select" id="quarto" name="quarto" required>
                    <option value="Villa Jardim">Villa Jardim</option>
                    <option value="Bangalô Coqueiral & Piscina">Bangalô Coqueiral & Piscina</option>
                    <option value="Bangalô Oceano">Bangalô Oceano</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <div style="background-color: rgb(10, 6, 14);">
        <footer>
            <div class="footer-content">
                <h3 class="titulo"><img src="img/icon_hotel.png" style="width: 10%;"></h3>
                <p class="subtitulo">
                    <div style="background-color: rgb(10, 6, 14);">
                        Este site foi criado pela equipe composta por Cauê Victor, Gabriel Sam, Gabriel Almeida, Letícia Albano, Mariana Elias e Brigida Maria (2° Informática-B-JAA) para um projeto do desenvolvimento de um website para o Hotel Lunari
                    </div>
                </p>
                <div class="todosicon">
                    <a class="ri-whatsapp-line icon" id="zap" href=""></a>
                    <a class="ri-instagram-line icon" id="insta" href=""></a>
                    <a class="ri-github-line icon" id="github" href=""></a>
                    <p style="max-width: 500px; margin: 1px auto;line-height: 28px;font-size: 14px;">
                        <a href="" style="text-decoration: none;"> copyright &copy;2023 Hotel Lunari
                            <img src="img/cordeiro.png" alt="" style="width: 15%;margin-top: -5%;">
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    </body>
</html>
