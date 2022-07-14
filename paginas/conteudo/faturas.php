<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Faturas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Faturas</li>
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
              <div class="card-body">
                <div class="">
                  <div class="card-primary row">
                    <div class="card card-body row">
                      <div class="row" style="width: 5;">
                        <div class="form-group ">
                          <label>
                            <select class="form-control">
                              <option label="Janeiro" value="1">Janeiro</option>
                              <option label="Fevereiro" value="2">Fevereiro</option>
                              <option label="Março" value="3">Março</option>
                              <option label="Abril" value="4">Abril</option>
                              <option label="Maio" value="5">Maio</option>
                              <option label="Junho" value="6">Junho</option>
                              <option label="Julho" value="7" selected="selected">Julho</option>
                              <option label="Agosto" value="8">Agosto</option>
                              <option label="Setembro" value="9">Setembro</option>
                              <option label="Outubro" value="10">Outubro</option>
                              <option label="Novembro" value="11">Novembro</option>
                              <option label="Dezembro" value="12">Dezembro</option>
                            </select>
                          </label>
                        </div>
                        <span class=""> / </span>
                        
                          <label>
                            <select class="form-control">
                              <option value="2022">2022</option>
                              <option value="2023">2023</option>
                              <option value="2024">2024</option>
                            </select>
                          </label>
                        
                        <span class=""> pagamentos em </span>
                        
                          <label for="">
                            <select class="form-control" name="" id="">
                              <option label="DINHEIRO" value="1">DINHEIRO</option>
                              <option label="CRÉDITO" value="2">CRÉDITO</option>
                              <option label="DÉBITO" value="3">DÉBITO</option>
                              <option label="DEPÓSITO" value="4">DEPÓSITO</option>
                              <option label="TRANSFERÊNCIA" value="5">TRANSFERÊNCIA</option>
                              <option label="CHEQUE" value="6">CHEQUE</option>
                              <option label="TODOS" value="99" selected="selected">TODOS</option>
                            </select>
                          </label>
                        
                        <span class=""> com status </span>
                        
                          <label for="">
                            <select class="form-control" name="" id="">
                              <option label="EM ABERTO" value="1">EM ABERTO</option>
                              <option label="PAGO" value="2">PAGO</option>
                              <option label="EM ATRASO" value="3">EM ATRASO</option>
                              <option label="PARCIAL" value="4">PARCIAL</option>
                              <option label="EM ATRASO S/ PGTO" value="98">EM ATRASO S/ PGTO
                              </option>
                              <option label="TODOS" value="99" selected="selected">TODOS</option>
                            </select>
                          </label>
                        
                        
                          <a type="button" title="Pesquisar" class="btn btn-app">
                            <i class="fas fa-search"></i>
                            Pesquisar
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-body p-0">
                      </br>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Faturamento Previstos</h3>
                              <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                  <i class="fas fa-sync-alt"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                  <i class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                              </div>
                            </div>
                            <div class="card-body">
                              <h2> R$ 0.00</h2>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Recebimentos(TODOS)</h3>
                              <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                  <i class="fas fa-sync-alt"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                  <i class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                              </div>
                            </div>
                            <div class="card-body">
                              <h2> R$ 0.00</h2>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Ticket Médio Faturamento</h3>
                              <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                  <i class="fas fa-sync-alt"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                  <i class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                              </div>
                            </div>
                            <div class="card-body">
                              <h2> R$ 0.00</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary">
                        <div class="card-body">
                          <span><i class="fas fa-info-circle"></i></span>Os totais de faturamento previsto, recebimentos e ticket médio estão disponíveis apenas na opção de tipo de pgto "TODOS" no campo de filtro acima.
                        </div>
                      </div>
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
                        <div class="form-group col-md">
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

                      <div class="dataTables_info">
                        Mostrando de x até y de z registros
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-responsive table-hover">
                            <thead>
                              <tr>
                                <!-- inicio do table -->

                                <th>Referência</th>
                                <th>Data de Vencimento</th>
                                <th>Aluno</th>
                                <th>Curso</th>
                                <th>Valor Total</th>
                                <th>Desconto</th>
                                <th>Pgtos</th>
                                <th>Status</th>
                                <th>Saldo</th>
                              </tr>

                            </thead>
                            <tbody>
                              <tr>


                                <td>10/2022</td>
                                <td>10/10/2022</td>
                                <td>Evandro teste</td>
                                <td>Realismo</td>
                                <td>R$280,00</td>
                                <td>R$20,00</td>
                                <td>
                                  <small>
                                    <a type="button" 
                                    title="
Pago: R$ 260,00 em DÉBITO 
Data Pgto: 10/10/2022 15:48:51 
Troco: R$ 0,00" class="btn btn-app">
                                      <i class="fas fa-eye"></i>
                                      Visualisar
                                    </a>
                                    <!-- <span class="card card-body">
                                      <strong>Pago: </strong>
                                      R$ 202,50 em
                                      <strong class="">DÉBITO</strong>
                                      <br>
                                      <strong>Data Pgto: </strong>
                                      10/10/2022 15:48:51
                                      <br>
                                      <span class="">
                                        <strong>Troco: </strong>
                                        R$ 0,00
                                      </span> -->

                                  </small>
                                </td>
                                <td>Pago</td>
                                <td>R$0.00</td>
                              </tr>
                            <tbody>
                              <tr>


                                <td>10/2022</td>
                                <td>10/10/2022</td>
                                <td>Felipe teste</td>
                                <td>Cartoon</td>
                                <td>R$280,00</td>
                                <td>R$30,00</td>
                                <td>
                                  <small>
                                  <a type="button" title="
Pago: R$ 250,00 em DÉBITO 
Data Pgto: 10/10/2022 15:48:51 
Troco: R$ 0,00" class="btn btn-app">
<i class="fas fa-eye"></i>
                                      Visualizar
                                    </a>

                                  </small>
                                </td>
                                <td>Pago</td>
                                <td>R$0.00</td>
                              </tr>
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