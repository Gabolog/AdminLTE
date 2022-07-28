<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Vendas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Vendas</li>
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
                            <select ng-disabled="dataLoader" class="form-control">
                              <option label="1" value="number:1">1</option>
                              <option label="2" value="number:2">2</option>
                              <option label="3" value="number:3">3</option>
                              <option label="4" value="number:4">4</option>
                              <option label="5" value="number:5">5</option>
                              <option label="6" value="number:6">6</option>
                              <option label="7" value="number:7">7</option>
                              <option label="8" value="number:8">8</option>
                              <option label="9" value="number:9">9</option>
                              <option label="10" value="number:10">10</option>
                              <option label="11" value="number:11">11</option>
                              <option label="12" value="number:12">12</option>
                              <option label="13" value="number:13">13</option>
                              <option label="14" value="number:14">14</option>
                              <option label="15" value="number:15">15</option>
                              <option label="16" value="number:16">16</option>
                              <option label="17" value="number:17">17</option>
                              <option label="18" value="number:18">18</option>
                              <option label="19" value="number:19">19</option>
                              <option label="20" value="number:20">20</option>
                              <option label="21" value="number:21">21</option>
                              <option label="22" value="number:22">22</option>
                              <option label="23" value="number:23">23</option>
                              <option label="24" value="number:24">24</option>
                              <option label="25" value="number:25">25</option>
                              <option label="26" value="number:26">26</option>
                              <option label="27" value="number:27">27</option>
                              <option label="28" value="number:28">28</option>
                              <option label="29" value="number:29">29</option>
                              <option label="30" value="number:30">30</option>
                              <option label="31" value="number:31">31</option>
                              <option label="TODOS" value="string:TODOS" selected="selected">TODOS</option>
                            </select>
                          </label>
                          <span> / </span>
                          <label for="">
                            <select ng-disabled="dataLoader" class="form-control">
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
                          <span> / </span>
                          <label for="">
                            <select ng-disabled="dataLoader" class="form-control">
                              <option label="2020" value="string:2020">2020</option>
                              <option label="2021" value="string:2021">2021</option>
                              <option label="2022" value="string:2022" selected="selected">2022</option>
                              <option label="2023" value="string:2023">2023</option>
                            </select>
                          </label>
                          <span> pgto em </span>
                          <label for="">
                            <select ng-disabled="dataLoader" ng-change="getReport()" class="form-control">
                              <option label="DINHEIRO" value="1">DINHEIRO</option>
                              <option label="CRÉDITO" value="2">CRÉDITO</option>
                              <option label="DÉBITO" value="3">DÉBITO</option>
                              <option label="DEPÓSITO" value="4">DEPÓSITO</option>
                              <option label="TRANSFERÊNCIA" value="5">TRANSFERÊNCIA</option>
                              <option label="CHEQUE" value="6">CHEQUE</option>
                              <option label="DÉBITO E DINHEIRO" value="7">DÉBITO E DINHEIRO</option>
                              <option label="CRÉDITO E DINHEIRO" value="8">CRÉDITO E DINHEIRO</option>
                              <option label="TODOS" value="99" selected="selected">TODOS</option>
                            </select>
                          </label>
                          <button ng-disabled="dataLoader" type="button" class="btn btn-primary" ng-click="getReport()"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!--paragrafo-->
                  <div class="card-body">
                    <div class="card-body p-0">
                      </br>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Total de Vendas (TODOS)(com troco)</h3>
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
                        <div class="col-md-3">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Total Dinheiro (TODOS)(com troco)</h3>
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
                        <div class="col-md-3">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Total Crédito</h3>
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
                        <div class="col-md-3">
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Total Débito</h3>
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
                      <!--paragrafo-->
                      <div class="card card-primary">
                        <div class="card-body">
                          <span><i class="fas fa-info-circle"></i></span>Os totais de faturamento previsto, recebimentos e ticket médio estão disponíveis apenas na opção de tipo de pgto "TODOS" no campo de filtro acima.
                        </div>
                      </div>

                      </br>
                      <!--paragrafo-->
                      <div class="row ">
                        <div class="form-group ">
                          <label>
                            <select class="form-control">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select>
                          </label>


                          <span>
                            por página
                          </span>


                          <label>
                            <input type="search" class="form-control form-control-sm" placeholder="Pesquisar..." aria-controls="DataTables_Table_0">
                          </label>

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
                      <!--paragrafo-->
                      <div class="dataTables_info">
                        Mostrando de x até y de z registros
                      </div>
                      <!--paragrafo-->
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-responsive table-hover">
                            <thead>
                              <tr>
                                <!-- inicio do table -->

                                <th>Data da Venda</th>
                                <th>Tipo</th>
                                <th>Cartão B.</th>
                                <th>V. Total</th>
                                <th>V. Dinheiro</th>
                                <th>V. Cartão</th>
                                <th>Troco</th>
                                <th>Desconto</th>
                                <th>Estorno</th>
                                <th>Usuário</th>
                              </tr>
                              
                            </thead>
                            <tbody>
                              <tr>
                                
                                <th>10/10/2022 10:10:50</th>
                                <th>DINHEIRO</th>
                                <th>-</th>
                                <th>r$ 10,00</th>
                                <th>r$ 10,00</th>
                                
                                <th>-</th>
                                <th>-</th>
                                <th>-</th>
                                <th>NÃO</th>
                                <th>Felipe Teste</th>
                                
                                
                                
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

                                  
                                
                              </tr>
                            <tbody>
                            <tr>
                                
                                <th>10/10/2022 10:10:50</th>
                                <th>DINHEIRO</th>
                                <th>-</th>
                                <th>r$ 10,00</th>
                                <th>r$ 10,00</th>
                                
                                <th>-</th>
                                <th>-</th>
                                <th>-</th>
                                <th>NÃO</th>
                                <th>Felipe Teste</th>
                                
                                
                                
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