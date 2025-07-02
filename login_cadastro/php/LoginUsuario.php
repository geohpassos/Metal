<?php
session_start();
require_once('Conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

if(!empty($email) && !empty($senha)){
    $sql = 'SELECT * FROM usuarios WHERE email = :email';
    $requisicao = $conexao->prepare($sql);
    $requisicao->bindParam(':email',$email);
    $requisicao->execute();
    $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);
    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION ['usuario_id'] = $usuario['id'];
        $_SESSION ['usuario_telefone'] = $usuario['telefone'];
        header('location:Home.php');
        exit;
    }else{
        echo'Usuário ou senha incorretos, verifique os campos!';
    }
}else{
      echo'Preencha todos os campos.';
    }

?>