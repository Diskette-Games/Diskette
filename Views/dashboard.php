<?php
include '../conexao/conexao.php';
include '../DAO/acessoLogin.php';
include_once '../DAO/acessoSelectUsuario.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!--<link rel="icon" href="favicon.ico" type="image/x-icon">-->
        <link rel="stylesheet" href="../assets/css/main.css" />   
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Diskette - Dashboard</title>
        <!-- modal inferior -->        
        <script src="../assets/js/javascriptModal.js"></script>
        <!-- fontes jhefferson -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap aleatorio-->
        <link href="../assets/dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- efeitos css -->
        <link href="../assets/dashboard/plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- Animação Css -->
        <link href="../assets/dashboard/plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Chart Css-->
        <link href="../assets/dashboard/plugins/morrisjs/morris.css" rel="stylesheet" />
        <!-- Customização Css -->
        <link href="../assets/dashboard/css/style.css" rel="stylesheet">
        <!-- tema com bootstrap jhefferson -->
        <link href="../assets/dashboard/css/themes/all-themes.css" rel="stylesheet" />
        <!-- Script da modal e meu css -->
        <link rel="stylesheet" href="../assets/css/cssModal.css">
        <script src="../assets/js/jqueryModal.js"></script>        
        <link rel="stylesheet" href="../assets/css/supreme.css">
    </head>
