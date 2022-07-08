  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cadastro de Estoque</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Estoque</a></li>
              <li class="breadcrumb-item active">Cadastro de Estoque</li>
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
                <h3 class="card-title">Dados do Estoque</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="row">
                    <!--divide um do lado do outro-->
                    <!-- inicio do seletor -->
                    <div class="form-group col-md-4">
                      <label>Selecione o Produto</label>
                      <select class="form-control tab-empty" aria-placeholder= >
                        <option>Lapis HB</option>
                        <option>Caneta Nankin</option>
                        <option>Bloco de Papel A3</option>
                        <option>Monozero</option>
                        <option>Lapiseira</option>
                        <option>Borracha</option>
                        <option>Apontador Mecanico</option>
                      </select>
                    </div>
                    <!-- fim seletor -->
                    <div class="form-group col-md-4">
                      <label for="studentName">Quantidade da Entrada</label>
                      <input type="TEXT" class="form-control" id="exampleInputEmail1" placeholder="Quantidade">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="studentName">Lote</label>
                      <input type="TEXT" class="form-control" id="exampleInputEmail1" placeholder="Nome do fabricante">
                    </div>
                  </div>
                  <div class="row">
                    <!--divide um do lado do outro-->
                    <div class="form-group col-md-4">
                      <label for="studentName">Cod. de Barras</label>
                      <input type="TEXT" class="form-control" id="exampleInputEmail1" placeholder="Cod. de Barras">
                    </div>
                    <div class="form-group col-md-4">
                      <label>Unidade de Medida</label>
                      <select class="form-control tab-empty" aria-placeholder=>
                        <option>Selecione</option>
                        <option>Unidade(s)</option>
                        <option>Grama(s)</option>
                        <option>Kilo(s)</option>
                        <option>Litro(s)</option>
                        <option>Centímetro(s)</option>
                        <option>Metro(s)</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="studentName">Quantidade da Medida</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Cod. de Barras">
                    </div>
                  </div>
                  <div class="row">
                    <!--divide um do lado do outro-->
                    <div class="form-group col-md-12">
                      <label for="studentName">Descrição</label>
                      <textarea class="form-control"></textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="exampleInputFile">Imagem do Produto</label>
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
          </div>
        </div>
    </section>
  </div>