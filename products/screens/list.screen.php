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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Listar</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container"> <a class="navbar-brand" href="http://localhost/www/myApp/products/screens/home.screen.php">My Factory LTDA</a>
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
        <h1 class="text-center">Lista de Produtos</h1>
    </div>
    <div style="padding: 10px 30px">
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Família</th>
                    <th>Família de Estoque</th>
                    <th>Unidade de medida</th>
                    <th>Descrição</th>
                    <th>Criado</th>
                    <th>Liberado</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="pointer">
                <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["family"] . "</td>";
                    echo "<td>" . $row["storage_family"] . "</td>";
                    echo "<td>" . $row["unit_measure"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["created_at"] . "</td>";
                    echo "<td>" . $row["liberated_at"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td>";
                    echo "<div class='btn-group'>";
                    echo "<a  class='btn btn-secondary' href='./edit.screen.php?id=" . $row['id'] . "'>Editar</a>";
                    echo "<a  class='btn btn-danger' href='../scripts/delete.php?id=" . $row['id'] . "'>Deletar</a>";
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
        </div>
</body>

</html>