</head>

    <body class="theme-red">
        <!-- Pagina carregar arquivos -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p class="centro">Carregando Seu Salve...</p>
            </div>
        </div>
        <!-- #FIM-->    
        <div class="overlay"></div>    
        <!-- Pesquisar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="Pesquisar Dentro do Site">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #FIM -->
        <!-- Barra do topo -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <div class="search-bar adjuste">
                        <img class="disketteIMG" src="../assets/css/images/Logo04.png">
                        <h2 class="disketteCHAR">Diskette</h2>
                      </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        
                        
                       
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #FIM -->
        <section>    
            <aside id="leftsidebar" class="sidebar">            
                <div class="user-info">
                    <div class="image">
                        <?php if ($sexo == "M") {
                            echo "<img src=\"../assets/dashboard/images/user.png\" width=\"48\" height=\"48\" alt=\"Usuario\" />";
                        }else {
                            echo "<img src=\"../images/faces-clipart/pic-3.png\" width=\"48\" height=\"48\" alt=\"Usuario\" />";
                        } ?>
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nometag; ?></div>
                        <div class="email"><?php echo $email; ?></div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Sobre o Sistema</a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="../conexao/fecharSession.php"><i class="material-icons">input</i>Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>            
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">Barra de Navegação</li>
                        <li class="active">
                            <a href="index.html">
                                <i class="material-icons">home</i>
                                <span>Início</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">face</i>
                                <span>Perfil</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/forms/basic-form-elements.html">Alterar Informações</a>
                                </li>
                                <li>
                                    <a href="pages/forms/advanced-form-elements.html">Alterar Senha</a>
                                </li>                           
                            </ul>
                        </li>
                        <li>
                            <a href="pages/typography.html">
                                <i class="material-icons">videogame_asset</i>
                                <span>Meus Jogos</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/helper-classes.html">
                                <i class="material-icons">layers</i>
                                <span>Jogos Grátis</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="material-icons">broken_image</i>
                                <span>Enquetes</span>
                            </a>                        
                        </li>
                                
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">date_range</i>
                                <span>Calendário</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/ui/alerts.html">Eventos</a>
                                </li>
                                <li>
                                    <a href="pages/ui/animations.html">Planejamentos</a>
                                </li>                            
                            </ul>
                        </li>                    
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">view_list</i>
                                <span>Apoio e Patrocínio</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/tables/normal-tables.html">IPTI</a>
                                </li>
                                <li>
                                    <a href="pages/tables/jquery-datatable.html">Vazio</a>
                                </li>
                                <li>
                                    <a href="pages/tables/editable-table.html">Vazio</a>
                                </li>
                            </ul>
                        </li>                    
                        <li class="header">Siga-nos</li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons col-light-blue">offline_pin</i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="material-icons col-light-blue">offline_pin</i>
                                <span>Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #MFIM -->
                <!-- Rodapé do menu -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2018 <a href="javascript:void(0);">Diskette Games</a>.
                    </div>
                    <div class="version">
                        <b>Version: </b> 1.0
                    </div>
                </div>
                <!-- #FIM -->
            </aside>
            <!-- #FIM -->
            <!-- Lado direito -->
            <aside id="rightsidebar" class="right-sidebar">
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Cores do Menu</a></li>                
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                        <ul class="demo-choose-skin">
                            <li data-theme="red" class="active">
                                <div class="red"></div>
                                <span>Vermelho</span>
                            </li>
                            <li data-theme="pink">
                                <div class="pink"></div>
                                <span>Rosa</span>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                                <span>Lilás</span>
                            </li>
                            <li data-theme="deep-purple">
                                <div class="deep-purple"></div>
                                <span>Lilás Profundo</span>
                            </li>                
                            <li data-theme="blue">
                                <div class="blue"></div>
                                <span>Blue</span>
                            </li>                                            
                            <li data-theme="teal">
                                <div class="teal"></div>
                                <span>Cerceta</span>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                                <span>Verde</span>
                            </li>                        
                            <li data-theme="yellow">
                                <div class="yellow"></div>
                                <span>Amarelo</span>
                            </li>
                            
                            <li data-theme="orange">
                                <div onclick="trocaCor()" class="orange"></div>
                                <span>Laranja</span>
                            </li>
                            <li data-theme="deep-orange">
                                <div class="deep-orange"></div>
                                <span>Laranja Profundo</span>
                            </li>
                            <li data-theme="brown">
                                <div class="brown"></div>
                                <span>Marrom</span>
                            </li>
                            <li data-theme="grey">
                                <div class="grey"></div>
                                <span>Cinza</span>
                            </li>
                        </ul>
                    </div>              
                </div>
            </aside>
            <!-- #FIM -->
        </section>
        <section class="content">
            <div class="container-fluid">            
                <div id="content">
                <div class="outer">
                  <div class="inner bg-light lter">
                    <div class="text-center">
                      <ul class="stats_box">                    
                          <a type="button" data-toggle="modal" data-target="#Create">
                          <?php 
                            //$controle = ($_SESSION['Usuario']['controle_de_restricao']);                                                
                            if ($controle == 1) {
                              echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                        <div class='info-box bg-pink hover-expand-effect'>
                            <div class='icon'>
                                <i class='material-icons'>build</i>
                            </div>
                            <div class='content'>
                                <div class='text'>Controle de Dados</div>                            
                                
                            </div>
                        </div>
                    </div>";
                            }elseif ($controle == 2) {                          
                              echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                        <div class='info-box bg-pink hover-expand-effect'>
                            <div class='icon'>
                                <i class='material-icons'>build</i>
                            </div>
                            <div class='content'>
                                <div class='text'>Controle de Dados</div>
                                <div class=\"number count-to\" data-from=\"0\" data-to=\"1225\" data-speed=\"1000\" data-fresh-interval=\"20\"></div>
                                
                            </div>
                        </div>
                    </div>";
                            }
                           ?>
                           </a>                                           
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">supervisor_account</i>
                                </div>
                                <div class="content">
                                    <div class="text">Perfil</div>                            
                                </div>
                            </div>
                        </div>                                        
                        <a type="button" data-toggle="modal" data-target="#mission">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-light-green hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">forum</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Missões</div>                            
                                    </div>
                                </div>
                            </div>
                        </a>                    
                        <a type="button" data-toggle="modal" data-target="#feedback">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-orange hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">help</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Suporte</div>
                                        <!--<div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>-->
                                    </div>
                                </div>
                            </div>
                          </a>                    
                      </ul>            
                <div class="row clearfix">
                    <!-- tabela de Informações -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Tabela de Dados</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <?php 
                                          if ($controle == 1) {
                                            echo "<ul class=\"dropdown-menu pull-right\">
                                            <li><a href=\"javascript:void(0);\">Pesquisar Por ID</a></li>
                                            <li><a href=\"javascript:void(0);\">Pesquisar Por Nome</a></li>
                                            <li><a href=\"javascript:void(0);\">Pesquisar Por E-mail</a></li>
                                            </ul>";                                    
                                          }else{
                                            echo "<ul class=\"dropdown-menu pull-right\">
                                            <li><a href=\"javascript:void(0);\">Atualizar Página</a></li>
                                            </ul>";  
                                            }
                                        ?>                                    
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos">
                                        <thead>
                                      <tr>                          
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Nome Tag</th>
                                        <th>CPF</th>
                                        <th>Email</th>
                                        <th>Data de Nascimento</th>
                                        <?php 
                                          if ($controle == 1) {
                                            echo "<th>Editar</th>";
                                            echo "<th>Excluir</th>";
                                          }
                                         ?>
                                      </tr>
                                    </thead>
                                        <thead>
                                            <tr>
                                                <?php
                                                  while ($linha = mysqli_fetch_array($todosusuarios)) {
                                                    echo "<tr>";
                                                    echo "<td>".$linha['id_usu']."</td>";
                                                    echo "<td>".$linha['nome_usu']."</td>";
                                                    echo "<td>".$linha['name_tag']."</td>";
                                                    echo "<td>".$linha['cpf']."</td>";
                                                    echo "<td>".$linha['email_usu']."</td>";
                                                    echo "<td>".$linha['data_nascimento']."</td>";
                                                    if ($controle == 1) {
                                                      echo "<td> <a class=\"btn btn-warning warning\" href=\"editarUsuario.php?id_usu=$linha[id_usu]&nome_usu=$linha[nome_usu]&sobrenome=$linha[sobrenome_usu]&nametag=$linha[name_tag]&pais=$linha[pais_usu]&cpf=$linha[cpf]&celular=$linha[celular]&email=$linha[email_usu]&biografia_usu=$linha[biografia_usu]\">Editar</a>";

                                                      echo "<td> <a class=\"btn btn-danger danger\" onclick=\"return confirm('Você tem certeza que deseja apagar o Cliente $linha[nome_usu]?'); \" href=\"../DAO/excluirUsuario.php?id_usu=$linha[id_usu]&nome_usu=$linha[nome_usu]&sobrenome=$linha[sobrenome_usu]&nametag=$linha[name_tag]&pais=$linha[pais_usu]&cpf=$linha[cpf]&celular=$linha[celular]&email=$linha[email_usu]&biografia_usu=$linha[biografia_usu]\">Excluir</a></td>";
                                                    }                                      
                                                  }
                                                ?>
                                            </tr>
                                        </thead>                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
          if ($controle == 1) {
            echo "<div class='container'>  
          <!-- Modal Create-->
          <div class='modal fade' id='Create' role='dialog'>
            <div class='modal-dialog'>   
              <!-- Modal content-->
              <div class='modal-content'>
                <div class='modal-header'>
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
                  <h4 class='modal-title'>Controle os dados</h4>
                </div>
                <div class='modal-body'>
                  <p>Cadastro:</p>
                  <a class='fa fa-desktop' href='create.php'> Cadastrar Usuário</a><br>
                  <a class='fa fa-desktop' href=''> Cadastrar Usuário ADM</a><br>
                  <a class='fa fa-desktop' href=''> Cadastrar Jogo</a><br>
                  <a class='fa fa-desktop' href=''> Cadastrar Nova Enquete</a><br>
                  <a class='fa fa-desktop' href=''> Cadastrar Missão</a><br><br>
                  <p>Edição:</p>
                  <a class='fa fa-desktop' href=''> Editar Usuário</a><br><br>                
                  <p>Exclusão:</p>
                  <a class='fa fa-desktop' href=''> Excluir Usuário</a><br>
                  <a class='fa fa-desktop' href=''> Excluir Jogo</a><br>
                  <a class='fa fa-desktop' href=''> Excluir Enquete</a><br>
                  <a class='fa fa-desktop' href=''> Excluir Missão</a><br>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-primary' data-dismiss='modal'>Voltar</button>
                </div>
              </div>      
            </div>
          </div>      
        </div>";
          }
          if ($controle == 2) {
            echo "<div class='container'>  
          <!-- Modal Create-->
          <div class='modal fade' id='Create' role='dialog'>
            <div class='modal-dialog'>   
              <!-- Modal content-->
              <div class='modal-content'>
                <div class='modal-header'>
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
                  <h4 class='modal-title'>Função Desativada</h4>
                </div>
                <div class='modal-body'>
                  <p>Esta opção só é disponível para usuários administradores!</p>              
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-primary' data-dismiss='modal'>Voltar</button>
                </div>
              </div>      
            </div>
          </div>      
        </div>";
          }
         ?>
        <div class="container">  
          <!-- Modal de missões-->
          <div class="modal fade" id="mission" role="dialog">
            <div class="modal-dialog">    
              <!-- Modal separação-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Missões</h4>
                </div>
                <div class="modal-body">
                  <p>Complete as Missões para ganhar prêmios. </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Voltar</button>
                </div>
              </div>      
            </div>
          </div>  
        </div>
        <div class="container">  
          <!-- Modal de suporte-->
          <div class="modal fade" id="feedback" role="dialog">
            <div class="modal-dialog">    
              <!-- Modal separação-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="adjuste">
                        <img class="disketteIMGsuport" src="../assets/css/images/Logo04.png">
                        <h1 class="disketteCHARsuport">Suporte Diskette Games</h1>
                    </div>            
                </div>
                <form method="post" action="../DAO/email.php">
                <div class="modal-body">
                    <h4>Preencha os campos com seus dados validos, a seguir dê sua dica, opnião ou reclamação, para que possamos melhorar nosso serviço.</h4>
                    <br>
                    <br>              
                    <div>
                        <table>
                            <tr>
                              <th><label>Seu Nome:</label></th>
                              <th><input type="text" name="nomeUsu" required=""></th>
                            </tr>
                            <tr>
                              <th><label>Email:</label></th>
                              <th><input type="email" name="emailUsu" required=""></th>
                            </tr>
                            <tr>
                              <th><label>Senha:</label></th>
                              <th><input type="password" name="senhaUsu" required=""></th>
                            </tr>
                            <tr>
                              <th><label>Assunto Abordado:</label></th>
                              <th><input maxlength="40" type="text" name="assuntoUsu" required=""></th>
                            </tr>                                                                                            
                      </table>
                      <label>Conteúdo do Email:</label>
                      <textarea name="mensagemUsu" required=""></textarea>
                    </div>              
                </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Enviar</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
              </div>      
            </div>
          </div>  
        </div>
        <!-- Jquery  Js -->
            <script src="../assets/dashboard/plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap Js -->
            <script src="../assets/dashboard/plugins/bootstrap/js/bootstrap.js"></script>
            <!-- Plugin Js -->
            <script src="../assets/dashboard/plugins/bootstrap-select/js/bootstrap-select.js"></script>
            <!-- Slimscroll Plugin Js -->
            <script src="../assets/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
            <!-- efeitos Plugin Js -->
            <script src="../assets/dashboard/plugins/node-waves/waves.js"></script>
            <!-- Jquery contador para Plugin Js -->
            <script src="../assets/dashboard/plugins/jquery-countto/jquery.countTo.js"></script>
            <!-- Morris Plugin Js -->
            <script src="../assets/dashboard/plugins/raphael/raphael.min.js"></script>
            <script src="../assets/dashboard/plugins/morrisjs/morris.js"></script>
            <!-- ChartJs funciona bem-->
            <script src="../assets/dashboard/plugins/chartjs/Chart.bundle.js"></script>
            <!-- Sparkline Chart Plugin Js funcionando -->
            <script src="../assets/dashboard/plugins/jquery-sparkline/jquery.sparkline.js"></script>
            <!-- Customizado Js -->
            <script src="../assets/dashboard/js/admin.js"></script>
            <!-- versão demo do Js -->
            <script src="../assets/dashboard/js/demo.js"></script>
    </body>
</html>
