<?php

require 'Handler.php';

$dados = Handler::arrayHandler();

?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <h1 class="page-header">Dados coletados</h1>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Resumo dos dados</h3>
                    </div>
                    <div class="panel-body">

                        <p>Nomes:</p>

                        <ul class="list-group">

                            <?php foreach ($dados['nomes'] as $key => $value) { ?>
                                <li class="list-group-item">
                                    <?= ($key+1)?>º <?= $value ?>
                                </li>
                           <?php } ?>                           
                           
                        </ul>

                        <p>Idade:
                            <?= $dados['idade']?>
                        </p>

                        <p>Esportes</p>



                        <ul class="list-group">

                            <?php foreach ($dados['esportes'] as $value) { ?>
                                <li class="list-group-item">
                                    <?= $value[0]?> | Chave: <?= $value[1]?> 
                                </li>
                            <?php } ?>      

                        </ul>



                        <p>Demais dados</p>



                        <ul class="list-group">


                            <?php foreach ($dados['alternativas']  as $key =>$value) { ?>
                                <li class="list-group-item">
                                    <?= ucfirst($key)?>
                                </li>
                            <?php } ?>  


                        </ul>

                    </div>
                </div>


            </div>
        </div>

    </div>




    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
