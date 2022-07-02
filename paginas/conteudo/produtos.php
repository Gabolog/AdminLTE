  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produtos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produtos</li>
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

                    <div class="col-sm-4 col-md-4">

                      <p class="card-text">Há "x ativos" Produtos na unidade</p>
                    </div>
                    <div class="col-sm-4 col-md-2">
                    </div>
                    <div class="col-sm-4 col-md-3">
                    </div>
                    <div class="col-sm-4 col-md-3">
                      <a href="home.php?acao=cadastro_produtos" class="btn btn-primary">Cadastrar Produtos</a>
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

                          <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 10px;">ID</th>
                          <th>Nome</th>
                          <th>EAN(cod. de barras)</th>
                          <th>Tipo</th>
                          <th>Unidades por embalagem</th>
                          <th>Fabricante</th>

                          <th style="width: 40px">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-dark">
                          <td>200</td>
                          <td>Nankin</td>
                          <td>1111111111</td>
                          <td>Unidade(s)</td>
                          <td>1</td>
                          <td>Copic</td>

                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_turma" class="btn btn-success no-paddings" title="Editar Suprimento"><i class="fas fa-box"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Suprimento"><i class="fas fa-times"></i></a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>250</td>
                          <td>Bloco A4</td>
                          <td>11111111111</td>
                          <td>Unidade(s)</td>
                          <td>20</td>
                          <td>Canson</td>
                          <td>
                            <div class="btn-group">
                              <a href="home.php?acao=editar_turma" class="btn btn-success no-paddings" title="Editar Suprimento"><i class="fas fa-box"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir Suprimento"><i class="fas fa-times"></i></a>
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
    
     
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



