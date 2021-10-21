<?php $this->assign('title', 'Crear Conciliacion'); ?>

<?= $this->Form->create('MTConciliacionBancoHacienda', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MTConciliacionBancoHacienda', 'action' => 'add'))) ?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Crear Conciliacion Bancaria</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>

			<td>
				<div class="input-group">
					<span class="input-group-addon">Fecha de Inicio</span>
					<input type="date" name="fecha_inicio" required id="fecha_inicio">
				</div>
			</td>

			<td>
				<div class="input-group">
					<span class="input-group-addon">Fecha de Corte</span>
					<input type="date" name="fecha_corte" required id="fecha_corte">
				</div>
			</td>
			<td>
				<div id="" class="input-group">
					<span class="input-group-addon">Cuenta a Conciliar</span>
					<?= $this->Form->select('id_banco', @$nombre_banco, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'id' => 'id_banco']); ?>
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
				<?= $this->Form->input('saldo_libro', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'required', 'id' => 'saldo_libro', 'onKeyPress' => 'return soloNum(event);']); ?>
			</td>

			<td><div id="" class="input-group">
				<span class="input-group-addon"> Saldo Segun Estado de Cuenta </span>
				<?= $this->Form->input('saldo_estado_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'required', 'id' => 'saldo_estado_cuenta', 'onKeyPress' => 'return soloNum(event);']); ?>
			</td>

		</tr>


	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<?= $this->html->link('Atrás', ['action' => 'index'], ['class'=>'btn btn-danger btn-sm pull-left']); ?>
			</td>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default btn-sm pull-right']); ?>
				
			</td>
		</tr>
	</table>
<?php echo $this->Form->end();?>