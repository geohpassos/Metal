<?php
$db = new Conexao();
$conn = $db -> connect();

$menuObj = new Menu($conn);
$menu = $menuObj -> getMessageCompleto();

?>
<header class="container-principal">
 <div class="logo">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</div>
<div class="topnav">
    <a class="active"href="#home"><i class="fa fa-home"> Principal</i></a>
    <a href="./somos.html"><i  class="fa fa-users">  Somos Nós</i></a>
    <a href="./produto.html">Produtos</a>  
    <a href="./carrinho.html"><i class="fa fa-we landline"></i>Carrinho de Compras</a>
    <a  href="./index.html"><i class="fa fa-user"></i> Login</a>
    <input type="text" placeholder="Search.." >
    
</header>