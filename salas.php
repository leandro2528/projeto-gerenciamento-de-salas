<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/salas.css">
</head>
  <body>
<div class="client-table p-2" id="clientTable">
    <button id="btn-new-client" class="btn btn-success btn-sm my-3">Nova sala</button>

    <h5 id="title-client">Salas /<a href="?dashboard.php">Dashboard</a></h5>
    <div id="new-table-client">
        <?php
            $sql = "SELECT * FROM sala";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                print "<table class='table table-hover table-striped table-bordered'>";
                    print "<tr>";
                        print "<th>Nome</th>";
                        print "<th>Capacidade Maxima</th>";
                        print "<th>Recursos Disponíveis</th>";
                        print "<th>Data de Criação</th>";
                        print "<th>Ações</th>";
                    print "</tr>";
                while($row = $res->fetch_object()) {
                    print "<tr>";
                        print "<td>".$row->nome."</td>";
                        print "<td>".$row->capacidade_maxima."</td>";
                        print "<td>".$row->recursos_disponiveis."</td>";
                        print "<td>".$row->data_criacao."</td>";
                        print "<td>
                                    <button class='btn btn-warning btn-sm'>Editar</button>
                                    <button class='btn btn-danger btn-sm'>Excluir</button>
                              </td>";
                    print "<tr>";
                }
                print "</table>";
            } else {
                print "<p class='alert alert-danger'> Não encontrou resultados</p>";
            }
        ?>
    </div>
    <div id="form-new-client">
        <form action="?page=salvar_sala" method="POST" class="form-boxs-clients">
            <input type="hidden" name="acao" value="cadastrar">
            <h5>CADASTRO DE SALAS</h5>

            <div class="form-box-item">

                <div class="form-left col-6">

                    <div class="mt-2 box-form">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Capacidade Maxima</label>
                        <input type="text" class="form-control" name="capacidade_maxima">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Recursos Disponíveis</label>
                        <input type="text" class="form-control" name="recursos_disponiveis">
                    </div>

                    <div class="mt-2 box-form">
                        <label for="">Data de Criação</label>
                        <input type="date" class="form-control" name="data_de_criacao">
                    </div>

                    <div class="btn-form my-5 d-flex">
                        <button type="submit" class="btn btn-primary btn-sm me-5">Salvar sala</button>
                        <a class="btn btn-warning btn-sm" href="dashboard.php">Voltar</a>
                    </div>

                </div>
                
            </div>
        </form>
    </div>

</div>


    <script src="assets/js/salas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>