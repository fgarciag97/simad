<?php
  $cakeDescription = 'SISADMI';
?>

<!DOCTYPE html>
<html>
  <head>
      <?= $this->Html->charset() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
          <?= $cakeDescription ?>:
          Error
      </title>
      <?= $this->Html->meta('icon') ?>

      <?= $this->Html->css(['bootstrap.min', 'font-awesome.min', 'ionicons.min', 'AdminLTE.min']) ?>
      <?= $this->Html->script(['jquery-3.4.1.min', 'bootstrap.min']) ?>

      <?= $this->fetch('meta') ?>
      <?= $this->fetch('css') ?>
      <?= $this->fetch('script') ?>
  </head>

  <body class="hold-transition login-page">
      <?= $this->Flash->render() ?>
    
      <div class="login-box">
        <div class="login-logo">
          <b>SISADMI</b><br>Alcaldia de Miranda
        </div>

        <div class="login-box-body">
          <p class="login-box-msg"> <i class="fa fa-warning" style="color: orange"></i> Mantenimiento</p>
          <p class="login-box-msg"> <strong>Espera un momento</strong> </p>
          <p class="login-box-msg"> <strong>El Servicio pronto sera Restaurado.. Actualizacion en curso SISADMI</strong> </p>
          <p class="login-box-msg"> <i class="fa fa-phone" style="color: green"></i> Contacte al Departamento de informática </p>
          <center>
              <?= $this->Html->link(__('Volver Atrás'), 'javascript:history.back()', array('class' => 'btn btn-danger')) ?>
          </center>
        </div>
      </div>
  </body>