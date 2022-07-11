  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Estoque</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Estoque</li>
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
                      <a href="home.php?acao=cadastro_estoque" class="btn btn-primary">Cadastrar Estoque</a>
                    </div>
                  </div>
                </div>
                <div class="card-header">

                  <h3 class="card-title">
                    <p class="card-text">Listagem</p>
                  </h3>
                </div>
                <div class="card-body">

                  <!-- começo da tabela -->


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
                    </br>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-responsive table-hover">
                          <thead>
                            <tr>
                              <!-- inicio do table -->

                              <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 10px;">ID</th>

                              <th>Produto/Fabricante</th>
                              <th>Estoque Disponivel</th>
                              <th>Lote</th>
                              <th>Valor de Compra</th>
                              <th>Valor de Venda</th>
                              <th>Data de Entrada</th>

                              <th style="width: 40px">Ação</th>
                            </tr>
                            <script type="text/javascript">
                              function setNewImage() {
                                document.getElementById("img1").src = "../dist/img/user1.png";

                              }

                              function setOldImage() {
                                document.hideElementById("img1").src = "../dist/img/user1.png";
                              }
                            </script>
                          </thead>
                          <tbody>
                            <tr>
                              <td class=""><img id="img1" onmouseover="setNewImage()" onmouseout="setOldImage()" width="125" src="none">
                                
                              </td>
                              <td class=""><img id="img1" onmouseover="none()" onmouseout="setNewImage()" width="125" src="none">
                                <a href="">
                                  <div class="">
                                    img
                                  </div>
                                </a>
                              </td>
                              
                              <td>Taxa de Matricula - EA</td>
                              <td>9999999</td>
                              <td>01/10/2022</td>
                              <td>R$50,00</td>
                              <td>R$50,00</td>
                              <td>01/10/2022</td>


                              <td>
                                <div class="btn-group">
                                  <button type="button" title="Inserção" class="btn btn-default">
                                    <i class="fas fa-arrow-down"></i>
                                  </button>
                                  <button type="button" title="Retirada" class="btn btn-default">
                                    <i class="fas fa-arrow-up"></i>
                                  </button>
                                  <button type="button" title="Movimentação" class="btn btn-default">
                                    <i class="fas fa-list"></i>
                                  </button>
                                </div>
                                <div class="btn-group-center">
                                  <button type="button" title="Editar" class="btn btn-default">
                                    <i class="fas fa-edit"></i>
                                  </button>
                                  <button type="button" title="Desativar" class="btn btn-default">
                                    <i class="fas fa-exclamation"></i>
                                  </button>
                                  <button type="button" title="Excluir" class="btn btn-default">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>111</td>
                              <td>Taxa de Matricula</td>
                              <td>9999999</td>
                              <td>01/10/2022</td>
                              <td>R$50,00</td>
                              <td>R$50,00</td>
                              <td>01/10/2022</td>
                              <td>
                                <div class="btn-group">
                                  <button type="button" title="Inserção" class="btn btn-default">
                                    <i class="fas fa-arrow-down"></i>
                                  </button>
                                  <button type="button" title="Retirada" class="btn btn-default">
                                    <i class="fas fa-arrow-up"></i>
                                  </button>
                                  <button type="button" title="Movimentação" class="btn btn-default">
                                    <i class="fas fa-list"></i>
                                  </button>
                                </div>
                                <div class="btn-group-center">
                                  <button type="button" title="Editar" class="btn btn-default">
                                    <i class="fas fa-edit"></i>
                                  </button>
                                  <button type="button" title="Desativar" class="btn btn-default">
                                    <i class="fas fa-exclamation"></i>
                                  </button>
                                  <button type="button" title="Excluir" class="btn btn-default">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                                <!-- versão div botoes anterior 
                              <div class="btn-group-sm">
                              <a href="home.php?acao=editar_estoque" class="btn-group" title="Retirada"><i class="fas fa-arrow-down"></i></a>
                              <a href="home.php?acao=editar_estoque" class="btn-group" title="Retirada"><i class="fas fa-arrow-down"></i></a>
                              <a href="home.php?acao=editar_estoque" class="btn-group" title="Retirada"><i class="fas fa-arrow-down"></i></a>
                              <a href="home.php?acao=editar_estoque" class="btn btn no-paddings" title="Inserção"><i class="fas fa-arrow-up"></i></a>
                              <a href="home.php?acao=editar_estoque" class="btn btn no-paddings" title="Editar"><i class="fas fa-box"></i></a> 
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir"><i class="fas fa-times"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir"><i class="fas fa-times"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir"><i class="fas fa-times"></i></a>
                              <a href="#" class="btn btn-danger no-paddings" title="Excluir"><i class="fas fa-times"></i></a>
                            </div> -->
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