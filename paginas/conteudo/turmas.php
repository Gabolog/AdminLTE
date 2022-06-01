  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Turmas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Turmas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">

                <div class="card-body p-0">
                  </br>
                  <div class="row">

                    <div class="col-md-10">

                      <p class="card-text">Há "x ativos" turmas(s) ativos de "x total"</p>
                    </div>
                    </br>
                    </br>
                    <div class="">

                      <a href="home.php?acao=cadastro_turmas" class="btn btn-primary">Cadastrar Turma</a>
                    </div>

                  </div>


                  <!-- começo da tabela -->
                  <div class="form-row">
                    <div class="form-group col-md-8">
                    </div>
                  </div>

                  <div class="card-header">

                    <h3 class="card-title">
                      <p class="card-text">Listagem</p>
                    </h3>
                  </div>


                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table">
                      <thead>
                        <tr role="sort row"> falta SORT aqui

                          <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 10px;">#</th>
                          <th>Turma</th>
                          <th>Horário</th>
                          <th>Total de Alunos</th>
                          <th>Total Vagas</th>
                          <th>Status</th>

                          <th style="width: 40px">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-dark">
                          <td>1.</td>
                          <td>DSX</td>
                          <td>08:00-11:00</td>
                          <td>21</td>
                          <td>2</td>
                          <td>Inativo</td>

                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_turma" class="btn btn-success no-paddings" title="Editar Turma"><i class="fas fa-users"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Turma"><i class="fas fa-users-slash"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>DSX</td>
                          <td>08:00-11:00</td>
                          <td>21</td>
                          <td>2</td>
                          <td>Ativo</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_turma" class="btn btn-success no-paddings" title="Editar Turma"><i class="fas fa-users"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Turma"><i class="fas fa-users-slash"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>DSX</td>
                          <td>08:00-11:00</td>
                          <td>21</td>
                          <td>2</td>
                          <td>Inativo</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_turma" class="btn btn-success no-paddings" title="Editar Turma"><i class="fas fa-users"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Turma"><i class="fas fa-users-slash"></i></a>

                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>DSX</td>
                          <td>08:00-11:00</td>
                          <td>21</td>
                          <td>2</td>
                          <td>Inativo</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_turma" class="btn btn-success no-paddings" title="Editar Turma"><i class="fas fa-users"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Turma"><i class="fas fa-users-slash"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>DSX</td>
                          <td>08:00-11:00</td>
                          <td>21</td>
                          <td>2</td>
                          <td>Inativo</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_turma" class="btn btn-success no-paddings" title="Editar Turma"><i class="fas fa-users"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Turma"><i class="fas fa-users-slash"></i></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </section>
  </main>
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">vazio</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>

        </div>
      </div>
      <div class="card-body">
        Pagina limpa
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Rodapé
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->