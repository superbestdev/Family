<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?> | HBN </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" 
  href="https://cdnjs.cloudflare.com/ajax/libs/smalot-bootstrap-datetimepicker/2.4.3/css/bootstrap-datetimepicker.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Custom CSS -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/schedule/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dropzone/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tablesorter/jquery.tablesorter.pager.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tablesorter/theme.bootstrap.css'); ?>">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php if($this->aauth->is_loggedin()){?>
  <script type="text/javascript">
    window.user_type = '<?= $user_type ?>';
    window.base_url  = '<?= base_url(); ?>';        
  </script>
    <?php if($user_type != 'HBN'){ ?>
      <script type="text/javascript">
        window.user_id   = <?= $user_id ?>;
      </script>
    <?php }
    }?>
</head>
<body>
<?php
  if( isset($register)){
?>
    <div class="register-wrapper">
<?php 
  }else { 
  ?>
  <div id="wrapper" >
<?php } ?>