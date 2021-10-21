<?php $this->assign('title', 'Registros de Cuentas'); ?>

<?= $this->Form->create('MTHaciendaMunicipal', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MTHaciendaMunicipal', 'action' => 'add'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Registro de Transaccion </strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Cuenta Bancaria</span>
					<?= $this->Form->select('banco', @$cuentas, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Numero de Recibo</span>
					<?= $this->Form->input('recibo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon"> Numero de Referencia </span>
					<?= $this->Form->input('referencia', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>
		
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon"> Monto (Debe)</span>
					<?= $this->Form->input('monto_debe', ['type' => 'text', 'label' => false, 'class'=> 'form-control moneda', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

			<td>
				<div id="" class="input-group">
					<span class="input-group-addon"> Monto (Haber)</span>
					<?= $this->Form->input('monto_haber', ['type' => 'text', 'label' => false, 'class'=> 'form-control moneda', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon"> Descripicon</span>
				<?= $this->Form->input('descripcion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?> </div>
			</td>
		</tr>
	</table>

<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Fecha de Documento</span>
					<input type="date" name="fecha_documento" required class = 'form-control' max="<?= date('Y-m-d') ?>">
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Fecha de Pago</span>
					<input type="date" name="fecha_pago" required class = 'form-control' max="<?= date('Y-m-d') ?>">
				</div>
			</td>
		</tr>
	</table>


	<table class="table table-responsive">
		<tr>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right btn-sm']); ?>
				<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-danger btn-sm']); ?>
			</td>

		</tr>
	</table>
<?php echo $this->Form->end();?>