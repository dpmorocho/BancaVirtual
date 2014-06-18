<!DOCTYPE html>
	<link href="<?php echo url::get_template_path();?>css/style.css" rel="stylesheet">


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title><?php echo $data['title'].' - '.SITETITLE;?></title>
    <?php
      if($data['row']){
        foreach ($data['row'] as $row) {
          $id_pin = $row->usr_id;
        }
      }
      if($data['cuenta']){
        foreach ($data['cuenta'] as $row) {
          $id_cuenta = $row->cue_id;
        }
      }
   ?>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo url::get_template_path();?>css/style.css" rel="stylesheet">
    <link href="<?php echo url::get_template_path();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url::get_template_path();?>css/starter-template.css" rel="stylesheet">

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ATM Virtual</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php echo "<li class='active'><a href='".DIR."cuenta/'>Inicio</a></li>"; ?>
            <?php echo "<li><a href='".DIR."cuenta/debito/$id_cuenta'>Debitos</a></li>"; ?>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajustes <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <?php echo "<li><a href='".DIR."cuenta/pin/$id_pin'>Cambiar PIN</a></li>"; ?>
                  <li><a href="http://localhost/usuario/logout">Salir</a></li>
                </ul>
              </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <br><br>