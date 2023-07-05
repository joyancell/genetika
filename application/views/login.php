<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Penjadwalan Mata Kuliah | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/plugins/iCheck/square/blue.css">
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
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .is-invalid{
      border-color: red;
    }
    .is-invalid:focus{
      border-color: red;
    }.error {
      color: red;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo" style="font-size: 24px;">
    <a href="/"><b>Penjadwalan Mata Kuliah STIKOM Uyelindo Kupang</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login</p>

    <form id="quickForm">
      <div class="form-group has-feedback">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    <a href="<?php echo base_url() ?>admin/lupa-password">Lupa Password</a><br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>admin/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/jquery-validation/additional-methods.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
  $(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      let data = $('#quickForm').serialize();
      $.ajax({
        url: '<?php echo base_url() ?>admin/login',
        type: 'post',
        data: data,
        success: function (argument) {
          alert(argument)
          if (argument != 'Email atau password salah') {
            window.location.href='<?php echo base_url() ?>/dashboard'
          }
        }
      })
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      email: {
        required: "silahkan masukan alamat email",
        email: "alamat email tidak valid"
      },
      password: {
        required: "silahkan masukan password",
        minlength: "password terlalu pendek"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>