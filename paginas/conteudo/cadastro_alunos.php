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
              <li class="breadcrumb-item active">Cadastro de alunos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados pessoais</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="row">
                    <!--divide um do lado do outro-->
                    <div class="form-group col-md-8">
                      <label for="studentName">Nome do Aluno</label>
                      <input type="TEXT" class="form-control" id="exampleInputEmail1" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="studentName">Data de Nascimento</label>
                      <input type="DATE" class="form-control" id="exampleInputEmail1" placeholder="00/00/0000">
                    </div>
                  </div>
                  <div class="row">
                    <!--divide um do lado do outro-->
                    <div class="form-group col-md-8">
                      <label for="studentName">Nome do Responsável</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="studentName">Data de Nascimento</label>
                      <input type="DATE" class="form-control" id="exampleInputEmail1" placeholder="00/00/0000">
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Aluno Responsável</label>
                  </div>
                  <div class="row">
                    <!--divide um do lado do outro-->
                    <div class="form-group col-md-6">
                      <label for="studentName">CPF</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="111.111.111-11">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="studentName">RG</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="111.111.111-11">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Foto Aluno</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampelInputFIle">
                          <label class="custom-file-label" for="exampleInputFile">Escolher Imagem</label>
                        </div>                     
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>


            <!-- /.card-body1 -->

            <form>
              <div>
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Dados de Endereço</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <!--divide um do lado do outro-->
                      <div class="form-group col-md-6">
                        <label for="studentName">Endereço</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Endereço">
                      </div>
                      <div class="form-group col-md-1">
                        <label for="studentName">Numero</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="111">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="studentName">Complemento</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Complemento">
                      </div>
                    </div>
                    <div class="row">
                      <!--divide um do lado do outro-->
                      <div class="form-group col-md-4">
                        <label for="studentName">Bairro</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bairro">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="studentName">Cidade</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cidade">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="studentName">Estado</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Estado">
                      </div>
                    </div>
                  </div>
                </div>
            </form>


            <!-- /.card-body -->






            <!-- /.card -->
            <form>
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Dados de Contato</h3>
                </div>

                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="email">Telefone / Descrição / Email</label>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="(00)00000-0000">
                        <input type="text" class="form-control" placeholder="Descrição">
                        <input type="text" class="form-control" placeholder="demonstrar@mail.com">
                        <span class="input-group-append"> <button type="button" class="btn btn-primary">Adicionar</button></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-header">
                    <h3 class="card-title"></h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th style="width: 250px">Telefone</th>
                          <th>Descrição</th>
                          <th>Email</th>
                          <th style="width: 40px">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>(xx)xxxxx-xxxx</td>
                          <td>Celular aluno</td>
                          <td>alunoteste@mail.com</td>
                          <td><button type="button" class="btn btn-link no-margins no-paddings"><i class="far fa-times-circle"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </form>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados Financeiros</h3>
              </div>
              <form>

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


    </body>

    </html>