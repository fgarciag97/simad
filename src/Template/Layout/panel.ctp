<?php
  $cakeDescription = NOMBRE_SISTEMA . ' - ' . ENTIDAD_FEDERAL;
?> 

<!DOCTYPE html>
<html>
  	<head>
      	<?= $this->Html->charset() ?>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      	<title><?= $cakeDescription ?>:<?= $this->fetch('title') ?></title>
      	<?= $this->Html->meta('icon') ?>

      	<?= $this->Html->css([
      		'panel/foundation.css', 
      		'panel/font-awesome.min.css', 
      		'panel/style.css'
      	]) ?>
      	<?= $this->fetch('meta') ?>
      	<?= $this->fetch('css') ?>
  	</head>


	<body>
		
		<nav class="top-bar" data-topbar role="navigation">
		  <ul class="title-area">

		    <li class="toggle-topbar menu-icon">
		    	<a href="#">
		    		<span>Menu</span>
		    	</a>
		    </li>
		  </ul>

		  <section class="top-bar-section">
		    <ul class="right">
		      <li>
		      	<?= $this->Html->link("<i class='fa fa-sign-out'></i> Cerrar Sesión", ['controller' => 'Login', 'action' => 'logout'], ['tabindex' => '-1','escape' => false, 'confirm' => '¿Seguro desea salir?', 'style' => 'text-decoration: none']) ?>
		      </li>
		    </ul>
		  </section>
		</nav>


		<section class="hero-unit">
		  	<div class="row">
		    	<div class="large-12 columns">

		    		<br>
		    		<div class="row">
					  <div class="large-2 columns">
					  	<?= $this->html->image("logo.jpeg", ['style' => 'width: 100%']) ?>
					  </div>
					  <div class="large-10 columns">
					  	<hgroup>
				        	<h1 style="color: white; text-shadow: 2px 2px 2px black;"><?= NOMBRE_SISTEMA_COMPLETO ?></h1>
				        	<h3 style="color: white; text-shadow: 2px 2px 2px black;"><?= ENTIDAD_FEDERAL ?></h3>
				      	</hgroup>
					  </div>
					</div>

				      		
						    


			      	<ul class="small-block-grid-2 medium-block-grid-3 flip-cards">

			        	<li ontouchstart="this.classList.toggle('hover');" onclick="window.location='/mpresupuesto'">
			          		<div class="large button card-front">
			            		<strong> Presupuesto </strong>
			            		<i class="fa fa-list-alt card-icon"></i>
			          		</div>
			          		<div class="panel card-back">
			            		<i class="fa fa-list-alt"></i>
		            			<div class="hub-info">
			              			<strong style="color: white; "> Módulo de Presupuesto </strong>
			              			<p>Formula y Ejecuta el presupuesto anual de la institución.</p>
			            		</div>
			          		</div>
			        	</li>

			        	<li ontouchstart="this.classList.toggle('hover');" onclick="window.location='/m-r-r-h-h'">
				          	<div class="large button card-front">
				            	<strong> RRHH </strong>
				            	<i class="fa fa-users card-icon"></i>
				          	</div>

				          	<div class="panel card-back">
				            	<i class="fa fa-users card-icon"></i>
				            	<div class="hub-info">
				              		<strong style="color: white"> Módulo de Recursos Humanos </strong>
				              		<p> Maneja Personal y Nominas de la institución.</p>
				            	</div>
				          	</div>
			        	</li>

				        <li ontouchstart="this.classList.toggle('hover');" onclick="window.location='/m-compra'">
				          	<div class="large button card-front">
				            	<strong>Compras</strong>
				            	<i class="fa fa-credit-card card-icon"></i>
				          	</div>

				          	<div class="panel card-back">
				            	<i class="fa fa-credit-card card-icon"></i>
				           	 	<div class="hub-info">
				              		<strong style="color: white"> Módulo de Compras </strong>
				              		<p> Genera ordenes de compra y servicios.</p>
				            	</div>
				          	</div>
				        </li>

				        <li ontouchstart="this.classList.toggle('hover');"  onclick="window.location='/m-ordenamiento'">
				          	<div class="large button card-front">
				            	<strong>Ordenamiento</strong>
				            	<i class="fa fa-book card-icon"></i>
				          	</div>

				          	<div class="panel card-back">
				            	<i class="fa fa-book"></i>
				            	<div class="hub-info">
				              		<strong style="color: white"> Módulo de Ordenamiento </strong>
				              		<p> Compromete todas las ordenes provenientes de Recursos Humanos y Compras.</p>
				            	</div>
				          	</div>
				        </li>

				        <li ontouchstart="this.classList.toggle('hover');" onclick="window.location='/m-tesoreria'">
				          	<div class="large button card-front">
				            	<strong>Tesoreria</strong>
				            	<i class="fa fa-university card-icon"></i>
				          	</div>

				          	<div class="panel card-back">
				            	<i class="fa fa-university card-icon"></i>
				            	<div class="hub-info">
				              		<strong style="color: white"> Módulo de Tesoreria </strong>
				              		<p> Mantiene el control de ingresos y egresos. Realiza transferencias.</p>
			            		</div>
				          	</div>
				        </li>

				        <li ontouchstart="this.classList.toggle('hover');" onclick="window.location='/m-uso-general'">
				          	<div class="large button card-front">
				            	<strong>Configuración</strong>
				            	<i class="fa fa-cog card-icon"></i>
				          	</div>

				          	<div class="panel card-back">
				            	<i class="fa fa-cog card-icon"></i>
				            	<div class="hub-info">
				              		<strong style="color: white"> Módulo de Configuración </strong>
				              		<p> Ajusta todos los parametros del sistema.</p>
				            	</div>
				          	</div>
				        </li>
			      	</ul>
			    </div>
		  	</div>
		</section>
	  	<?= $this->Html->script([
	  		'funciones.js',
	  		'panel/foundation.min.js'
	  	]) ?>
		<?= $this->fetch('script') ?> 
	</body>
</html>