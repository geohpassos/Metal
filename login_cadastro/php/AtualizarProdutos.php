<?php

require_once 'Conexao.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];


if (!empty($nome) && !empty($preco) && !empty($descricao)) {

    if(!empty($nome)){
        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, descricao = :descricao WHERE descricao = :descricao";
    }else{
         $sql = "UPDATE produtos SET nome = :nome WHERE id = :id";
    }
    $requisicao = $conexao->prepare($sql);
    $requisicao->bindParam('nome', $nome);
    $requisicao->bindParam('preco', $preco);
    $requisicao->bindParam('descricao', $descricao);

    if(!empty($novoProduto)){
    $requisicao->bindParam('nome', $npme);

    }
    try{
        $requisicao->execute();
        echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Cadastro</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script type="text/javascript">
            Swal.fire({
                title: "Produto Atualizado com Sucesso",
                text: "Atualização concluída com Sucesso.",
                icon: "success",
                confirmButtonText: "Produtos",
            }).then(function() {
                window.location = "http://localhost/login_cadastro/html/cadastroProdutos.html";
            });
        </script>
    </body>
    </html>';
    }catch(PDOException $e){
        echo"Erro ao Atualizar: " . $e->getMessage(); 
    }
}else{
    echo"Preencha o nome e email para atualizar";
}

?>