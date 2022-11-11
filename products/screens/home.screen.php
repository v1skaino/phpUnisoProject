<?php
require_once("../../connect.php");
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container"> <a class="navbar-brand"href="http://localhost/www/myApp/products/screens/home.screen.php">My Factory LTDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="http://localhost/www/myApp/products/screens/create.screen.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="http://localhost/www/myApp/products/screens/list.screen.php">Listar</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="jumbotron">
        <h1 class="text-center">Bem vindo ao My Factory!</h1>
    </div>
    <div class="content" style="padding: 10px 30px">
    <img src="../assets/factory.svg" alt="Factory image with a truck"/>
    </div>
</body>

</html>