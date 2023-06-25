<?php 

    include 'conexao.php';

    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $fabricante = $_POST['fabricante'];
    $quantidade = $_POST['quantidade'];

   
    $editar_produtos = "UPDATE lista_produtos SET id_produto = '$id', nome_produto = '$produto', fabricante = '$fabricante', quantidade = '$quantidade' WHERE id_produto = '$id'";

    $query_produtos = mysqli_query($conexao_db, $editar_produtos);

    if($query_produtos){
    header('location:listagem.php');
    }else{
        echo'ERRO';
    }

?>