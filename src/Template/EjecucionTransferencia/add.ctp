<?php $this->assign('title', 'Requisicion - Transferencia'); ?>

<?= $this->Form->create('EjecucionTransferencia', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'EjecucionTransferencia', 'action' => 'add'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Crear Requisicion - Transferencia</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Beneficiario</span>
					<?= $this->Form->select('beneficiario', @$beneficiarios, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required']); ?>
				</div>
			</td>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Fecha</span>
					<input type="date" name="fecha" required>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
				<td><div id="" class="input-group">
				<span class="input-group-addon">Descripcion</span>
				<?= $this->Form->input('descripcion_ordena', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
		    	<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-danger btn-sm']); ?>
		    </td>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>
<?php echo $this->Form->end();?>