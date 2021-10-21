<?php $this->assign('title', 'Ver Beneciarios'); ?>

<div class="well">
	<!-- <legend bgcolor="lightblue" style="text-align: center;"> Ficha de Trabajador</legend> -->

	<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DEL BENEFICIARIO</strong></th>
					<th></th>
				</tr>
			</thead>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Cedula</span>
					<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'value' => $presupuesto->cedula, 'readonly']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Nombres</span>
					<?= $this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $presupuesto->nombres]); ?>
				</div></td>

			</tr>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Direccion de Domicilio</span>
					<?= $this->Form->input('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'readonly', 'value' => $presupuesto->direccion]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Telefono</span>
					<?= $this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'readonly', 'value' => $presupuesto->telefono]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Actividad Economica</span>
					<?= $this->Form->input('actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'readonly', 'value' => $presupuesto->actividad]); ?>
				</div></td>
			</tr>
		</table>

<!-- --------------------------------------------------------------------------------------->

	<hr>

	<div class="form-group">
	    <div class="input-group pull-left">
		    	<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-danger btn-sm']); ?>

		    	<?php if($presupuesto->estado == 1){ ?>
		    		<?= $this->Html->link(__('Desactivar Beneficiario'), ['action' => 'desactivar', $presupuesto->letra, $presupuesto->cedula], ['class'=>'btn btn-sm btn-danger']) ;?>
		    	<?php }else{ ?>
		    		<?= $this->Html->link(__('Activar Beneficiario'), ['action' => 'activar', $presupuesto->letra, $presupuesto->cedula], ['class'=>'btn btn-sm btn-info']) ?>
		    	<?php } ?>
	    </div>

	    <div class="input-group pull-right">

	    	<?= $this->Html->link(__('Eliminar Beneficiario'), ['action' => 'delete', $presupuesto->letra, $presupuesto->cedula], ['class'=>'btn btn-sm btn-default', 'confirm' => 'Seguro que desea eliminar?']) ;?>

	    	<?= $this->Html->link(__('Editar Beneficiario'), ['action' => 'edit', $presupuesto->letra, $presupuesto->cedula], ['class'=>'btn btn-sm btn-default']) ;?>
	    </div>


	</div>

	<br><br><br>
</div>