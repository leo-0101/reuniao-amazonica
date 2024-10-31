<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/salasReservadas.css') }}">
    <title>Sistema de Agendamento de Salas</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Reunião Amazônica</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Salas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Agendamentos</a>
            </li>
          </ul>
          <span class="text-white">
            Administrador <i class="bi bi-caret-down-fill"></i>
          </span>
        </div>
    </nav>

    <div class="container main-div p-3 mt-5">

        {{-- <div class="container title-div mb-3 border p-4">
            <h4>Agendamento de Salas</h4>
        </div> --}}

        {{-- <h2>Salas Reservadas</h2> --}}
        <div class="row">
            <!-- Cartão Sala 101 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('img/auditorio.png') }}" alt="Imagem do Auditório Tauató">
                    <div class="card-body">
                        <h5 class="card-title">Auditório Tauató</h5>
                        <p class="card-text card-info">Horário: 15:00 às 18:00</p>
                        <p class="card-text card-info">Capacidade: 50 pessoas</p>
                        <p class="card-text card-info">Reservado por: Sabrina Farage Simões</p>
                        <p class="card-text mt-3"><span class="badge badge-success">Disponível</span></p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#agendarModal">Reservar</button>
                    </div>
                </div>
            </div>

            <!-- Cartão Sala 102 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('img/atendimento.png') }}" alt="Imagem do Auditório Tauató">
                    <div class="card-body">
                        <h5 class="card-title">Atendimento aos Pesquisadores</h5>
                        <p class="card-text card-info">Horário: 14:00 às 17:00</p>
                        <p class="card-text card-info">Capacidade: 6 pessoas</p>
                        <p class="card-text card-info">Reservado por: João Batista Jesus</p>
                        <p class="card-text mt-3"><span class="badge badge-danger">Indisponível</span></p>
                        <button class="btn btn-secondary" disabled>Indisponível</button>
                    </div>
                </div>
            </div>

            <!-- Cartão Sala 103 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('img/daf.png') }}" alt="Imagem do Auditório Tauató">
                    <div class="card-body">
                        <h5 class="card-title">DAF/DITEC</h5>
                        <p class="card-text card-info">Horário: 08:00 às 12:00</p>
                        <p class="card-text card-info">Capacidade: 10 pessoas</p>
                        <p class="card-text card-info">Reservado por: Luiz Felipe dos Santos</p>
                        <p class="card-text mt-3"><span class="badge badge-success">Disponível</span></p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#agendarModal">Reservar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('img/atendimento.png') }}" alt="Imagem do Auditório Tauató">
                    <div class="card-body">
                        <h5 class="card-title">Atendimento aos Pesquisadores</h5>
                        <p class="card-text card-info">Horário: 12:00 às 15:00</p>
                        <p class="card-text card-info">Capacidade: 6 pessoas</p>
                        <p class="card-text card-info">Reservado por: Felipe Andrey</p>
                        <p class="card-text mt-3"><span class="badge badge-danger">Indísponível</span></p>
                        <button class="btn btn-secondary" disabled>Indisponível</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('img/gabinete.png') }}" alt="Imagem do Auditório Tauató">
                    <div class="card-body">
                        <h5 class="card-title">Gabinete da Presidência</h5>
                        <p class="card-text card-info">Horário: 12:00 às 14:00</p>
                        <p class="card-text card-info">Capacidade: 15 pessoas</p>
                        <p class="card-text card-info">Reservado por: Ana Paula Valadão</p>
                        <p class="card-text mt-3"><span class="badge badge-success">Disponível</span></p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#agendarModal">Reservar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('img/auditorio.png') }}" alt="Imagem do Auditório Tauató">
                    <div class="card-body">
                        <h5 class="card-title">Auditório Tatuató</h5>
                        <p class="card-text card-info">Horário: 16:00 às 19:00</p>
                        <p class="card-text card-info">Capacidade: 50 pessoas</p>
                        <p class="card-text card-info">Reservado por: Luis Frois Neves</p>
                        <p class="card-text mt-3"><span class="badge badge-success">Disponível</span></p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#agendarModal">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Agendamento -->
    <div class="modal fade" id="agendarModal" tabindex="-1" role="dialog" aria-labelledby="agendarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agendarModalLabel">Agendar Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="date" class="form-control" id="data" required>
                        </div>
                        <div class="form-group">
                            <label for="horaInicio">Hora de Início</label>
                            <input type="time" class="form-control" id="horaInicio" required>
                        </div>
                        <div class="form-group">
                            <label for="horaFim">Hora de Fim</label>
                            <input type="time" class="form-control" id="horaFim" required>
                        </div>
                        <div class="form-group">
                            <label for="responsavel">Responsável</label>
                            <input type="text" class="form-control" id="responsavel" placeholder="Nome do responsável" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Confirmar Agendamento</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; 2024 FAPEAM. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
