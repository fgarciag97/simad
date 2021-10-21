<?php $this->assign('title', 'Orden de Compra'); ?>

<div class="well">
	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Conciliacion Bancaria - Hacienda Municipal</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>
	<?= $this->Form->create('MTConciliacionBancoHacienda', array('type' => 'post', 'url' => array('controller' => 'MTConciliacionBancoHacienda', 'action' => 'index'))) ?>

		<table class="table table-responsive" style="width: 100%; position: center;">

			<tr>
				<td style="width: 100%;">
					<div class="input-group">
						<span class="input-group-addon">Cuenta Bancaria</span>
						<?= $this->Form->select('b', @$nombre_banco, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'escape' => false]); ?>
					</div>
				</td>

				<td style="width: 100%;">
					<div class="input-group">
						<span class="input-group-addon">Fecha de Inicio</span>
						<input type="date" name="d" required>
					</div>
				</td>

				<td style="width: 100%;">
					<div class="input-group">
						<span class="input-group-addon">Fecha de Corte</span>
						<input type="date" name="h" required>
					</div>
				</td>
				<td style="width: 100%;">
					<div class="input-group">
						<?= $this->Form->button('Filtrar', ['class'=>'btn btn-default btn-sm pull-right']); ?>
					</div>
				</td>
			</tr>
		</table>
	<?php echo $this->Form->end();?>

	<br>

	<!-- <center>
		<div class="container-anuncio">
			 <p class="login-box-msg" style="font-size: 10pt;"> <i class="fa fa-warning" style="color: orange"></i><strong> ¡IMPORTANTE! </strong></p>
			<h4 style="font-size: 10pt;"><small><strong> Para el Reporte de Conciliacion Bancaria mostramos una consulta de la tabla de los registros "Procesados" en la opcion HACIENDA MUNICIPAL, mostrando tanto en la vista como en el reporte todos los estatus de los registros"APROBADOS" <td><button class = "btn btn-success btn-xs"><i class='fa fa-check'></i></button> y "PENDIENTES"<button class = "btn btn-primary btn-xs"><i class='fa fa-exclamation-circle'></i></button></strong>,</small>
				<br>
		</div>
	</center>-->

	<br>

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('fecha_inicio') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('fecha_corte') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('nombre_banco') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('saldo_libro') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('saldo_estado_cuenta') ?> <i class='fa fa-arrow-down'></i></td>
				    <td> Diferencia </td>
				    <td><?= $this->Paginator->sort('Estatus') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('Accion') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('Reporte') ?> <i class='fa fa-arrow-down'></i></td>
				</tr>
			</thead>

			<!-- EJEMPLOS DE REGISTROS -->

			<?php if (isset($data) && !empty($data)): 
		    
		    	foreach($data as $reg){ 
			?>

					<tr style="text-align: center;">
						<td> <label><?= date_format($reg->fecha_inicio, "d/m/Y") ?></label></td>
						<td> <label><?= date_format($reg->fecha_corte, "d/m/Y") ?></label></td>
						<td> <label><?= $reg->nombre_banco ?></label></td>
						<td> <?= number_format(@$reg->saldo_libro, 2, ',', '.') ?> </td>
						<td> <?= number_format(@$reg->saldo_estado_cuenta, 2, ',', '.') ?> </td>
						<td> <?= number_format(@$reg->saldo_libro - $reg->saldo_estado_cuenta, 2, ',', '.') ?> </td>
						<td>  
							<?php
								if($reg->status){
									echo "<i style='color: green' class='fa fa-check'></i>";
								}else{
									echo "<i style='color: red' class='fa fa-close'></i>";
								}
							?>
						</td>
						<td>
							<?php
								if($reg->status){
									echo $this->Html->Link("Editar", ['action' => 'edit', $reg->id], ['class' => 'btn btn-primary btn-xs', 'tabindex' => '-1', 'escape' => false]); 
									echo $this->html->Link("<i class='fa fa-eye'></i> Ver", ['action' => 'view', $reg->id],['class'=>'btn btn-primary btn-xs pull-right', 'tabindex' => '-1', 'escape' => false]);
								}else{
									echo $this->Html->Link("Editar", ['action' => 'edit', $reg->id], ['class' => 'btn btn-primary btn-xs', 'tabindex' => '-1', 'escape' => false]); 
									echo $this->html->Link("<i class='fa fa-exclamation-circle'></i> Cargar", ['action' => 'view', $reg->id],['class'=>'btn btn-danger btn-xs pull-right', 'tabindex' => '-1', 'escape' => false]);
									echo $this->Html->Link("Eliminar", ['action' => 'eliminar', $reg->id], ['class' => 'btn btn-danger btn-xs', 'tabindex' => '-1', 'escape' => false]); 
								}
							?>
						</td>
						<td> 
							<?=$this->Html->link("<i class='fa fa-file-pdf-o'></i>",array('action' => 'reporte', $reg->id, "PDF"), array('tabindex' => '-1', 'escape' => false, 'class' => 'btn btn-sm btn-default', 'target' => '_blank')); ?> 
						</td>

						<td>
						</td>

					</tr>

				<?php } 
			 endif; ?>
		</table>
		<br>


		<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>
	    </div>

		<table class="table table-responsive">
			<tr>
				<td>					    	
					<?= $this->html->Link('Generar Conciliacion', ['action' => 'add'],['class'=>'btn btn-default pull-right']); ?>
				</td>
			</tr>
		</table>
	</div>