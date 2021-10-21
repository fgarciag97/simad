<?php $this->assign('title', 'Registrar beneficiarioes'); ?>

	<?= $this->Form->create(@$beneficiarioes, ['class'=>'well']);?>


		<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DEL BENEFICIARIO</strong></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td style="width: 150px"><div id="" class="input-group" >
					<span class="input-group-addon">Tipo</span>
					<?= $this->Form->input('letra', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '1', 'Placeholder' => 'J', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);', 'value' => $letra]); ?>
				</div></td>

				<td style="width: 300px"><div id="" class="input-group">
					<span class="input-group-addon">RIF</span>
					<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '9', 'onKeyPress' => 'return soloNum(event);', 'value' => $cedula]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Nombres</span>
					<?= $this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);']); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td style="width: 300px"><div id="" class="input-group">
					<span class="input-group-addon">Telefono</span>
					<?= $this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Actividad Economica</span>
					<?= $this->Form->input('actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);']); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<td><div id="" class="input-group">
					<span class="input-group-addon">Direccion de Domicilio</span>
					<?= $this->Form->input('direccion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);']); ?>
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
		</table></div>
	
	<?php echo $this->Form->end(); ?>