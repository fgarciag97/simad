<?php $this->assign('title', 'Orden de Compra'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Libro Banco - Tesoreria Municipal</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive" style="width: 40%; position: center; margin-left: 30%;">

		<tr>	
			<td style="width: 100%;">
				<div class="input-group">
					<span class="input-group-addon">Fecha de Inicio</span>
					<input type="date" name="">
				</div>
			</td>

			<td style="width: 100%;">
				<div class="input-group">
					<span class="input-group-addon">Fecha de Corte</span>
					<input type="date" name="">
				</div>
			</td>
			<td style="width: 10%">					    	
					<?= $this->Form->button('Consultar', ['class'=>'btn btn-default pull-right btn-md']); ?>
			</td>
		</tr>
	</table>

	<br>

	<center>
		<div class="container-anuncio">
			 <p class="login-box-msg" style="font-size: 10pt;"> <i class="fa fa-warning" style="color: orange"></i><strong> !IMPORTANTE¡ </strong></p>
			<h4 style="font-size: 10pt;"><small><strong> Para el Reporte de Libro Banco mostramos una consulta de la tabla de los registros "Procesados" en la opcion HACIENDA MUNICIPAL, mostrando tanto en la vista como en el reporte solo aquellos reportes "APROBADOS" <td><button class = "btn btn-success btn-xs"><i class='fa fa-check'></i></button></td></strong>,</small>
				<br>
		</div>
	</center>

	<br>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('fecha') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('tipo') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('deposito') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('descripcion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('debe') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('haber') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('saldo') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('estatus') ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>

			<!-- EJEMPLOS DE REGISTROS -->

			<tr style="text-align: center;">
				<td> 01/01/2001 </td>
				<td> NC </td>
				<td> 0014744 </td>
				<td> Pago de Impuestos de la Constructora por la Mar, C.A </td>
				<td> 5.000.000</td>
				<td> 0.00</td>
				<td> 5.000.000</td>
				<td><button class = "btn btn-success btn-xs"><i class='fa fa-check'></i></button></td>
			</tr>

			<tr style="text-align: center;">
				<td> 01/01/2001 </td>
				<td> NC </td>
				<td> 0014744 </td>
				<td> Pago de Impuestos de la Licoreria Center, C.A </td>
				<td> 10.000.000</td>
				<td> 0.00</td>
				<td> 15.000.000</td>
				<td><button class = "btn btn-success btn-xs"><i class='fa fa-check'></i></button></td>
			</tr>

			<tr style="text-align: center;">
				<td> 01/01/2001 </td>
				<td> NC </td>
				<td> 0014744 </td>
				<td> Pago de Impuestos del Abasto CANDELARIA, C.A </td>
				<td> 15.000.000</td>
				<td> 0.00</td>
				<td> 30.000.000</td>
				<td><button class = "btn btn-success btn-xs"><i class='fa fa-check'></i></button></td>
			</tr>

		</table>
		<br>

	<table class="table-responsive table" style="width: 30%; position: center; margin-left: 75%; padding: 10px;">
			<tr style="text-align: center;">
				<td><?=$this->Html->link("<i class='fa fa-file-pdf-o'> libro Banco </i>",array('action' => 'libroBancoHaciendaMunicipal'), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-md btn-default', 'target' => '_blank')); ?></td>
				
			</tr>
			
		</table>
	</div>