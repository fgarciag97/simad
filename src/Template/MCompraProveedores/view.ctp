<?php $this->assign('title', 'Ver Proveedor'); ?>

<div class="well">
	<!-- <legend bgcolor="lightblue" style="text-align: center;"> Ficha de Trabajador</legend> -->

	<table class="table table-responsive">

			<thead>
				<tr>
					<th></th>
					<th class="text-center"><strong>DATOS DEL PROVEEDOR</strong></th>
					<th></th>
					<th></th>
				</tr>
			</thead>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">RIF</span>
					<?= $this->Form->input('rif', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'value' => $compra->rif, 'readonly']); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Razon Social</span>
					<?= $this->Form->input('razon_social', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $compra->razon_social]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Representante Legal</span>
					<?= $this->Form->input('responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'readonly', 'value' => $compra->responsable]); ?>
				</div></td>
				<td><div id="" class="input-group">
					<span class="input-group-addon">C.I Representante Legal</span>
					<?= $this->Form->input('ci_responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'value' => $compra->ci_responsable, 'readonly']); ?>
				</div></td>
			</tr>

			<tr>
				<td><div id="" class="input-group">
					<span class="input-group-addon">Direccion de Domicilio</span>
					<?= $this->Form->input('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'readonly', 'value' => $compra->direccion]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Telefono</span>
					<?= $this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'readonly', 'value' => $compra->telefono]); ?>
				</div></td>

				<td><div id="" class="input-group">
					<span class="input-group-addon">Actividad Economica</span>
					<?= $this->Form->input('actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'readonly', 'value' => $compra->actividad]); ?>
				</div></td>
				<td></td>
			</tr>
		</table>

<!-- --------------------------------------------------------------------------------------->

	<hr>

	<div class="form-group">
	    <div class="input-group pull-left">
		    	<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-danger btn-sm']); ?>

		    	<?php if($compra->estado == 1){ ?>
		    		<?= $this->Html->link(__('Desactivar Proveedor'), ['action' => 'desactivar', $compra->letra, $compra->rif], ['class'=>'btn btn-sm btn-danger']) ;?>
		    	<?php }else{ ?>
		    		<?= $this->Html->link(__('Activar Proveedor'), ['action' => 'activar', $compra->letra, $compra->rif], ['class'=>'btn btn-sm btn-info']) ?>
		    	<?php } ?>
	    </div>

	    <div class="input-group pull-right">

	    	<?= $this->Html->link(__('Eliminar Proveedor'), ['action' => 'delete', $compra->letra, $compra->rif], ['class'=>'btn btn-sm btn-default', 'confirm' => 'Seguro que desea eliminar?']) ;?>

	    	<?= $this->Html->link(__('Editar Proveedor'), ['action' => 'edit', $compra->letra, $compra->rif], ['class'=>'btn btn-sm btn-default']) ;?>
	    </div>


	</div>

	<br><br><br>
</div>