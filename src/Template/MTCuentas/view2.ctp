<?php $this->assign('title', 'Ver Cuentas Bancarias'); ?>

<div class="well">

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
					<?= $this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '20', 'onKeyPress' => 'return soloNum(event);', 'value' => $tesoreria->numero_cuenta, 'readonly']); ?>
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
			    			'class'=> 'form-control', 'label' => false, 'escape' => false, 'id' => 'nombre_banco','value' => $tesoreria->nombre_banco, 'readonly', 'disabled']); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td style="width: 300px"><div id="" class="input-group">
					<span class="input-group-addon">Fecha de Apertura</span>
					<?= $this->Form->input('fecha_apertura', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => date_format(@$tesoreria->fecha_apertura, "d/m/Y")]); ?>
				</div></td>
			</tr>
		</table>

		<table class="table table-responsive">
			<td><div id="" class="input-group">
					<span class="input-group-addon">Representante</span>
					<?= $this->Form->input('representante', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off','value' => $tesoreria->representante, 'readonly']); ?>
				</div></td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">C.I. / RIF</span>
					<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off','value' => $tesoreria->cedula, 'readonly']); ?>
				</div></td>
		</table>


		<div class="input-group pull-left">
		    	<?= $this->Html->link('Ir Atrás', ['action' => 'index2'], ['class'=> 'btn btn-danger btn-sm']); ?>

	    </div>

		<div class="input-group pull-right">

	    	<?= $this->Html->link(__('Eliminar Cuenta'), ['action' => 'delete2', $tesoreria->numero_cuenta], ['class'=>'btn btn-sm btn-default', 'confirm' => 'Seguro que desea eliminar?']) ;?>

	    	<?= $this->Html->link(__('Editar Cuenta'), ['action' => 'edit2', $tesoreria->numero_cuenta], ['class'=>'btn btn-sm btn-default']) ;?>
	    </div>
</div>
