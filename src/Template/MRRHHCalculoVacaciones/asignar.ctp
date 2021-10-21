<?php $this->assign('title', 'Asignacion de Vacaciones'); ?>

	<?= $this->Form->create($vacaciones, ['class'=>'well']);?>

		<legend bgcolor="lightblue" style="text-align: center;"> Asignacion de Vacaciones </legend>
		
		<div id="" class="input-group">
			<span class="input-group-addon">Cedula</span>
			<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'readonly', 'onKeyPress' => 'return soloNum(event);', 'value' => $cedula]); ?>
		</div>

		<br>

		<div id="" class="input-group">
			<span class="input-group-addon">Nombres</span>
			<?= $this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => $personal->nombres]); ?>

			<span class="input-group-addon">Apellidos</span>
			<?= $this->Form->input('apellidos', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'value' => $personal->apellidos]); ?>
		</div>

		<br>

		<div id="" class="input-group">
		<span class="input-group-addon">Pago de Vacaciones</span>
		<?= $this->Form->input('pago_vacaciones', ['label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);']); ?>
		</div>

		<br>

		<div id="" class="input-group">
			<span class="input-group-addon">Año</span>
			<?= $this->Form->input('ano', ['label' => false, 'class'=> 'form-control', 'value' => ANO_FISCAL ,'onKeyPress' => 'return soloNum(event);']); ?>

			<span class="input-group-addon">Mes</span>
			<?= $this->Form->select('mes', $mes, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'required', 'label' => false]); ?>
		</div>

		<br>

		<legend bgcolor="lightblue" style="text-align: center;"> FALTAN MAS CAMPOS </legend>

		<div class="form-group">
		    <div class="input-group">
			    <span class="input-group-btn">
			    	<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-danger']); ?>
			    </span>
			    	<?= $this->Form->submit('Asignar', ['class'=>'btn btn-success pull-right']); ?>
		    </div>
		</div>

	<?php echo $this->Form->end();?>