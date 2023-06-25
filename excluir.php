<?php 

    include 'conexao.php';

    $id = $_POST['id'];

    $delete_produtos = "DELETE FROM lista_produtos WHERE id_produto = '$id'";

    $query_produtos = mysqli_query($conexao_db, $delete_produtos);

    if($query_produtos){
    header('location:listagem.php');
    }else{
        echo'ERRO';
    }


?>