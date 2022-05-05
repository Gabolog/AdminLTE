<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WEBEA | Teste</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

  <!-- checkbox -->
  <link rel="stylesheet" href="../dist/css/estilo.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <!--<"sidebar-mini layout-fixed layout-navbar-fixed sidebar-closed sidebar-collapse dark-mode">-->
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../dist/img/logo_color.png" alt="EAlogo">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- versão dark<"main-header navbar navbar-expand navbar-dark">-->
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!--superior direito Right navbar links -->
      <ul class="navbar-nav ml-auto btn-group">
        <!-- Navbar Switch -->




        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" title="Usuário">
            <i class="fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user-alt mr-2"></i> Alterar Perfil
              <span class="float-right text-muted text-sm">Thiago Ramos</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Saída
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-cog mr-2"></i> Configurações
            </a>
          </div>
        </li>
        <li class="nav-item">

          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item flex-column flex-sm-row">
          <!-- <div class="material-switch nav-link pull-right">
            <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox">
            <label for="someSwitchOptionPrimary" class="label-primary"></label>
          </div> -->
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </li>
      </ul>
    </nav>
    <!-- /.navbar  navegação superior-->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="home.php?acao=bemvindo" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WEBEA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user1.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="home.php?acao=perfil_usuario" class="d-block">Thiago Ramos</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisa" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <!--tirar o "active" para apagar botão-->
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Escola
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="home.php?acao=alunos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Alunos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="home.php?acao=turmas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Turmas</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="home.php?acao=editar_alunos" class="nav-link">
                <i class="nav-icon fas fa-box-open"></i>
                <p>
                  Suprimentos
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="home.php?acao=editar_alunos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cadastrar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="home.php?acao=editar_alunos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Estoque</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="home.php?acao=editar_alunos" class="nav-link" class="nav-link active">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Relatórios
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="home.php?acao=editar_alunos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <span class="badge badge-info right">2</span>
                    <p>Faturas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="home.php?acao=editar_alunos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <span class="badge badge-info right">4</span>
                    <p>Vendas</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="home.php?acao=editar_alunos" class="nav-link">
                <i class="fas fa-money-bill nav-icon"></i>
                <p>
                  Financeiro
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="home.php?acao=editar_alunos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>PDV</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="home.php?acao=editar_alunos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fluxo de Caixa</p>
                  </a>
              </ul>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>