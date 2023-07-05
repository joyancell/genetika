<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Penjadwalan Mata Pelajaran</title>
  <link rel="shortcut icon" href="">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link href="<?php echo base_url(); ?>admin/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>admin/fontawesome/css/brands.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>admin/fontawesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('admin/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/select2/dist/css/select2.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('admin/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('admin/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/icon.png" />
  <meta name="description" content="Aplikasi penjadwalan mt kuliah Stikom Uyelindo Kupang">
<meta property="og:description" content="Aplikasi penjadwalan mt kuliah Stikom Uyelindo Kupang">
<meta property="og:locale" content="id_ID">
<meta property="og:type" content="website">
<meta property="og:title" content="Penjadwalan Mata Kuliah | Log in">
<meta property="og:url" content="<?php echo base_url() ?>">
<meta property="og:site_name" content="Penjadwalan Mata Kuliah">
<meta property="og:image" content="<?php echo base_url() ?>assets/icon.png">
<meta property="og:image:alt" content="<?php echo base_url() ?>assets/icon.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="1200">

  <link rel="stylesheet" href="<?php echo base_url('admin/dist/css/skins/_all-skins.min.css'); ?>">
  <script type='text/javascript' src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js'); ?>"></script>
  <script type='text/javascript' src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js2/jquery-3.2.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js2/jquery-migrate-1.2.1.min.js'; ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">
    body .frmModalMsg {
      /* new custom width */
      width: 740px;
      /* must be half of the width, minus scrollbar on the left (30px) */
      margin-left: -280px;
    }

    #line-chart {
      height: 300px;
      width: 800px;
      margin: 0px auto;
      margin-top: 1em;
    }

    .brand {
      font-family: georgia, serif;
    }

    .brand .first {
      color: #ccc;
      font-style: italic;
    }

    .brand .second {
      color: #fff;
      font-weight: bold;
    }

    #loading-div-background {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      background: #fff;
      width: 100%;
      height: 100%;
    }

    #loading-div {
      width: 300px;
      height: 150px;
      background-color: #fff;
      border: 5px solid #1468b3;
      text-align: center;
      color: #202020;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -150px;
      margin-top: -100px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }
  </style>



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a class="logo">

        <span class="logo-lg"><b>Penjadwalan</b>MATKUL</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <a class="login-box" style="color: white;">
          <span class="login-logo" style="font-size: 30px;"><img src="<?php echo base_url(); ?>admin/dist/img2/1.png" alt="Logo STIKOM Uyelindo Kupang" style="width: 30px; height: auto; margin-right: 10px;">STIKOM Uyelindo Kupang</span>
        </a>


        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>admin/dist/img/1.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $nama = $this->session->userdata("nama"); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>admin/dist/img/1.png" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $nama; ?>

                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                  <div class="pull-right">
                    <a onclick="return confirm('apakah anda yakin?')" href="<?php echo base_url('dashboard/logout/'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url(); ?>admin/dist/img/1.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $nama = $this->session->userdata("nama"); ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
        if ($aside == 'guru_bar') {
          $guru_bar = 'class = "active menu-open"';
        } else {
          $guru_bar = ' ';
        }

        if ($aside == 'dashboard_bar') {
          $dashboard_bar = 'class = "active menu-open"';
        } else {
          $dashboard_bar = ' ';
        }

        if ($aside == 'matkul_bar') {
          $matkul_bar = 'class = "active menu-open"';
        } else {
          $matkul_bar = ' ';
        }

        if ($aside == 'riwayat_bar') {
          $riwayat_bar = 'class = "active menu-open"';
        } else {
          $riwayat_bar = ' ';
        }

        if ($aside == 'kelas_bar') {
          $kelas_bar = 'class = "active menu-open"';
        } else {
          $kelas_bar = ' ';
        }

        if ($aside == 'jurusan_bar') {
          $jurusan_bar = 'class = "active menu-open"';
        } else {
          $jurusan_bar = ' ';
        }

        if ($aside == 'prodi_bar') {
          $prodi_bar = 'class = "active menu-open"';
        } else {
          $prodi_bar = ' ';
        }

        if ($aside == 'semester_bar') {
          $semester_bar = 'class = "active menu-open"';
        } else {
          $semester_bar = ' ';
        }

        if ($aside == 'tahun_bar') {
          $tahun_bar = 'class = "active menu-open"';
        } else {
          $tahun_bar = ' ';
        }

        if ($aside == 'pengampu_bar') {
          $pengampu_bar = 'class = "active menu-open"';
        } else {
          $pengampu_bar = ' ';
        }

        if ($aside == 'ruang_bar') {
          $ruang_bar = 'class = "active menu-open"';
        } else {
          $ruang_bar = ' ';
        }

        if ($aside == 'jam_bar') {
          $jam_bar = 'class = "active menu-open"';
        } else {
          $jam_bar = ' ';
        }

        if ($aside == 'admin_bar') {
          $admin_bar = 'class = "active menu-open"';
        } else {
          $admin_bar = ' ';
        }

        if ($aside == 'hari_bar') {
          $hari_bar = 'class = "active menu-open"';
        } else {
          $hari_bar = ' ';
        }

        if ($aside == 'wts_bar') {
          $wts_bar = 'class = "active menu-open"';
        } else {
          $wts_bar = ' ';
        }

        if ($aside == 'penjadwalan_bar') {
          $penjadwalan_bar = 'class = "active menu-open"';
        } else {
          $penjadwalan_bar = ' ';
        }
        ?>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li <?php echo $dashboard_bar; ?>>
            <a id="dashboard" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/dashboard/index'); ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>

              </span>
            </a>
          </li>
          <li <?php echo $guru_bar; ?>>
            <a id="guru_bar" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/guru/index'); ?>">
              <i class="fa fa-user"></i> <span>Dosen</span>
            </a>
          </li>
          <li <?php echo $matkul_bar; ?>>
            <a id="matkul_bar" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/mapel/index'); ?>">
              <i class="fas fa-book"></i> <span>Mata Kuliah</span>
            </a>
          </li>
          <li <?php echo $penjadwalan_bar; ?>>
            <a href="<?php echo base_url('index.php/penjadwalan3/index'); ?>">
              <i class="fa fa-list"></i> <span>Penjadwalan</span>
            </a>
          </li>
          <li <?php echo $riwayat_bar; ?>>
            <a href="<?php echo base_url('index.php/riwayat_penjadwalan3/index'); ?>">
              <i class="fa fa-list"></i> <span>Riwayat Penjadwalan</span>
            </a>
          </li>
          <li <?php echo $kelas_bar; ?>>
            <a id="kelas_bar" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/kelas/index'); ?>">
              <i class="fas fa-graduation-cap"></i> <span>Kelas</span>
            </a>
          </li>
          <li <?php echo $prodi_bar; ?>>
            <a id="prodi_bar" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/prodi/index'); ?>">
              <i class="fas fa-graduation-cap"></i>
              <span>Prodi</span>
            </a>
          </li>
          <!-- <li <?php echo $jurusan_bar; ?>>
          <a id="jurusan_bar" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/jurusan/index'); ?>">
            <i class="fas fa-graduation-cap"></i>
            <span>Jurusan</span>
          </a>
        </li> -->
          <li <?php echo $semester_bar; ?>>
            <a id="semester_bar" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/semester/index'); ?>">
              <i class="fas fa-graduation-cap"></i>
              <span>Semester</span>
            </a>
          </li>
          <li <?php echo $tahun_bar; ?>>
            <a id="tahun_bar" onclick="myFunction(this.id)" href="<?php echo base_url('index.php/tahun/tahun_akademik'); ?>">
              <i class="fas fa-calendar"></i>
              <span>Tahun Akademik</span>
            </a>
          </li>
          <li <?php echo $pengampu_bar; ?>>
            <a href="<?php echo base_url('index.php/pengampu/index'); ?>">
              <i class="fas fa-users"></i> <span>Mengajar</span>
            </a>
          </li>
          <li <?php echo $ruang_bar; ?>>
            <a href="<?php echo base_url('index.php/ruang/index'); ?>">
              <i class="fa fa-home"></i> <span>Ruang</span>
            </a>
          </li>
          <li <?php echo $jam_bar; ?>>
            <a href="<?php echo base_url('index.php/jam2/index'); ?>">
              <i class="fa fa-clock"></i> <span>Jam</span>
            </a>
          </li>
          <li <?php echo $hari_bar; ?>>
            <a href="<?php echo base_url('index.php/hari/index'); ?>">
              <i class="fa fa-calendar"></i> <span>Hari</span>
            </a>
          </li>
          <!--
		<li <?php echo $wts_bar; ?>>
          <a   href="<?php echo base_url('index.php/waktu_tidak_bersedia/index'); ?>">
            <i class="fa fa-ban"></i> <span>Waktu Tidak Bersedia</span>
          </a>
        </li>
		-->
          <li>
            <a href="<?php echo base_url('index.php/kromosom/index'); ?>">
              <i class="fa fa-user"></i> <span>Kromosom</span>
            </a>
          </li>
          <li <?php echo $admin_bar; ?>>
            <a href="<?php echo base_url('index.php/admin/index2'); ?>">
              <i class="fa fa-user"></i> <span>Admin</span>
            </a>
          </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <script>



    </script>