<?php 

    include 'conexao.php';

    $produto = $_POST['produto'];
    $fabricante = $_POST['fabricante'];
    $quantidade = $_POST['quantidade'];


    $inserindo_produtos = "INSERT INTO lista_produtos VALUES ('','$produto', '$fabricante', '$quantidade')";

    $query_produtos = mysqli_query($conexao_db, $inserindo_produtos);

    if($query_produtos){
    header('location:listagem.php');
    }else{
        echo'ERRO';
    }


?>