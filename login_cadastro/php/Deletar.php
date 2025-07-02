<?php

require_once 'Conexao.php'; //conecta no banco

$deletar = $_POST["nome"];
$deletar = $_POST["preco"];
$deletar = $_POST["descricao"];
$remover = ['nome','preco','descricao'];




if (!empty($remover)) {

    $sql = "DELETE FROM produtos WHERE nome = :nome, preco=:preco,descricao = descricao";

    //preparar a remocao de dados no banco
    $requisicao = $conexao->prepare($sql);

    //vamos pegar o email digitado no form e passar por parametro
    //isso fara que a consulta na variavel $sql, use o email que
    //o usuario digitou, o bindParam serve para evitar SQLInjection
    //e uma protecao da aplicacao no banco de dados

    $requisicao->bindParam(':descricao', $descricao);

    try {
        $requisicao->execute();
        if ($requisicao->rowCount() > 0) {
            echo "Produto deletado com sucesso";
        } else {
            echo "Produto nao existe!!";
        }
    } catch (PDOException $e) {
        echo "Erro ao deletar: " . $e->getMessage();
    }
} else {
    echo "Digite uma descricao para remover algum produto!";
}