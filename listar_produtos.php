<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 40px">
        <h3>Lista de Produtos</h3>

        <table class="table mt-4">
            <thead>
                <!-- Cabeçalho da Tabela !-->
                <tr>
                    <th scope="col">Número Produto</th>
                    <th scope="col">Nome Produto </th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                </tr>

            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `equipamentos`";
            $busca = mysqli_query($conexao, $sql);

            // Laço de repetição para listar os registros do banco
            // Enquanto houver produtos para serem listados, liste os produtos.
            // Mesma variável utilizada no banco de dados.

            while ($array = mysqli_fetch_array($busca)) {

                $id_equipamento = $array['id_equipamento'];
                $numeroproduto = $array['numeroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

            ?>

                <tr>
                    <!-- Esta tag <td> é preenchida pelo código PHP!-->
                    <!-- Trazendo cada um dos dados que forem cadastrados diretamente pelas variáveis !-->
                    <td><?php echo $numeroproduto ?></td>
                    <td><?php echo $nomeproduto ?></td>
                    <td><?php echo $categoria ?></td>
                    <td><?php echo $quantidade ?></td>
                    <td><?php echo $fornecedor ?></td>
                <?php
            } ?>
                </tr>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>

</html>