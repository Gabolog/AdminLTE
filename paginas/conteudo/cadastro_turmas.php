  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastro de Alunos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cadastro de Turmas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
              <form>
<div class="card">
                <div class="card-body">
                  <div class="row">
                    <!--divide um do lado do outro-->
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-2">
                          <!-- select -->
                          <div class="form-group">
                            <label>Curso</label>
                            <select class="form-control">
                              <option>REALISMO</option>
                              <option>CARTOON</option>
                              <option>MANGÁ</option>
                              <option>HQ</option>
                              <option>THE</option>
                              <option>COMUNICAÇÃO VISUAL</option>
                              <option>MODA</option>
                              <option>ESCULTURA</option>
                              <option>PINTURA EM TELA</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="form-group">
                            <label>Turma</label>
                            <select class="form-control">
                              <option>DSQ-01</option>
                              <option>DSQ-02</option>
                              <option>DSQ-03</option>
                              <option>DSQ-04</option>
                              <option>DTQ-01</option>
                              <option>DTQ-02</option>
                              <option>DTQ-03</option>
                              <option>DTQ-04</option>
                              <option>DSX-01</option>
                              <option>DSX-02</option>
                              <option>DSX-03</option>
                              <option>DSA-01</option>
                              <option>DSA-02</option>
                              <option>DSA-03</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="price">Valor da Mensalidade</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><b>R$</b></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Quantia">
                            <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="discount">Valor do Desconto</label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><b>R$</b></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Quantia">
                            <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label>Dia do Vencimento</label>
                          <input type="text" value="Dia" class="form-control" placeholder="Dia do vencimento">
                        </div>
                      </div>
                      <div class="input-group">
                        <textarea class="form-control" name="" id="" cols="20" rows="6" placeholder="Detalhes"></textarea>
                      </div><span class="input-group-prepend"></span></br>
                      <button type="button" class="btn btn-primary">Inserir</button>
                      <div class="card-body p-0">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th style="width: 10px">Curso</th>
                              <th style="width: 250px">Turma</th>
                              <th>Mensalidade</th>
                              <th>Desconto</th>
                              <th>Vencimento</th>
                              <th>Detalhes</th>
                              <th style="width: 40px">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>CARTOON</td>
                              <td>DSX</td>
                              <td>R$280,00</td>
                              <td>R$10,00</td>
                              <td>Dia 10</td>
                              <td>Desconto referente a indicação</td>
                              <td><button type="button" class="btn btn-link no-margins no-paddings"><i class="far fa-times-circle"></i></button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                      <div class="form-group mt-4">
                        <button type="button" class="btn btn-primary">Salvar Cadastro</button>
                      </div>

                      </br>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </section>


    </body>

    </html>