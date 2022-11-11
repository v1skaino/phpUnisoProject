<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Cadastrar</title>
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
        <h1 class="text-center">Cadastrar produto</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="../scripts/insert.php" method="post" class="formContainer">
                    <link rel="stylesheet"
                        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
                        crossorigin="anonymous">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Família</label>

                        <input type="text" class="form-control" name="family" value="" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Família de estoque</label>

                        <input type="text" class="form-control" name="storage_family" value="" autocomplete="off"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Unidade de medida</label>

                        <input type="text" class="form-control" name="unit_measure" value="" autocomplete="off"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data de implantação</label>

                        <input type="date" class="form-control" name="created_at" value="" autocomplete="off"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data de liberação</label>

                        <input type="date" class="form-control" name="liberated_at" value="" autocomplete="off"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descrição</label>

                        <input type="text" class="form-control" name="description" value="" autocomplete="off"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Status</label>

                        <select class="form-control" name="status" aria-label="Default select example">
                            <option selected value="Ativo">Ativo</option>
                            <option value="Processando">Processando</option>
                            <option value="Obsoleto">Obsoleto</option>
                        </select>
                    </div>
                    <div class="">
                        <input type="submit" class="w-100 btn btn-primary"
                            style="background-color: #343a40; border-color: #343a40;" name="submit" value="Cadastrar">
                    </div>

                </form>

            </div>
        </div>
    </div>



</body>

</html>