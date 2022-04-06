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
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados pessoais</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                            <div class="row"><!--divide um do lado do outro-->
                              <div class="form-group col-md-8">
                                <label for="studentName">Nome do Aluno</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome Completo">                
                              </div>
                              <div class="form-group col-md-4">
                                <label for="studentName">Data de Nascimento</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="00/00/0000">
                              </div>
                            </div>
                            <div class="row"><!--divide um do lado do outro-->
                              <div class="form-group col-md-8">
                                <label for="studentName">Nome do Responsável</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome Completo">                
                              </div>
                              <div class="form-group col-md-4">
                                <label for="studentName">Data de Nascimento</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="00/00/0000">
                              </div>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Aluno Responsável</label>
                            </div>
                            <div class="row"><!--divide um do lado do outro-->
                              <div class="form-group col-md-6">
                                <label for="studentName">CPF</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="111.111.111-11">                
                              </div>
                              <div class="form-group col-md-6">
                                <label for="studentName">RG</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="111.111.111-11">
                              </div>
                            </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Different Styles</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h4>Input</h4>
                <div class="form-group">
                  <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label>
                  <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border">
                </div>
                <div class="form-group">
                  <label for="exampleInputBorderWidth2">Bottom Border only 2px Border <code>.form-control-border.border-width-2</code></label>
                  <input type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder=".form-control-border.border-width-2">
                </div>
                <div class="form-group">
                  <label for="exampleInputRounded0">Flat <code>.rounded-0</code></label>
                  <input type="text" class="form-control rounded-0" id="exampleInputRounded0" placeholder=".rounded-0">
                </div>
                <h4>Custom Select</h4>
                <div class="form-group">
                  <label for="exampleSelectBorder">Bottom Border only <code>.form-control-border</code></label>
                  <select class="custom-select form-control-border" id="exampleSelectBorder">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectBorderWidth2">Bottom Border only <code>.form-control-border.border-width-2</code></label>
                  <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Addon</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <h4>With icons</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                  </div>
                </div>

                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="radio"></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                <h5 class="mt-4 mb-2">With buttons</h5>

                <p>Large: <code>.input-group.input-group-lg</code></p>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="#">Action</a></li>
                      <li class="dropdown-item"><a href="#">Another action</a></li>
                      <li class="dropdown-item"><a href="#">Something else here</a></li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Normal</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Small <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div>
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Different Width</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                      </div>
                    </div>
                  </div>

                  <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                      success</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                      warning</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                      error</label>
                    <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Checkbox checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Checkbox disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Radio</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1" checked>
                          <label class="form-check-label">Radio checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" disabled>
                          <label class="form-check-label">Radio disabled</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Disabled</label>
                        <select class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Select Multiple</label>
                        <select multiple class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Multiple Disabled</label>
                        <select multiple class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Custom Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                          <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                          <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                          <label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input custom-control-input-danger" type="checkbox" id="customCheckbox4" checked>
                          <label for="customCheckbox4" class="custom-control-label">Custom Checkbox with custom color</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="customCheckbox5" checked>
                          <label for="customCheckbox5" class="custom-control-label">Custom Checkbox with custom color outline</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                          <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" disabled>
                          <label for="customRadio3" class="custom-control-label">Custom Radio disabled</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" name="customRadio2" checked>
                          <label for="customRadio4" class="custom-control-label">Custom Radio with custom color</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="radio" id="customRadio5" name="customRadio2">
                          <label for="customRadio5" class="custom-control-label">Custom Radio with custom color outline</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Custom Select</label>
                        <select class="custom-select">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Custom Select Disabled</label>
                        <select class="custom-select" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Custom Select Multiple</label>
                        <select multiple class="custom-select">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Custom Select Multiple Disabled</label>
                        <select multiple class="custom-select" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with custom colors danger/success</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2">Disabled custom switch element</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="customRange1">Custom range</label>
                    <input type="range" class="custom-range" id="customRange1">
                  </div>
                  <div class="form-group">
                    <label for="customRange2">Custom range (custom-range-danger)</label>
                    <input type="range" class="custom-range custom-range-danger" id="customRange2">
                  </div>
                  <div class="form-group">
                    <label for="customRange3">Custom range (custom-range-teal)</label>
                    <input type="range" class="custom-range custom-range-teal" id="customRange3">
                  </div>
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <div id="app">
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <img alt="image" class="w-75 mb-3" src="./style/logo.png"/>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="block m-t-xs font-bold">Thiago Ramos</span>
                                    <span class="text-xs block">Franquia <b class="caret"></b></span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    
                                    <li>
                                        <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> Sair
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="./logout.html" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="mRjHPgrvUWVVAOQ5adc2mVnxsPlqze2FHEG5FKRR">                                </form>
                            </div>
                            <div class="logo-element">
                                EA Web
                            </div>
                        </li>
                                                    <li>
                                <a href="./list-student.html"><i class="fa fa-user fa-lx mr-2" aria-hidden="true"></i> <span class="nav-label">Alunos</span></a>
                            </li>
                                                
                                                    <li>
                                <a href="#"><i class="fa fa-book fa-lx mr-2" aria-hidden="true"></i> <span class="nav-label">Suprimentos</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="./list-supplies.html"><i class="fa fa-plus-square fa-lx mr-3" aria-hidden="true"></i> Cadastro</a></li>
                                    <li><a href="./list-stock.html"><i class="fa fa-archive fa-lx mr-3" aria-hidden="true"></i> Estoque</a></li>
                                </ul>
                            </li>
                        
                                                    <li>
                                <a href="./list-classroom.html"><i class="fa fa-users fa-lx mr-2" aria-hidden="true"></i> <span class="nav-label">Turmas</span>  </a>
                            </li>
                        
                        
                             <li>
                                <a href="#"><i class="fa fa-bar-chart fa-lx mr-3" aria-hidden="true"></i> <span class="nav-label">Relatórios</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="./report-invoices.html"><i class="fa fa-file-text-o fa-lx mr-3" aria-hidden="true"></i> Faturas</a>
                                    </li>
                                    <li>
                                        <a href="./report-sales.html"><i class="fa fa-area-chart fa-lx mr-3" aria-hidden="true"></i> Vendas</a>
                                    </li>
                                </ul>
                            </li>
                        
                                                                                    <li>
                                    <a href="./pdv.html"><i class="fa fa-desktop fa-lx mr-2" aria-hidden="true"></i> <span class="nav-label">PDV</span></a>
                                </li>
                                                    
                                                    <li>
                                <a href="#"><i class="fa fa-money fa-lx mr-2" aria-hidden="true"></i> <span class="nav-label">Financeiro</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="./list-cashier.html"><i class="fa fa-bar-chart fa-lx mr-3" aria-hidden="true"></i> Fluxo de Caixa</a>
                                    </li>
                                </ul>
                            </li>
                                                
                        
                        
                    </ul>
                    
                    <div class="nav-footer">
                            <span class="nav-label">&copy; EA WEB 2022</span>
                    </div>
