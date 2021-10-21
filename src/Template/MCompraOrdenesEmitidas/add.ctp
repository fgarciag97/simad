<?php $this->assign('title', 'Orden de Compra'); ?>

<?= $this->Form->create('MCompraOrdenesEmitidas', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MCompraOrdenesEmitidas', 'action' => 'add'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Crear Orden de Compra</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Proveedor</span>
					<?= $this->Form->select('proveedor', @$proveedores, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
				<td><div id="" class="input-group">
				<span class="input-group-addon">La Ordena</span>
				<?= $this->Form->input('descripcion_ordena', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>
<?php echo $this->Form->end();?>