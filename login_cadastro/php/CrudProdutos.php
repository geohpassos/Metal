<?php
$requisicao = $_POST['requisicao'];

switch ($requisicao) {
    case 'Atualizar':
        include 'AtualizarProdutos.php';
        break;

    case 'Cadastrar':
        include 'CadastrarProdutos.php';
        break;

    case 'Consultar':
        include 'ConsultarProdutos.php';
        break;

    case 'Deletar':
        include 'RemoverProdutos.php';
        break;

    default:
        echo "Ação invalida, por favor selecionar uma opcao valida";
        break;
}
?>