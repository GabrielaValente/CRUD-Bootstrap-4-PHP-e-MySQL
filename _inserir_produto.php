<?php

include 'conexao.php';

//Variáveis
$numeroproduto = $_POST['numeroproduto']; // Recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `equipamentos`(`numeroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($numeroproduto, '$nomeproduto', '$categoria', '$quantidade', '$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<div class ="container text-center" style="width: 500px; margin-top: 20px">

    <h4>Equipamento adicionado com sucesso!</h4>

    <div class="text-center" style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo equipamento</a>
    </div>

</div> 