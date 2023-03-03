<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div>
        <img src="img/logo.png" class="rounded mx-auto d-block" width="60">
    </div>
    <hr>
    <div class="container">

        <div class="col-md-6 mx-auto text-center">
            <h1>Crie o seu cadastro</h1>
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</h5>
        </div> <br>
        <div class="d-flex justify-content-center">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
            <label class="col-md-1" for="inlineRadio1">Pessoa física</label>

            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
            <label class="form-check-label" for="inlineRadio2">Pessoa jurídica</label>
        </div>
        <form>
            <div class="row mt-1">
                <div class="col-md-5">
                    <form action="" method="">
                        <div class="col-5" col-9 mt-1>
                            <label for="formGroupExampleInput">Nome *</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
                        </div>
                        <div class="col-5">
                            <label for="formGroupExampleInput2">Sobrenome</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sobrenome">
                        </div>
                </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>