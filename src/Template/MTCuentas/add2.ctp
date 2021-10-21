<?php $this->assign('title', 'Registrar cuentas'); ?>

	<?= $this->Form->create(@$cuentas, ['class'=>'well']);?>


		<table class="table table-responsive">

			<!--====================== DATOS DE LA CUENTA ==================-->

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DE LA CUENTA BANCARIA</strong></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">N° de Cuenta</span>
					<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '20', 'onKeyPress' => 'return soloNum(event);', 'value' => $cuenta]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Nombre del banco</span>
					<?= $this->Form->select('nombre_banco', [
			    			'Banco de Venezuela, S.A. Banco Universal' => 'Banco de Venezuela, S.A. Banco Universal',
			    			'Banco Agrícola de Venezuela, C.A., Banco Universal, C.A. ' => 'Banco Agrícola de Venezuela, C.A., Banco Universal, C.A.',
			    			'Banco Caroní, C.A. Banco Universal' => 'Banco Caroní, C.A. Banco Universal',
			    			'Banco del Caribe, C.A., Banco Univers' => 'Banco del Caribe, C.A., Banco Univers',
			    			'Banco del Tesoro, C.A. Banco Universal' => 'Banco del Tesoro, C.A. Banco Universal',
			    			'Banco Exterior, C.A. Banco Universal' => 'Banco Exterior, C.A. Banco Universal',
			    			'Banco Internacional de Desarrollo, C.A. Banco Universal' => 'Banco Internacional de Desarrollo, C.A. Banco Universal',
			    			'Banco Nacional de Crédito, C.A. Banco Universal' => 'Banco Nacional de Crédito, C.A. Banco Universal',
			    			'Banco Occidental de Descuento, Banco Universal, C.A.' => 'Banco Occidental de Descuento, Banco Universal, C.A.',
			    			'Banco Provincial, S.A. Banco Universal' => 'Banco Provincial, S.A. Banco Universal ',
			    			'Banesco Banco Universal, C.A.' => 'Banesco Banco Universal, C.A.'],['empty' => '-- Seleccione --',
			    			'class'=> 'form-control', 'label' => false, 'escape' => false, 'id' => 'nombre_banco']); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td style="width: 300px"><div id="" class="input-group">
					<span class="input-group-addon">Fecha de Registro</span>
					<input type="date" name="fecha_apertura" required class = 'form-control' max="<?= date('Y-m-d') ?>">
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<td><div id="" class="input-group">
					<span class="input-group-addon">Representante</span>
					<?= $this->Form->input('representante', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
				</div></td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">C.I. / RIF</span>
					<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'maxlength' => 9]); ?>
				</div></td>
		</table>

	

		<table class="table table-responsive">
			<tr>
				<tbody><div class="form-group">
					<div class="input-group">
						<?= $this->Form->submit('Registrar', ['class'=>'btn btn-default']); ?>
					</div>
				</div></tbody>
			</tr>
		</table>
	
	<?php echo $this->Form->end(); ?>