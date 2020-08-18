<?php
session_start();
if(isset($_SESSION['loginUser'])){
    header('Location: public/views/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Soporte TIC</title>
  <link rel="shortcut icon" href="assets/img/favicon.png" />
  <link rel="stylesheet" href="assets/alertify/css/alertify.css">
  <link rel="stylesheet" href="assets/alertify/css/themes/bootstrap.css">


  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/sp-admin-index.css">

</head>
<body>
  <!-- ///////////////////////////////////////////////////////////////////////////// -->
<!--
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="container-lg d-flex">
          <div class="form-lg m-auto">
            <div class="row mb-2">
              <div class="col-sm-12 text-center">
                <h3><i class="fas fa-bolt mr-2"></i>ELECTROSUR</h3>
                <p>SISTEMA CONTROL DE EQUIPOS</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <form class="user">
                  <div class="form-group">
                    <input id="userlg" name="userlg" type="text" class="form-control" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" required>
                  </div>
                  <div class="form-group">
                    <input type="password" id="passlg" name="passlg" class="form-control"  placeholder="********" pattern="[A-Za-z0-9_-]{1,15}" required>
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <button type="button" id="btnlg" class="btn btn-primary btn-user btn-bloc w-100">
                  <i class="fas fa-sign-in-alt mr-2"></i>Entrar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->


  <!-- ///////////////////////////////////////////////////////////////////////////// -->
<div class="container-fluid pl-0">
  <div class="row">
    <div class="col-sm-8 d-none d-md-block">
      <div class="bg-login"></div>
    </div>
    <div class="col-sm-4">
      <div class="content-lg">
        <div class="form-lg">
          <div class="row">
            <div class="col-sm-12 text-center">
              <p>SISTEMA DE SOPORTE TIC</p>

            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm-12">
              <form class="user text-center">
                <div class="form-group">
                  <input id="userlg" name="userlg" type="text" class="form-control" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" required>
                </div>
                <div class="form-group">
                  <input type="password" id="passlg" name="passlg" class="form-control"  placeholder="Constraseña" pattern="[A-Za-z0-9_-]{1,15}" required>
                </div>
              </form>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-sm-12">
              <button type="button" id="btnlg" class="btn btn-primary btn-user btn-bloc w-100">
                <i class="fas fa-sign-in-alt mr-2"></i>Ingresar
              </button>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-sm-12 text-center">
              <p>Todos los derechos Reservados</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  <!-- ///////////////////////////////////////////////////////////////////////////// -->
  <!-- <section id="body-login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 d-none d-md-block px-0">
          <div class="img-login"></div>
        </div>
        <div class="col-sm-4 px-0">
          <div class="login-content d-flex">
            <div class="form-login m-auto">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <i class="fas fa-home fa-3x"></i>
                  <p>THE TOTY HOUSE</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <form action="" id="form-lg">
                    <input id="userlg" name="userlg" type="text" placeholder="Usuario" class="form-control mb-3" pattern="[A-Za-z0-9_-]{1,15}" required autocomplete="off" autofocus>
                    <input id="passlg" name="passlg" type="password" placeholder="Contraseña" class="form-control mb-3" pattern="[A-Za-z0-9_-]{1,15}" required>
                  </form>
                  <button class="btn btn-info-melody w-100" id="btnlg"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</button>


                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section> -->

  <!-- Bootstrap core JavaScript-->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="assets/js/sb-admin-2.min.js"></script>

 <script src="assets/alertify/alertify.js"></script>
 <script src="assets/js/lguser.js"></script>

</body>
</html>
