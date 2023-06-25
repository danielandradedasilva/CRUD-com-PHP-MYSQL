<?php 
    include 'conexao.php';

    $buscar_produtos = "SELECT * FROM lista_produtos";
    $query_produtos = mysqli_query($conexao_db, $buscar_produtos);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>CADASTRO DE PRODUTOS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body class="bg-light">
      
    <div class="container">
        <div class="alert alert-primary mt-3">
            <h2 class="text-center">Cadastro de Produtos</h2>
        </div>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Produto</th>
                    <th>Fabricante</th>
                    <th>Quantidade</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>

                <?php 
                    while($receber_produtos = mysqli_fetch_array($query_produtos)){
                        $id = $receber_produtos['id_produto'];
                        $produto = $receber_produtos['nome_produto'];
                        $fabricante = $receber_produtos['fabricante'];
                        $quatidade = $receber_produtos['quantidade'];                    
                ?>

                <tr>
                    <form action="editar.php" method="post">
                        <td scope="row"><?php echo $id?></td>
                        <td><input class="form-control" type="text" name="produto" value="<?php echo $produto ?>"></td>
                        <td><input class="form-control" type="text" name="fabricante" value="<?php echo $fabricante?>"></td>
                        <td><input class="form-control" type="text" name="quantidade" value="<?php echo $quatidade?>"></td>  
                        <td><input class="form-control" type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="submit" class="btn btn-warning btn-block" value="Editar">
                    </form>
                    </td>
                    <td>
                        <form action="excluir.php" method="post">
                            <input class="form-control" type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="submit" class="btn btn-danger btn-block" value="Excluir">
                        </form>
                    </td>

                </tr>
                <?php };?><!--fechamento do comando while-->
               <tr class="form-group">
                    <form action="cadastro.php" method="post">                            
                             <td></td>
                            <td><input class="form-control" type="text" name="produto" placeholder="Produto"></td>
                            <td><input class="form-control" type="text" name="fabricante" placeholder="Fabricante"></td>
                            <td><input class="form-control" type="text" name="quantidade" placeholder="Quantidade"></td>                        
                            <td><input type="submit" class="btn btn-primary btn-block" value="Cadastrar"></td>
                            <td></td>                           
                    </form>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>