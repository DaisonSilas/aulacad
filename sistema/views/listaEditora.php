<?php

require_once "../controllers/EditoraController.php";

if (isset($_GET['excluir'])){
    EditoraController::excluir($_GET['excluir']);
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
    <title>aula bootStrap</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">

            <!--MENU- FAZENDO UM INCLUDE DO MENU-->
            <?php
            include_once "menu.php"
            ?>

        </div>

        <div class="col-md-10">
            <!-- CONTEUDO-->

            <br>
            <a href="cadEditora.php" class="btn btn-success">Novo</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Descrição</th>

                    <th></th>
                </tr>
                </thead>


                <tbody>



                <?php

                $listaEditora = EditoraController::trazerTodos();
                foreach ($listaEditora as $editora){
                    echo "<tr>";
                    echo "<td>".$editora->getNome()."</td>";
                    echo "<td>";
                    echo "<a href= 'cadEditora.php?id=".$editora->getId()."' class='btn btn-primary'>Editar</a>";
                    echo " ";
                    echo "<a href= 'listaEditora.php?excluir=".$editora->getId()."' class='btn btn-danger'>Remover</a>";
                    echo "</td>";
                    echo"</tr>";

                }
                ?>
                </tbody>
            </table>





        </div>
    </div>


    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
    </html>
<?php

