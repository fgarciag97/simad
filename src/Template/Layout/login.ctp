<?php
  $cakeDescription = NOMBRE_SISTEMA . ' - ' . ENTIDAD_FEDERAL;
?>

<!DOCTYPE html>
<html>
  <head>
      <?= $this->Html->charset() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
          <?= $cakeDescription ?>:
          <?= $this->fetch('title') ?>
      </title>
      <?= $this->Html->meta('icon') ?>

      <?= $this->Html->css(['login/login.css', 'generico.css']) ?>

      <?= $this->fetch('meta') ?>
      <?= $this->fetch('css') ?>
  </head>

  <body>
      
    <div id="back">
      <canvas id="canvas" class="canvas-back"></canvas>
      <div class="backRight"></div>
      <div class="backLeft"></div>
    </div>

    <div id="slideBox">
      <div class="topLayer">
        <div class="left">
          <div class="content">
            <h2>INFORMACIÓN</h2>
            <form id="form-signup" method="post" onsubmit="return false;">
              <div class="form-element form-stack">
                <label for="email" class="form-label" style="text-align: justify; text-indent: 40px; font-size: 15px"> SIMAD (Sistema Municipal de Administración) es un sistema que permite procesar datos municipales. Ideal para llevar control del presupuesto base del organismo encargado de distribuir y recaudar medios economicos a nivel municipal. Facilita el registro de todo personal, genera nominas, y cualquier tipo de creditos definidos por la administracion publica. Los montos comprometidos serán llevados bajo formas contables en los cuales arrojará un resumen global de cada movimiento. </label>
                <br>
                <br>
                <label for="email" class="form-label" style="text-align: justify; text-indent: 40px; font-size: 15px"> PARA INICIAR SESIÓN ES NECESARIO SU USUARIO Y CONTRASEÑA OTORGADA POR LOS ADMINISTRADORES.</label>
              </div>

              <div class="form-element form-submit">
                <button id="goLeft" class="signup ">Login</button> 
              </div>
            </form>
          </div>
        </div>
        <div class="right">
          <div class="content">
            <center>
              <?= $this->html->image("logo.jpeg", ['style' => 'width: 50%']) ?>
              <h2 style="font-size: 30px; font-family: cursive;"> 
                <strong>
                  <?= NOMBRE_SISTEMA ?> 
                  <br> 
                  <?= ENTIDAD_FEDERAL ?>
                </strong>
              </h2>
            </center>
              <?= $this->Form->create(null, ['class'=>'form-signin']); ?>
              <div class="form-element form-stack">
                <label for="username-login" class="form-label">Usuario</label>
                <input id="username-login" type="text" name="username" required onkeyup='mayus(this);' autocomplete="off">
              </div>
              <div class="form-element form-stack">
                <label for="password-login" class="form-label">Contraseña</label>
                <input id="password-login" type="password" name="password" required onkeyup='mayus(this);'>
              </div>
              <div class="form-element form-submit">
                 <?= $this->Form->button('Entrar', ['class'=>'login']); ?>
                <a id="goRight" class="login off">Información</a>
              </div>
             <?= $this->Form->end(); ?>
          <?= $this->Flash->render() ?>
          </div>
        </div>
      </div>
    </div>

    <?= $this->Html->script(['https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', 'https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js', 'login/login.js', 'login/login2.js', 'login/login3.js', 'funciones.js']) ?>
    <?= $this->fetch('script') ?>
  </body>