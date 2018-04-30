<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FHRL.CO - Let's The Journey Begin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css/agency.min.css')?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="crud">FHRL.CO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto"><!--  -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Website</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Let's Start</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <!-- Mulai -->
        <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
        <!-- div class="row align-items-center" (Tag Center)-->
        <div class="col-md-5">
        <div class="form-group">
        <h2 class="section-heading text-uppercase">Testing CRUD</h2>
        </div>
        <div class="form-group">
        <input class="form-control" id="name" name="nama" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
        <p class="help-block text-danger"></p>
        </div>
        <div class="form-group">
        <input class="form-control" id="name1" name="nama1" type="text" placeholder="Your Name 1*" required data-validation-required-message="Please enter your name.">
        <p class="help-block text-danger"></p>
        </div>
        <div class="form-group">
        <input class="form-control" id="name2" name="nama2" type="text" placeholder="Your Name 2*" required data-validation-required-message="Please enter your name.">
        <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button class="btn btn-default" type="submit">DAFTAR!!</button>
        </div>
        </div>
        <!-- Button Mulai -->
        <!-- div class="col-lg-12 text-center" -->
        <!-- /div -->
        <!-- Button End btn btn-primary btn-xl text-uppercase -->
        </form>
        <!-- Selesai -->
        <!-- Tabel Mulai -->
        <br>
        <br>
        <div class="col-md-8">
        <div class="table-responsive" border="0">          
        <table class="table">
        <thead>
         <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Nama1</th>
             <th>Nama2</th>
             <th>Action</th>
         </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($tb_tescrud as $u) { 
        ?>
         <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->nama1 ?></td>
            <td><?php echo $u->nama2 ?></td>
            <td><?php echo anchor('crud/edit/'.$u->id_crud,'Edit'); ?>&nbsp;||&nbsp;<?php echo anchor('crud/hapus/'.$u->id_crud,'Hapus'); ?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
        <!-- Tabel Selesai -->
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; FHRL.CO 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="http://instagram.com/fachrullahansyari">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/fachrullahansyari">
                  <i class="fa fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url('asset/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?php echo base_url('asset/js/contact_me.js')?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('asset/js/agency.min.js')?>"></script>

  </body>

</html>
