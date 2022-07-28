  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de Alunos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lista de alunos</li>
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
                <div class="row text-right">                  
                  <div class="card-body text-right">                                     
                    <div class="">
                      <a href="home.php?acao=cadastro_alunos" class="btn btn-primary">Cadastrar Alunos</a>
                    </div>
                  </div>
                </div>                
                <div class="card-header">

                  <h3 class="card-title">
                    <p class="card-text">Listagem</p>
                  </h3>
                </div>
                <div class="card-body">


                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    </br>
                    <div class="row ">


                      <div class="form-group md">
                        <label>
                          <select class="form-control">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                        </label>
                      </div>
                      <div class="form-group col-md-6">
                        resultados por página
                      </div>
                      <div id="DataTables_Table_0_filter" class="form-group col-md">
                        <label>
                          <input type="search" class="form-control form-control-sm" placeholder="Pesquisar..." aria-controls="DataTables_Table_0">
                        </label>
                        <div class="btn-group col-sm-2">
                          <a type="button" class="btn btn-default " href="#">
                            Copy</a>
                          <a type="button" class="btn btn-default" href="#">
                            CSV</a>
                          <a type="button" class="btn btn-default" href="#">
                            PDF</a>
                          <!-- <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#">
                              <span>PDF</span>
                            </a> -->
                        </div>
                      </div>
                    </div>
                    </label>

                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                      Mostrando de x até y de z registros
                    </div>
                    <table class="table">
                      <thead>
                        <tr role="sort row"> falta SORT aqui

                          <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 10px;">#</th>
                          <th>Matrícula</th>
                          <th>Nome</th>
                          <th>Idade</th>
                          <th>Bairro</th>
                          <th>Status</th>
                          <th>Data da Matrícula</th>
                          <th style="width: 40px">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="tbaluno table-dark">
                          <td>1.</td>
                          <td>20220413</td>
                          <td>Nometeste1</td>
                          <td>21</td>
                          <td>Realengo</td>
                          <td>Inativo</td>
                          <td>13/04/2022</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_alunos" class="btn btn-success no-paddings" title="Editar Aluno"><i class="fas fa-user-edit"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Aluno"><i class="fas fa-user-times"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>20220414</td>
                          <td>Nometeste2</td>
                          <td>14</td>
                          <td>Realengo</td>
                          <td>Ativo</td>
                          <td>14/04/2022</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_alunos" class="btn btn-success no-paddings" title="Editar Aluno"><i class="fas fa-user-edit"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Aluno"><i class="fas fa-user-times"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>20220415</td>
                          <td>Nometeste3</td>
                          <td>16</td>
                          <td>Realengo</td>
                          <td>Ativo</td>
                          <td>15/04/2022</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_alunos" class="btn btn-success no-paddings" title="Editar Aluno"><i class="fas fa-user-edit"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Aluno"><i class="fas fa-user-times"></i></a>

                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>20220416</td>
                          <td>Nometeste4</td>
                          <td>23</td>
                          <td>Madureira</td>
                          <td>Ativo</td>
                          <td>16/04/2022</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_alunos" class="btn btn-success no-paddings" title="Editar Aluno"><i class="fas fa-user-edit"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Aluno"><i class="fas fa-user-times"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>20220417</td>
                          <td>Nometeste5</td>
                          <td>60</td>
                          <td>Taquara</td>
                          <td>Ativo</td>
                          <td>17/04/2022</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_alunos" class="btn btn-success no-paddings" title="Editar Aluno"><i class="fas fa-user-edit"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Aluno"><i class="fas fa-user-times"></i></a>
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