<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | HBN </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link href="<?= base_url('assets/css/session/style.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
<body>
  <div class="login">
      <div class="logo"><img src="<?= base_url('assets/img/login_logo.png'); ?>" class="img-responsive"></div>
      <?php foreach ($this->aauth->get_errors_array() as $error){ ?>
        <div class="alert alert-danger" role="alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $error; ?>
        </div>
      <?php } ?>
      <?php foreach ($this->aauth->get_infos_array() as $info){ ?>
        <div class="alert alert-success" role="alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?= $info; ?>
        </div>
      <?php } ?>
      <form method="POST">
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email address" required>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>    
      </div>
      <div class="form-group">
        <input type="checkbox" name="remember"> <label> Remember me on this pc</label>    
      </div>
      <div class="form-group">
        <input type="submit" name="" value="LOGIN" class="btn login-btn">    
      </div>
      </form>
      <div class="form-group">
        <a href="<?= base_url('/session_controller/forget_password'); ?>">Forget password?</a>
        <span class="signup-link dropdown">
          <a href="#" data-toggle="dropdown">Sign up</a>
          <ul class="dropdown-menu">
            <li><a href="<?= base_url('/families/create/1'); ?>">as family</a></li>
            <li><a href="<?= base_url('/aupairs/create'); ?>">as au-pair</a></li>
            <li><a href="#">as admin</a></li>
          </ul>
        </span>        
      </div>     
  </div>
  <div class="mask"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>