<?php $this->assign('title', 'Registrar proveedores'); ?>

	<?= $this->Form->create(@$proveedores, ['class'=>'well']);?>


		<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DE LA EMPRESA</strong></th>
					<th></th>
				</tr>
			</thead>
		</table>

		<table class="table table-responsive">
			<tr>
				<td style="width: 150px"><div id="" class="input-group" >
					<span class="input-group-addon">Tipo</span>
					<?= $this->Form->input('letra', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '1', 'Placeholder' => 'J', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);', 'value' => $compra->letra, 'readonly']); ?>
				</div></td>

				<td style="width: 300px"><div id="" class="input-group">
					<span class="input-group-addon">RIF</span>
					<?= $this->Form->input('rif', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '9', 'onKeyPress' => 'return soloNum(event);', 'value' => $compra->rif]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Razon Social</span>
					<?= $this->Form->input('razon_social', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);', 'value' => $compra->razon_social]); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Representante Legal</span>
					<?= $this->Form->input('responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloLetras(event);', 'onkeyup' => 'mayus(this);', 'value' => $compra->responsable]); ?>
				</div></td>
				<td><div id="" class="input-group">
					<span class="input-group-addon">C.I Representante Legal</span>
					<?= $this->Form->input('ci_responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '8', 'onKeyPress' => 'return soloNum(event);', 'value' => $compra->ci_responsable]); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td style="width: 300px"><div id="" class="input-group">
					<span class="input-group-addon">Telefono</span>
					<?= $this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'value' => $compra->telefono]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Actividad Economica</span>
					<?= $this->Form->input('actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);', 'value' => $compra->actividad]); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<td><div id="" class="input-group">
					<span class="input-group-addon">Direccion de Domicilio</span>
					<?= $this->Form->input('direccion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloLetras(event);', 'value' => $compra->direccion]); ?>
				</div></td>
		</table>

		<table class="table table-responsive">
			<tr>
				<td>
					<?= $this->Html->link('Ir Atrás', ['action' => 'view', $compra->letra, $compra->rif], ['class'=> 'btn btn-danger btn-md pull-left']); ?>
				</td>
				<td>
					<?= $this->Form->submit('Actualizar', ['class'=>'btn btn-default btn-md pull-right']); ?>
					
				</td>
			</tr>
		</table></div>
	
	<?php echo $this->Form->end(); ?>