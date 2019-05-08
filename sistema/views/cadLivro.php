<?php
require_once "../models/Livro.php";
require_once "../controllers/LivroController.php";
require_once "../controllers/GeneroController.php";
require_once "../controllers/EditoraController.php";

$livro = new Cliente();

if(isset($_GET['id'])){
    $livro = LivroController::buscarLivro($_GET['id']);
}

if(isset($_POST['salvar'])){
    $livro->setId($_POST['id']);
    $livro->setTitulo ($_POST['titulo']);
    $livro->setDescricao($_POST['descricao']) ;
    $livro->setAutor($_POST['autor']);
    $livro->setValor($_POST['valor']);
    $livro->setAno(md5($_POST['ano']));
    $livro->setGenero(GeneroController::visualiza($_POST['genero']));
    $livro->setEditora(EditoraController::visualiza($_POST['editora']));

    ClienteController::salvar($livro);
    header('Location: listaLivros.php');
}




?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>


<div class="container-fluid">
    <select name="genero" id="">
        <option value="">
    <div class="row">
        <div class="col-md-2">
            <!--menu-->
            <?php
            include_once "menu.php"
            ?>
        </div>
        <div class="col-md-10">
            <!--Conteudo-->
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"> Cadastro de Livros</h3>

                </div>

                <div class="card-body">
                    <form action="cadLivro.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $livro->getId();?>"> <! -- ocultar o ID -->
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="">Titulo</label>
                                <input type="text"class="form-control" placeholder="Titulo" name="titulo" value="<?php echo $livro->getTitulo();?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Ano</label>
                                <input type="text"class="form-control" placeholder="Ano" name="ano" value="<?php echo $livro->getAno();?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Descriação</label>
                                <textarea name="descricao"id="" cols="30" rows="6" class="form-control"><?php echo $livro->getDescricao();?></textarea>

                            <button class="btn btn-primary" type="submit" name="salvar">Salvar</button>



                        </div><!--form-row-->
                    </form>
                </div><!--card-body-->

            </div><!--card-->
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
