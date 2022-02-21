<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style type="text/css">

        #tamanhoContainer {
            width: 500px;
        }
        #botao {
            background-color: info; /* cor de fundo*/
            color: #ffffff; /* cor da letra */  
        }

        </style>
</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h4>Formulário de Cadastro </h4>
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label for="number" class="form-label">Nº do produto</label>
                <input type="number" class="form-control" name="numeroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="number" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" autocomplete="off" required>
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>

            <div class="form-group">
                <label for="number" class="form-label">Quantidade do produto</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" required>
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C </option>
                </select>
            </div>

            <div style="text-align: right";>
            <button type="submit" id="botao" class= "btn btn-info btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>