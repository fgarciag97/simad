<?php $this->assign('title', 'Cargar Registros'); ?>

<div class="well">

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Cargar Registros - Cheques sin Cobrar</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>
	

		<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('fecha') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('motivo') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></td>
				    <td> Accion </td>
				</tr>
			</thead>

			<?php foreach ($registros_c as $reg) { ?>
				<tr style="text-align: center;">
					<td><?= $reg['fecha']; ?></td>
					<td><?= $reg['motivo']; ?></td>
					<td><?= number_format($reg['monto'], 2, ',', '.'); ?></td>
					<td>
						<?php
							if(!$status){
								echo $this->Html->Link('Eliminar', ['action' => 'deletec', $reg['id'], $id], ['confirm' => __('Desea eliminar el cheque?'), 'class' => 'btn btn-danger btn-xs']);
							}
						?>
					</td>
				</tr>
			<?php } ?>

			<?php if(!$status){ ?>
				<?= $this->Form->create(@$registro, ['url' => ['action' => 'addc']]);?>
					<tr style="text-align: center;">

						<?= $this->Form->hidden('id_conciliacion', ['required', 'value' => @$id]); ?>

						<td> <input type="date" name="fecha" required value="<?= date('Y-m-d') ?>">  </td>

						<td><?= $this->Form->input('motivo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);']); ?></td>

						<td><?= $this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'form-control moneda', 'required', 'onKeyPress' => 'return soloNum(event);']); ?></td>
						<td>
							<?php
								if(!$status){
									echo $this->Form->submit('Registrar', ['class'=>'btn btn-default btn-xs']);
								}
							?>
						</td>
					</tr>
				<?php echo $this->Form->end(); ?>
			<?php } ?>
			

		</table>
		<br>

	
	<br><br>


	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Cargar Registros - Depositos en Transito</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>


	<table class="table table-responsive">
			<thead style="text-align: center;">
		        <tr>
				    <td><?= $this->Paginator->sort('fecha') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('numero') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('concepto') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('monto') ?> <i class='fa fa-arrow-down'></i></td>
				    <td> Accion </td>
				</tr>
			</thead>

			<?php foreach ($registros_d as $reg) { ?>
				<tr style="text-align: center;">
					<td><?= $reg['fecha']; ?></td>
					<td><?= $reg['numero']; ?></td>
					<td><?= $reg['concepto']; ?></td>
					<td><?= number_format($reg['monto'], 2, ',', '.'); ?></td>
					<td>
						<?php
							if(!$status){
								echo $this->Html->Link('Eliminar', ['action' => 'deleted', $reg['id'], $id], ['confirm' => __('Desea eliminar el cheque?'), 'class' => 'btn btn-danger btn-xs']);
							}
						?>
					</td>
				</tr>
			<?php } ?>

			<?php if(!$status){ ?>
				<?= $this->Form->create(@$registro, ['url' => ['action' => 'addd']]);?>
					<tr style="text-align: center;">

						<?= $this->Form->hidden('id_conciliacion', ['required', 'value' => @$id]); ?>

						<td> <input type="date" name="fecha" required value="<?= date('Y-m-d') ?>">  </td>

						<td><?= $this->Form->input('numero', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onKeyPress' => 'return soloNum(event);']); ?></td>

						<td><?= $this->Form->input('concepto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'value' => 'TRANSFERENCIA EN TRANSITO']); ?></td>

						<td><?= $this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'form-control moneda', 'required', 'onKeyPress' => 'return soloNum(event);']); ?></td>
						<td>
							<?php
								if(!$status){
									echo $this->Form->submit('Registrar', ['class'=>'btn btn-default btn-xs']);
								}
							?>
						</td>
					</tr>
				<?php echo $this->Form->end(); ?>
			<?php } ?>

			

		</table>

		<table class="table table-responsive">
			<tr>

				<td>
					<?= $this->html->link('Atrás', ['action' => 'index'], ['class'=>'btn btn-danger btn-sm pull-left']); ?>
				</td>
				<td>					    	
					<?php
						if(!$status){
							echo $this->html->Link('Finalizar', ['action' => 'procesar', $id],['class'=>'btn btn-default pull-right', 'confirm' => '¿Seguro que desea finalizar?. Esta opción es irreversible y la conciliación será cerrada']);
						}else{
							echo $this->html->Link('Revertir', ['action' => 'revertir', $id],['class'=>'btn btn-info pull-right']);
						}
					?>
				</td>
			</tr>
		</table>



</div>