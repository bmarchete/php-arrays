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

        <h1 class="page-header">Formulário de Cadastro</h1>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form action="resumo.php" method="POST" role="form">


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dados</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Carlos Roberto">
                            </div>

                            <div class="form-group">
                                <label for="idade">Idade</label>
                                <input type="text" class="form-control" id="idade" name="idade" placeholder="Ex: 27">
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Você pratica quais esportes?</h3>
                        </div>
                        <div class="panel-body">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="futebol" name="esportes[]">
                                    Futebol
                                </label>
                            
                                <label>
                                    <input type="checkbox" value="basquete" name="esportes[]">
                                    Basquete
                                </label>

                                <label>
                                    <input type="checkbox" value="natacao" name="esportes[]">
                                    Natação
                                </label>
                            </div>
                        </div>
                    </div>

                  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Responda de acordo com as alternativas</h3>
                        </div>
                        <div class="panel-body">
                            <div class="">
                            <p>
                                Você é casado?
                                <label>
                                    <input type="radio" value="sim" name="casado">
                                    Sim
                                </label>

                                <label>
                                    <input type="radio" value="não" name="casado" checked="checked">
                                    Não
                                </label>
                            
                            </p>
                                
                            </div>

                            <div class="">
                            <p>
                                Você tem filho(s)?
                                <label>
                                    <input type="radio" value="sim" name="filhos">
                                    Sim
                                </label>

                                <label>
                                    <input type="radio" value="não" name="filhos" checked="checked">
                                    Não
                                </label>
                            
                            </p>
                            <div class="">
                            <p>
                                Você está empregado?
                                <label>
                                    <input type="radio" value="sim" name="empregado">
                                    Sim
                                </label>

                                <label>
                                    <input type="radio" value="não" name="empregado" checked="checked">
                                    Não
                                </label>
                            
                            </p>
                                
                            </div>
                                
                            </div>
                        </div>
                    </div>
  
                    
                    

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>

    <br><br>




    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
