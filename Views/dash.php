<?php
include '../DAO/acessoLogin.php';
?>
<!DOCTYPE html>
  <html>

    <head>
        <meta charset="UTF-8">      
        <title>Diskette - Dashboard</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/file-upload.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap.css">      
        <link rel="stylesheet" href="../assets/css/font-awesome.css">      
        <link rel="stylesheet" href="../assets/css/main.main.css">      
        <link rel="stylesheet" href="../assets/css/metisMenu.css">    
        <link rel="stylesheet" href="../assets/css/onoffcanvas.css">    
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/novo.css">  
        <link rel="stylesheet" href="../assets/css/supreme.css">  
        <link rel="stylesheet" href="../assets/css/style-switcher.css">
        <link rel="stylesheet/less" type="text/css" href="../assets/css/theme.less">
        <script src="../assets/js/supreme.js"></script>
        <link rel="stylesheet" href="../assets/css/main.css" />   
      </head>

      <body class="">
        <div class="bg-dark dk" id="wrap">
          <div id="top">
            <nav class="navbar navbar-inverse navbar-static-top">
              <div class="container-fluid">                                      
                <header class="navbar-header">                  
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="#" alt=""></a>
                </header>                                                                                              
                <header class="head">
                  <div class="search-bar adjuste">
                    <img class="disketteIMG" src="../assets/css/images/Logo04.png">
                    <h2 class="disketteCHAR">Diskkete</h2>
                  </div>
                  <div class="main-bar">
                    <h3>
                      <i class="fa fa-dashboard"></i>&nbsp;
                      Dashboard
                    </h3>
                  </div>                  
                </header>
              </div>              
            <div id="left">
              <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                  <span class="fa fa-user"></span>
                </div>
                  <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                      <img class="media-object img-thumbnail user-img user" alt="User Picture" src="../assets/css/images/17797.svg">
                      <div align="center" class="nomeUser">Bartolomeu Bisturi</div>
                    </a>                    
                    </script>
                    <form class="form-horizontal">                      
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <label class="file-upload btn btn-primary">
                                    Alterar Foto de Perfil<input type="file" />
                                </label>
                            </div>
                        </div>
                    </form>

                </div>
              </div>              
              <ul id="menu" class="bg-blue dker">
                <li class="nav-header"><h2 class="menuCHAR">Menu de opções</h2></li>
                <li class="nav-divider"></li>
                <li class="">
                  <a href="dashboard.html">
                    <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                  </a>
                </li>
                <li>                    
                  <a href="typography.html">
                  <i class="fa fa-tasks"></i>
                  <span class="link-title">
                    Meus Jogos
                  </span></a>
                </li>
                <li>
                  <a href="maps.html">
                    <i class="fa fa-columns"></i>
                    <span class="link-title">
                      Jogos Free
                    </span>
                  </a>
                </li>
                <li>
                  <a href="chart.html">
                    <i class="fa fa fa-bar-chart-o"></i>
                    <span class="link-title">
                      Enquetes
                    </span>
                  </a>
                </li>
                  <li>
                  <a href="chart.html">
                    <i class="fa fa fa-pencil"></i>
                    <span class="link-title">
                      Planejamentos
                    </span>
                  </a>
                </li>
                <li>
                  <a href="calendar.html">
                    <i class="fa fa-calendar"></i>
                    <span class="link-title">
                      Eventos
                    </span>
                  </a>
                </li>                  
                <li>   
                  <a href="grid.html">
                    <i class="fa fa-table"></i>
                    <span class="link-title">
                      Patrocínios
                    </span>
                  </a>
                </li>
                <li>
                  <a href="blank.html">
                    <i class="fa fa-square-o"></i>
                    <span class="link-title">
                      Perfil
                    </span>
                  </a>
                </li>
                <li class="nav-divider"></li>
                <li>
                  <a href="../conexao/fecharSession.php">
                    <i class="fa fa-sign-in"></i>
                    <span class="link-title">
                      Sair
                    </span>
                  </a>
                </li>                        
              </ul>                  
            </div>                  
          <div id="content">
            <div class="outer">
              <div class="inner bg-light lter">
                <div class="text-center">
                  <ul class="stats_box">
                    <li>
                      <div class="sparkline line_day"></div>
                      <div class="stat_text">
                        <h3>Criar Usuário</h3>Cadastra um novo cliente
                        <span class="percent up"> <i class="fa fa-caret-up">On</i></span>
                      </div>
                    </li>
                    <li>
                      <div class="sparkline line_day"></div>
                      <div class="stat_text">
                        <h3>Apagar Usuário</h3>Apagar usuário existente
                        <span class="percent down">  <i class="fa fa-caret-down">Off</i></span>
                      </div>
                    </li>
                    <li>
                      <div class="sparkline line_day"></div>
                      <div class="stat_text">
                        <h3>Novo Jogo Free</h3>Cadastrar key grátis
                        <span class="percent down">  <i class="fa fa-caret-down">Off</i></span>
                      </div>
                    </li>
                    <li>
                      <div class="sparkline line_day"></div>
                      <div class="stat_text">
                        <h3>Nova Enquete</h3>Cadastrar nova votação
                        <span class="percent down">  <i class="fa fa-caret-down">Off</i></span>
                      </div>
                    </li>
                  </ul>
                  <div class="content-wrapper">
                    <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Informações pessoais </h4>
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>                          
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Nome Tag</th>
                                    <th>CPF</th>
                                    <th>Email</th>
                                    <th>Data de Nascimento</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>?</td>
                                    <td>?</td>
                                    <td>?</td>
                                    <td>?</td>
                                    <td>?</td>
                                    <td>?</td>
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
        </nav>
      </div>
    </div>
  </body>
</html>  