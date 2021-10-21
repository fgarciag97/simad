<?php $this->assign('title', 'Editar registro'); ?>

<?= $this->Form->create($registro, ['class'=>'well']) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong> Editar Conciliacion Bancaria</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Cuenta a Conciliar</span>
					<?= $this->Form->select('id_banco', @$cuentas, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'value' => $registro['id_banco']]); ?>
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Fecha de Documento</span>
					<input type="date" name="fecha_inicio" required class = 'form-control'  value="<?= date_format($registro->fecha_inicio, 'Y-m-d') ?>">
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Fecha de Pago</span>
					<input type="date" name="fecha_corte" required class = 'form-control'  value="<?= date_format($registro->fecha_corte, 'Y-m-d') ?>">
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
				<td><div id="" class="input-group">
				<span class="input-group-addon"> Descripcion (Opcional) </span>
				<?= $this->Form->input('descripcion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
			</td></div>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon"> Saldo Segun Libro </span>
				<?= $this->Form->input('saldo_libro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'required', 'onKeyPress' => 'return soloNum(event);']); ?>
			</td>

			<td><div id="" class="input-group">
				<span class="input-group-addon"> Saldo Segun Estado de Cuenta </span>
				<?= $this->Form->input('saldo_estado_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'required']); ?>
			</td>

		</tr>


	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<?= $this->html->link('Atrás', ['action' => 'index'], ['class'=>'btn btn-danger btn-sm pull-left']); ?>
			</td>
			<td>
				<?= $this->Form->button('Actualizar', ['class'=>'btn btn-success btn-sm pull-right']); ?>
				
			</td>
		</tr>
	</table>
<?php echo $this->Form->end();?>