<?php $this->assign('title', 'Ver Personal'); ?>

<div class="well">
	<legend bgcolor="lightblue" style="text-align: center;"> Ver Personal </legend>

	<div id="" class="input-group">
		<span class="input-group-addon">Cedula</span>
		<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'readonly', 'value' => $personal->cedula]); ?>
	</div>

	<br>

	<div id="" class="input-group">
		<span class="input-group-addon">Pago de Vacaciones</span>
		<?= $this->Form->input('pago_vacaciones', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => MONEDA . number_format(@$personal->pago_vacaciones, 2, ',', '.')]); ?>
	</div>

	<br>

	<div id="" class="input-group">
		<span class="input-group-addon">Año</span>
		<?= $this->Form->input('ano', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->ano]); ?>

		<span class="input-group-addon">Mes</span>
		<?= $this->Form->input('mes', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => $personal->mes, 'disabled']); ?>
	</div>

	<br>

	<legend bgcolor="lightblue" style="text-align: center;"> FALTAN MAS CAMPOS </legend>

	<div class="form-group">
	    <div class="input-group">
		    <span class="input-group-btn">
		    	<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-danger']); ?>
		    </span>
		    	<?= $this->Html->link(__('Editar'), ['action' => 'editar', $personal->cedula], ['class'=>'btn btn-success pull-right']) ?>
		    	<?= $this->Html->link(__('Eliminar'), ['controller' => 'MRRHHCalculoVacaciones', 'action' => 'delete', $personal->cedula], ['class' => 'btn btn-danger pull-right']) ?>
	    </div>
	</div>
</div>