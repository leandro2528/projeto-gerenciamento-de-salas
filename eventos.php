<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <h1>Eventos</h1>
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Novo evento
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastre uma novo evento</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="?page=salvar_sala" method="POST">
                                <input type="hidden" name="acao" value="cadastrar_salas">
                                <div class="mb-3">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" name="nome">
                                </div>

                                <div class="mb-3">
                                    <label for="">Data do inicio</label>
                                    <input type="text" class="form-control" name="data_hora_inicio">
                                </div>

                                <div class="mb-3">
                                    <label for="">Data do termino</label>
                                    <input type="date" class="form-control" name="data_hota_termino">
                                </div>

                                <div class="mb-3">
                                    <label for="">Sala</label>
                                    <input type="text" class="form-control" name="sala_id">
                                </div>

                                <div class="mb-3">
                                    <label for="">Organizador</label>
                                    <input type="text" class="form-control" name="organizador_id">
                                </div>

                                <div class="mb-3">
                                    <label for="">Data de criação</label>
                                    <input type="date" class="form-control" name="data_criacao">
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Salvar evento</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Salvar evento</button>
                        </div>
                        </div>
                    </div>
                    </div>

                     <hr>

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data do inicio</th>
                                <th>Data do termino</th>
                                <th>Sala</th>
                                <th>Organizados</th>
                                <th>Data de criação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th>Nome</th>
                                <td>Data do inicio</td>
                                <td>Data do termino</td>
                                <td>Sala</td>
                                <td>Organizados</td>
                                <td>Data de criação</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Editar</button>
                                    <button class="btn btn-danger btn-sm">Excluir</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>