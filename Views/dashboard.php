<?php 
session_start();
if (isset($_SESSION["Usuario"])) {
  //ok
}
else{
  header("location:login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Diskette Games</title>  
  <link rel="stylesheet" href="../assets/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">  
  <link rel="stylesheet" href="../assets/node_modules/jquery-bar-rating/dist/themes/css-stars.css">
  <link rel="stylesheet" href="../assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/supreme.css">
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center aju">
<!--____________________________________________________________________________________________________-->
        
        <h2 class="NameLogo">DISKETTE</h2>
        <img src="../assets/css/images/Logo04.png" class="logo" alt="image">

<!--____________________________________________________________________________________________________-->
        <a class="navbar-brand brand-logo-mini" href="#"><img src="../images/logo-mini.svg" alt="logo"/></a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-stretch">        
        <ul class="navbar-nav navbar-nav-right">                                                               
          <li class="nav-item dropdown">
            <a class="nav-link nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              
              <img src="../assets/css/images/usu.png" alt="image">
              <span class="d-none d-lg-inline">Online °</span>             
              
            </a>          
          </li>
    
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
      </div>
    </nav>
    
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Meu Perfil</span>
                <span class="menu-sub-title">( Suas informações )</span>                
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Meus jogos</span>
                <span class="menu-sub-title">( Seus jogos na diskette )</span>                
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Votações</span>
                <span class="menu-sub-title">( Chance de ganhar um jogo )</span>                  
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Chave Grátis</span>
                <span class="menu-sub-title">( Keys disponíveis )</span>                 
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Patrocínios</span>
                <span class="menu-sub-title">( Nosso time Diskette )</span>                 
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Agenda</span>
                <span class="menu-sub-title">( Próximos eventos )</span>  
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Planejamentos</span>   
                <span class="menu-sub-title">( Futura atualizações )</span>                           
              </a>            
            </li>
          </ul>
         
          <div class="wrapper upgrade-button">
            <!--<a href="#" target="_blank" class="btn btn-lg btn-block purchase-button">Sair</a>-->
            <form method="post" action="../conexao/fecharSession.php"> 
                <input type="submit" class="btn btn-lg btn-block purchase-button" value="Sair" name="">
              </form>
          </div>
        </nav>
        
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
                          <?php 
                            include '../DAO/listaUsuario.php';
                           ?>
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

  <!-- plugins:js -->
  <script src="../assets/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../assets/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/misc.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>