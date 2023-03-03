<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="col-md-6">
            <h1>Cadastro novo usuário</h1>
        </div>
        <div class="row">
            <div class="col-md-5">
                <form action="" method="">
                    <div class="col-9 mt-1">
                        <input name="nome" id="nome" class="form-control" placeholder="Nome *"><br>
                    </div>

                    <div class="col-9 mt-1">
                        <input name="sobrenome" id="sobrenome" class="form-control" placeholder="Sobrenome *"><br>
                    </div>

                    <div class="col-9 mt-1">
                        <input name="email" id="email" class="form-control" placeholder="Email *"><br>
                    </div>

                    <div class="col-9 mt-1">
                        <input name="number" id="phone" class="form-control" placeholder="Telefone"><br>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <form action="" method="">
                    <div class="col-9 mt-1">
                        <input name="senha" id="senha" class="form-control" placeholder="Senha *"><br>
                    </div>

                    <div class="col-9 mt-1">
                        <input name="senha" id="senha" class="form-control" placeholder="Confirme a senha *"><br>
                    </div>

                    <div class="col-9 mt-1">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecione uma pergunta de segurança</option>
                            <option value="1">Qual a estação do ano que você nasceu?</option>
                            <option value="2">Qual seu número de telefone anterior?</option>
                            <option value="3">Qual o nome do seu animal de estimação?</option>
                        </select><br>
                    </div>

                    <div class="col-9 mt-1">
                        <input name="text" id="text" class="form-control" placeholder="Resposta"><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>