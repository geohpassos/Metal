

<?php
require_once 'Conexao.php';


$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];

if(!empty($nome) && !empty($preco) && !empty($descricao)){

    $sql = "INSERT INTO produtos(nome,preco,descricao) VALUES
    (:nome,:preco,:descricao)";

    $requisicao = $conexao -> prepare($sql);

    $requisicao->bindParam(":nome", $nome);
    $requisicao->bindParam(":preco", $preco);
    $requisicao->bindParam(":descricao",  $descricao);

    try{
        $requisicao->execute();
        echo' <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastro</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script type="text/javascript">
            Swal.fire({
                title: "Cadastro do Produto Realizado",
                text: "Cadastro concluído com Sucesso.",
                icon: "success",
                confirmButtonText: "Produtos",
            }).then(function() {
                window.location = "http://localhost/login_cadastro/html/cadastroProdutos.html";
            });
        </script>
    </body>
    </html>';
    }catch(PDOException $e){
        echo ' <!DOCTYPE html>
    <html>
    <head>
        <title>Cadastro</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script type="text/javascript">
              Swal.fire({
            title: "Erro!",
            text: "Erro na finalização",
            icon: "error",
            confirmButtonText: "Tente Novamente"

        })
        </script>
    </body>
    </html>'.$e ->getMessage();

    }
    
}else{
    echo'<p style="color: red">PREENCHA TODOS OS CAMPOS!!!!</p>';
}
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
?>