<!--barra lateral esquerda-->
                </div>
            </nav>
        
            <div id="page-wrapper" class="dashbard-1">
                <div class="row">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary btn-sidebar" href="#"><i class="fa fa-bars"></i> </a>
                            <a class="navbar-brand" href="./index.html">EA</a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <h3 class="m-r-sm welcome-message">UNIDADE TAQUARA</h3>
                            </li>
                            
                            
                        </ul>
                    </nav>
                </div>
                
                <main>

                    
<script src="./js/create-student.js"></script>

<style>
    .hide-printjs {
        width: 0;
        height: 0;
        overflow: hidden;
    }
    #contractPrint {
        width: 21cm;
        height: 29.7cm;
    } 
</style>

<div ng-controller="StudentCreateController" ng-init="init()">

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Cadastro de Novo Aluno</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./home.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="./list-student.html">Alunos</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Cadastro de Novo Aluno</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <div class="row margin-top-10 animated fadeInUp">
        <div class="col-lg-12">
            <form name="studentRegistration">

                <div class="ibox">
                    <div class="ibox-title">
                        <h3 class="m-t-none m-b">Dados Pessoais</h3>
                    </div>
                    <div class="ibox-content">
                        <div class="form-row">

                            <div class="form-group col-md-8">
                                <label for="studentName">Nome do Aluno</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'studentName') }" type="text" ng-model="student.studentName" class="form-control" placeholder="Nome Completo">
                                <small class="text-danger">{{ errors.get('studentName')[0] }}</small>
                            </div>
                
                            <div class="form-group col-md-4">
                                <label for="studentBirthdate">Nascimento</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'studentBirthdate') }" type="text" ng-model="student.studentBirthdate" mask="99/99/9999" class="form-control" placeholder="Data de Nascimento">
                                <small class="text-danger">{{ errors.get('studentBirthdate')[0] }}</small>
                            </div>
                
                        </div>
                    
                        <div class="form-row">
                
                            <div class="form-group col-md-8">
                                <label for="parentName">Nome do Responsável</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'parentName') }" type="text" ng-model="student.parentName" class="form-control" placeholder="Nome Completo">
                                <div><small class="text-danger">{{ errors.get('parentName')[0] }}</small></div>
                                <label class="mt-2"><input type="checkbox" ng-disabled="!student.studentName || !student.studentBirthdate" ng-change="studentIsParent(isParent)" ng-model="isParent" /> Aluno é o próprio responsável</label>
                            </div>
                
                            <div class="form-group col-md-4">
                                <label for="parentBirthdate">Nascimento</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'parentBirthdate') }" type="text" ng-model="student.parentBirthdate" mask="99/99/9999" class="form-control" placeholder="Data de Nascimento">
                                <small class="text-danger">{{ errors.get('parentBirthdate')[0] }}</small>
                            </div>
                
                        </div>
                
                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="cpf">CPF</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'cpf') }" type="text" ng-model="student.cpf" mask="999.999.999-99" mask-Clean="true" class="form-control" placeholder="CPF">
                                <small class="text-danger">{{ errors.get('cpf')[0] }}</small>
                            </div>
                
                            <div class="form-group col-md-6">
                                <label for="rg">RG</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'rg') }" type="text" ng-model="student.rg" maxlength="20" class="form-control" placeholder="RG">
                                <small class="text-danger">{{ errors.get('rg')[0] }}</small>
                            </div>
                    
                        </div>
                    </div>
                </div>
                
                <div class="ibox">
                    <div class="ibox-title">
                        <h3 class="m-t-none m-b">Dados de Endereço</h3>
                    </div>
                    <div class="ibox-content">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="address">Endereço</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'address') }" type="text" ng-model="student.address" class="form-control" placeholder="Endereço">
                                <small class="text-danger">{{ errors.get('address')[0] }}</small>
                            </div>
                
                            <div class="form-group col-md-2">
                                <label for="number">Número</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'number') }" type="text" ng-model="student.number" class="form-control" placeholder="Número">
                                <small class="text-danger">{{ errors.get('number')[0] }}</small>
                            </div>
                        
                            <div class="form-group col-md-4">
                                <label for="complement">Complemento</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'complement') }" type="text" ng-model="student.complement" class="form-control" placeholder="Complemento">
                                <small class="text-danger">{{ errors.get('complement')[0] }}</small>
                            </div>
                    
                        </div>
                
                        <div class="form-row">
                
                            <div class="form-group col-md-4">
                                <label for="district">Bairro</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'district') }" type="text" ng-model="student.district" class="form-control"  placeholder="Bairro">
                                <small class="text-danger">{{ errors.get('district')[0] }}</small>
                            </div>
                
                            <div class="form-group col-md-4">
                                <label for="city">Cidade</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'city') }" type="text" ng-model="student.city" class="form-control" placeholder="Cidade">
                                <small class="text-danger">{{ errors.get('city')[0] }}</small>
                            </div>
                            
                            <div class="form-group col-md-1">
                                <label for="state">Estado</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'state') }" type="text" ng-model="student.state" maxlength=2 class="form-control" placeholder="Estado">
                                <small class="text-danger">{{ errors.get('state')[0] }}</small>
                            </div>
                
                            <div class="form-group col-md-3">
                                <label for="zipCode">CEP</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'zipCode') }" type="text" ng-model="student.zipCode" mask="99999-999" class="form-control" placeholder="CEP">
                                <small class="text-danger">{{ errors.get('zipCode')[0] }}</small>
                            </div>
                        
                        </div>
                    </div>
                </div>
                
                <div class="ibox" ng-class="{ 'invalid-with-border': checkIfHasError(errors, 'contacts') }">
                    <div class="ibox-title">
                        <h3 class="m-t-none m-b">Dados de Contato</h3>
                    </div>
                    <div class="ibox-content">
                        <div ng-show="checkIfHasError(errors, 'contracts')" class="alert alert-danger" role="alert">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> {{ errors.get('contracts')[0] }}
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Telefone / Descrição</label>
                                <div class="input-group">
                                    <input type="text" placeholder="Telefone" class="form-control" ng-model="contact.phoneNumber" mask= "(99) 9?9999-9999">
                                    <input ng-model="contact.phoneDescription" type="text" class="form-control" placeholder="Descrição"> 
                                    <span class="input-group-append"> <button type="button" ng-click="addContact()" class="btn btn-primary">Adicionar</button> </span>
                                </div>
                            </div>

                        </div>
                        
                        <div class="form-row">
                            <table class="footable table table-hover" id="table-main">
                                <thead>
                                    <th width="30%">Telefone</th>
                                    <th width="60%">Descrição</th>
                                    <th width="10%">Ações</th>
                                </thead>
                                
                                <tbody>
                                    <tr ng-if="student.contacts.length > 0" ng-repeat="c in student.contacts">
                                        <td ng-class="{ 'validation-table-td': errors.contacts.$index.phoneNumber }">
                                            {{c.phoneNumber}} <small ng-if="errors.contacts.$index.phoneNumber" class="text-danger">{{ errors.contacts.$index.phoneNumber[0] }}</small>
                                        </td>
                                        <td ng-class="{ 'validation-table-td': errors.contacts.$index.phoneDescription }">
                                            {{c.phoneDescription}} <small ng-if="errors.contacts.$index.phoneDescription" class="text-danger">{{ errors.contacts.$index.phoneDescription[0] }}</small>
                                        </td>
                                        <td><button type="button" ng-click="deletePhone($index)" class="btn btn-link no-margins no-paddings"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></button></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr ng-if="student.contacts.length == 0">
                                        <td class="text-center" colspan="3">Nenhum telefone cadastrado.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input ng-class="{ 'is-invalid': checkIfHasError(errors, 'email') }" ng-model="student.email" type="email" class="form-control" placeholder="Email">
                                <small class="text-danger">{{ errors.get('email')[0] }}</small>
                            </div>

                        </div>

                    </div>
                </div>
                
                <div class="ibox" ng-class="{ 'invalid-with-border': checkIfHasError(errors, 'contracts') }">
                    <div class="ibox-title">
                        <h3 class="m-t-none m-b">Dados Financeiros</h3>
                    </div>
                    <div class="ibox-content">
                        <div ng-show="checkIfHasError(errors, 'contracts')" class="alert alert-danger" role="alert">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> {{ errors.get('contracts')[0] }}
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-2">
                                <label for="course">Curso</label><br/>
                                <select class="form-control m-b" ng-options="course as course.name for course in courses" ng-model="contract.course">
                                    <option value="">Selecione</option>
                                </select>
                            </div>
                
                            <div class="form-group col-md-2">
                                <label for="classroom">Turma</label><br/>
                                <select class="form-control m-b" ng-options='classroom as (classroom.name + " | " + classroom.schedule + " | " + classroom.vacancies + " vaga(s)") for classroom in classrooms' ng-model="contract.classroom">
                                    <option value="">Selecione</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="price">Valor da Mensalidade</label>
                                <input type="text" money-mask money-mask-prepend="R$" ng-model="contract.price" class="form-control" id="price" placeholder="Valor da Mensalidade">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="discount">Valor do Desconto</label>
                                <input type="text" money-mask money-mask-prepend="R$" ng-model="contract.discount" class="form-control" id="discount" placeholder="Valor do Desconto">
                            </div>

                            <div class="form-group col-md-2">
                                <label>Dia do Vencimento</label>
                                <input type="number" ng-model="contract.due" class="form-control" placeholder="Dia do vencimento">
                            </div>
                    
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="condition">Condições</label>
                                <div class="input-group">
                                    <textarea type="text" ng-model="contract.condition" rows="4" class="form-control" placeholder="Condições"></textarea>
                                    <span class="input-group-append"> <button type="button" ng-click="addContract()" class="btn btn-primary">Adicionar</button> </span>
                                </div>
                            </div>
                            
                        </div>

                        <table class="footable table table-hover" id="table-main">
                            <thead>
                                <th>Curso</th>
                                <th>Turma</th>
                                <th>Mensalidade</th>
                                <th>Desconto</th>
                                <th>Dia do Venc.</th>
                                <th>Condições</th>
                                <th>Ações</th>
                            </thead>
                            
                            <tbody>
                                <tr ng-if="student.contracts.length > 0" ng-repeat="c in student.contracts">
                                    <td>
                                        {{ c.course.name | uppercase }} <small class="text-danger">{{ errors.get('contracts.' + $index + '.course.id')[0] }}</small>
                                    </td>
                                    <td>
                                        {{ c.classroom.name | uppercase }} <small class="text-danger">{{ errors.get('contracts.' + $index + '.classroom.id')[0] }}</small>
                                    </td>
                                    <td>
                                        {{ c.price | formatCurrency }} <small class="text-danger">{{ errors.get('contracts.' + $index + '.price')[0] }}</small>
                                    </td>
                                    <td>
                                        {{ c.discount | formatCurrency }}
                                    </td>
                                    <td>
                                        {{ c.due }} <small class="text-danger">{{ errors.get('contracts.' + $index + '.due')[0] }}</small>
                                    </td>
                                    <td>
                                        {{ c.condition | uppercase }}
                                    </td>
                                    <td><button type="button" ng-click="deleteContract($index)" class="btn btn-link no-margins no-paddings"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></button></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr ng-if="student.contracts.length == 0">
                                    <td class="text-center" colspan="6">Nenhum curso cadastrado.</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-group mt-4">
                            <button ng-disabled="btnLoader" ng-click="save(student)" type="submit" class="btn btn-primary"><i ng-show="btnLoader" class="fa fa-cog fa-spin fa-fw"></i> Salvar Cadastro</button>
                        </div>

                        <div class="hide-printjs">
                            <div class="student-contract-print" id="contractPrint">
    <div class="contract-container" ng-repeat="contract in student.contracts">
        <table class="table">
            <thead>
                <tr>
                    <td class="td-nowrap"><img class="logo" src="./images/logo_color.png" alt="Logo"></td>
                    <td colspan="2"><h3>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</h3></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" class="td-text td-text-indent">
                        Pelo presente instrumento particular de contrato de serviço em que são partes, de um lado {{ sessionUser.school.social_name }}, 
                        inscrita no CNPJ  n° {{ sessionUser.school.cnpj }}, estabelecido no endereço {{ sessionUser.school.address }}, n° {{ sessionUser.school.number }}, {{ sessionUser.school.district }} – {{ sessionUser.school.city }} – {{ sessionUser.school.state }}, 
                        CEP {{ sessionUser.school.zip_code }}, atos doravante denominados simplesmente CONTRATADA e de outro lado:
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-text font-bold">
                        Aluno(a):
                    </td>
                </tr>
                <tr class="td-border">
                    <td colspan="3" class="td-top-spacing">
                        <strong>NOME:</strong><br>
                        {{ student.studentName }}
                    </td>
                </tr>
                <tr class="td-border">
                    <td>
                        <strong>NASCIMENTO:</strong><br>
                        {{ student.studentBirthdate }}
                    </td>
                    <td>
                        <strong>TURMA:</strong><br>
                        {{ contract.classroom.name | uppercase }}
                    </td>
                    <td>
                        <strong>HORÁRIO:</strong><br>
                        {{ contract.classroom.schedule }}
                    </td>
                </tr>
                <tr class="td-border">
                    <td>
                        <strong>CURSO:</strong><br>
                        {{ contract.course.name | uppercase }}
                    </td>
                    <td>
                        <strong>MENSALIDADE:</strong><br>
                        {{ contract.price | formatCurrency }}
                    </td>
                    <td>
                        <strong>INÍCIO:</strong><br>
                        {{ today | datetime: 'dd/MM/yyyy' }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-top-spacing td-text font-bold">
                        Responsável Financeiro:
                    </td>
                </tr>
                <tr class="td-border">
                    <td colspan="3" class="td-top-spacing">
                        <strong>NOME:</strong><br>
                        {{ student.parentName }}
                    </td>
                </tr>
                <tr class="td-border">
                    <td>
                        <strong>RG:</strong><br>
                        {{ student.rg }}
                    </td>
                    <td>
                        <strong>CPF:</strong><br>
                        {{ student.cpf }}
                    </td>
                    <td>
                        <strong>NASCIMENTO:</strong><br>
                        {{ student.parentBirthdate }}
                    </td>
                </tr>
                <tr class="td-border">
                    <td colspan="2">
                        <strong>ENDEREÇO:</strong><br>
                        {{ student.address }}, {{ student.number }}, {{ student.complement }}, {{ student.district }}, {{ student.city }} - {{ student.state }}
                    </td>
                    <td>
                        <strong>CEP:</strong><br>
                        {{ student.zipCode }}
                    </td>
                </tr>
                <tr class="td-border">
                    <td colspan="2">
                        <strong>TELEFONES:</strong><br>
                        <span ng-if="student.contacts.length > 0" ng-repeat="contact in student.contacts">
                            {{ contact.phoneNumber }} {{ contact.phoneDescription }}<span ng-if="!$last"> / </span>
                        </span>
                    </td>
                    <td>
                        <strong>EMAIL:</strong><br>
                        {{ student.email }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-top-spacing td-text">
                        doravante denominado(a) simplesmente CONTRATANTE.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Primeira:</strong> A CONTRATADA tem por objetivo a prestação de serviços de treinamento na(s) área(s) de CURSO, 
                        dentro dos padrões propostos pela CONTRATADA, os quais se desenvolvem através de instrução teórica, complementada por acompanhamento 
                        prático, através de profissionais habilitados, realizados através de períodos a cada curso.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Segunda:</strong> O CONTRATANTE após conhecer amplamente o sistema de aprendizado desenvolvido e utilizado pela CONTRATADA, 
                        contrata a sua prestação de serviços para treinamento que terá início na data da matrícula  e que terá duração média/estimada 
                        em 18 meses. O tempo para o aprendizado poderá variar, visto que o cronograma do curso é aplicado de acordo com a 
                        frequência/assiduidade do aluno nas aulas e o desenvolvimento do mesmo diante das técnicas que são aplicadas.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Terceira:</strong> O treinamento ora contratado será realizado no endereço da CONTRATADA, acima citado, ficando 
                        ciente o CONTRATANTE de que neste ato adere a um grupo para o treinamento supramencionado, o qual uma vez constituído tem seus 
                        custos pré-estabelecidos, o que impossibilita a isenção total ou parcial das parcelas devidas e vencidas no caso de desistência.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Quarta:</strong> O valor da mensalidade é o estipulado no formulário acima, conforme o curso selecionado pelo 
                        CONTRATANTE e de acordo com os horários e dias previamente estabelecidos pela CONTRATADA. O pagamento poderá ser feito em dinheiro 
                        ou através de depósito bancário, cartão de crédito, cartão de débito ou cheque. A CONTRATADA não trabalha com pagamento via boleto 
                        bancário e débito em conta.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Quinta:</strong> O vencimento será dia 05 (cinco) e as demais, no mesmo dia para os meses subsequentes.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Primeiro:</strong> O valor de mensalidade poderá sofrer reajuste anual, de forma a reestabelecer seu equilíbrio 
                        econômico e financeiro, calculado de acordo com o índice Geral de Preços de Mercado (IGP-M), mediante aviso prévio aos responsáveis 
                        financeiros.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Segundo:</strong> Ocorrerá à cobrança de multa contratual de 2% (dois por cento) sobre o valor da mensalidade vencida acrescidos de 
                        juros de 0,033% ao dia até a data do efetivo pagamento. O atraso das parcelas também poderá acarretar ao CONTRATANTE a perda do desconto, se houver.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Sexta:</strong> No caso de cancelamento ou interrupção do aprendizado é de inteira responsabilidade do CONTRATANTE comunicar a instituição POR ESCRITO 
                        sobre o cancelamento da matrícula até o último dia vigente do mês calculado de acordo com a data convencionada para o vencimento.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Primeiro:</strong> A comunicação do cancelamento deve ser feita até o dia 4, considerado o último dia do mês vigente, de acordo com a data de vencimento;
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Segundo:</strong> No caso do dia citado no parágrafo anterior cair em feriado, domingo ou data em que a escola esteja fechada por razão de força maior, este dia será 
                        desconsiderado na contagem sendo considerado o dia útil seguinte.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Terceiro:</strong> No caso de cancelamento informado após o dia citado no parágrafo primeiro, ocorrerá uma nova cobrança de mensalidade, visto que inicia um novo 
                        período de mensalidade e a reserva de vaga para o mês subsequente é feita de forma automática caso não haja o comunicado por parte do CONTRATANTE no tempo solicitado.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Quarto:</strong> É de total responsabilidade do CONTRATANTE, informar o cancelamento do aprendizado no período informado pela instituição, caso o mesmo não 
                        seja cumprido, a cobrança ocorrerá automaticamente, pois a instituição entenderá que inicia um novo ciclo de aprendizado, cumprindo a mesma com a reserva da 
                        vaga ao aluno inscrito e a preparação de materiais para evolução do aluno.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Quinto:</strong> O não comparecimento do CONTRATANTE às aulas não o isenta de realizar o pagamento das mensalidades correspondentes aos serviços prestados de acordo 
                        com parágrafo anterior.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Sexto:</strong> Para efetuar a interrupção do aprendizado, todas as mensalidades precisam ser devidamente quitadas, assim como as demais parcelas referentes ao período de 
                        estudo, desde a matrícula até a informação de cancelamento.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Sétimo:</strong> O presente contrato poderá ser rescindido pela contratada, a qualquer momento, ainda que sem motivo relevante, desde que a outra parte seja avisada por 
                        escrito no prazo de 30 dias.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Sétima:</strong> A partir do segundo mês de mensalidades em aberto, poderá a CONTRATADA interromper o processo de aprendizado até que os pagamentos sejam 
                        devidamente regularizados. A falta de pagamento de duas ou mais mensalidades, implicará na perda de vaga na turma escolhida. Sendo de total responsabilidade 
                        da CONTRATANTE, recorrer à instituição com a intenção de negociar os valores em aberto.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Oitava:</strong> O aluno que solicitar a REABERTURA DA MATRÍCULA deverá verificar a disponibilidade do horário desejado na recepção, visto que após o cancelamento, 
                        ocorrerá a perda da vaga na turma desejada.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Único:</strong> Para a reabertura de matrícula, o aluno deverá pagar a taxa de reabertura, referente ao valor de 50% em relação à taxa de matrícula praticada no ato da solicitação, 
                        assim como possíveis débitos referentes a mensalidades anteriores não quitadas antes do cancelamento/interrupção para assim poder dar continuidade ao aprendizado.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Nona:</strong> O CONTRATANTE deverá adquirir todo o material didático necessário ao acompanhamento de cada curso, sendo-lhe vedado reutilizar, sob qualquer forma, bem como fazer uso de cópias ou de 
                        qualquer material que não seja autorizado pela contratada, ficando sujeito, inclusive, às penalidades previstas em lei.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Décima:</strong> No ato, o CONTRATANTE autoriza, sem ônus de qualquer espécie que a CONTRATADA utilize a imagem do aluno e de suas obras para fins de divulgação da CONTRATADA e das suas 
                        atividades, podendo, para tanto, reproduzi-las em qualquer meio de comunicação escrita, falada, televisada, público particular, inclusive internet. 
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Parágrafo Único:</strong> Em hipótese alguma poderá a imagem ser utilizada de maneira contrária aos bons costumes ou ordem pública.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-with-list">
                        <strong>Regulamentos da Escola:</strong><br><br>
                        <ul class="td-list">
                            <li>O aluno que desejar mudar de turma pagará uma taxa de R$ 20,00.</li>
                            <li>O aluno que desejar repor a aula pagará uma taxa de R$ 25,00.</li>
                            <li>O aluno que acumular três faltas sem justificativa poderá perder a vaga n turma podendo ser realocado para uma outra turma caso a contratada precise da vaga, não isentando da responsabilid$
                            <li>Após o término do curso, haverá a emissão de certificado com período de recebimento de 90 dias após a solicitação.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-top-spacing td-paragraph td-text">
                        <strong>Cláusula Décima Primeira:</strong> É dever do CONTRATANTE zelar pelo patrimônio e pelas instalações da CONTRATADA, estando está autorizada desde já, a cobrar do CONTRATANTE, importância 
                        correspondente aos danos causados que este venha a causar no patrimônio (bens, equipamentos, móveis, etc) da CONTRATADA.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Décima Segunda:</strong> As condutas consideradas como ofensivas aos bons costumes e a moral, bem como atividades ilegais são causas que levam a quebra deste contrato e consequente expulsão do 
                        CONTRATANTE sem ressarcimento dos valores cobrados.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        <strong>Cláusula Décima Terceira:</strong> Fica eleito ao foro da Cidade do Rio de Janeiro e nele a central ou o mais próximo da CONTRATADA, como competente para dirimir qualquer conflito que tenha 
                        origem no presente contrato.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-paragraph td-text">
                        E por estarem assim, justos e contratados, as partes firmam o presente contrato, em duas vias de igual teor, justamente com devida testemunha, para que produza os devidos e 
                        regulares efeitos de direito.
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="td-top-spacing td-paragraph td-text">
                        <strong>Observações:</strong><br>
                        <div class="description-line"></div>
                        <div class="description-line"></div>
                        <div class="description-line"></div>
                        <div class="description-line"></div>
                        <div class="description-line"></div>
                    </td>
                </tr>
                <tr class="text-center">
                    <td colspan="3" class="date-section td-paragraph td-text td-capital">
                        <strong>Rio de Janeiro, {{ today | date: "d 'de' MMMM 'de' y" }}</strong>
                    </td>
                </tr>
                <tr class="text-center">
                    <td colspan="3" class="td-paragraph td-text">
                        <div class="signature-section">
                            <div class="signature-line">Esboço Artes Escola de Desenho</div>
                            <div class="signature-line">Responsável Financeiro / Aluno</div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
</div>                        </div>

                    </div>
                </div>
                
            </form>
        </div>
    </div>

</div>


                </main>

            </div>
        </div>
    </div>
</body>   

</html>
