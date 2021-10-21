<?php $this->assign('title', 'Requisicion de Servicios'); ?>

<script type="text/javascript">
	function precarga(){
	    var valor = document.getElementById("id").value;
	    document.getElementById("id_partida").value=valor;
	}
</script>

<div class="well">

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<td></td>
				<th class="text-center">
						<strong> Requisicion de Servicios # <?= $requisicion ?> </strong>
					</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Concepto</span>
					<?= $this->Form->input('concepto', ['type' => 'textarea', 'rows' => '2', 'class'=> 'form-control', 'value' => $data[0]['concepto'], 'label' => false, 'readonly']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Tipo de Personal </span>
					<?= $this->Form->input('id_tipo_personal', ['class'=> 'form-control', 'label' => false, 'value' => $data[0]['tipo_personal_denominacion'], 'readonly']); ?>
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Mes </span>
					<?= $this->Form->input('mes', ['class'=> 'form-control', 'label' => false, 'value' => $data[0]['mes_denominacion'], 'readonly']); ?>	
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Quincena </span>
					<?= $this->Form->input('quincena', ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'value' => $data[0]['quincena_denominacion'], 'readonly']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Html->link('Ir Atrás', ['action' => 'index'], ['class'=> 'btn btn-danger btn-sm']); ?>
				</div>	
			</td>

			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Html->link(__('Editar Requisicion'), ['action' => 'edit', $requisicion], ['class'=>'btn btn-sm btn-default pull-right']) ?>
				</div>	
			</td>
			
			<?php if (@$data[0]['status'] == 2 or @$data[0]['status'] == 3 or @$data[0]['status'] == 4 or @$data[0]['status'] == 5 or @$data[0]['status'] == 6){ ?>
			

			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
					<?= $this->Html->link(__('Eliminar Requisicion'), ['action' => 'delete', $requisicion], ['class'=>'btn btn-sm btn-default pull-right', 'confirm' => 'Seguro que desea eliminar?']) ?>
				</div>	
			</td>
			<?php } ?>
		</tr>
	</table>

</div>

	<?php if (@$data[0]['status'] == 1){ ?>
	    <center>
	    	<p style="color: green"> <strong> REQUISICION DE SERVICIO ELABORADA </strong> </p>
	    </center>
	<?php } ?>



	<table class="table table-responsive" style="width: 80%; position: center; margin-left: 10%; padding: 10px;">
			<thead style="text-align: center;">
		        <tr>
				    <td> Partida </td>
				    <td> Monto </td>
				    <td> Acción </td>
				</tr>
			</thead>

	<?php if (isset($datap) && !empty($datap)){ ?>
	    	<?php foreach($datap as $dat){  ?>

		    	<tr style="text-align: center;">
			        <td> <?= $dat->partida . " -- " . $dat->denominacion_partida; ?> </td>
			        <td> <?= number_format($dat->monto, 2, ',', '.') ?> </td>
				    <td>
				    	<?php
				        	echo $this->Html->link("<i class='fa fa-delete'></i> Eliminar",array('controller' => 'MRRHHRequisicionServicios', 'action' => 'deletep', $dat->id, $requisicion), array('tabindex' => '-1','escape' => false, 'class' => 'btn btn-default btn-sm'));
				        ?> 
				    </td>
		    	</tr>
			    
		    <?php } ?>
	<?php } ?>

	<?php if($data[0]['status'] == 0){ ?>
    <?= $this->Form->create(@$p, array('type' => 'post', 'url' => array('controller' => 'MRRHHRequisicionServicios', 'action' => 'partidas'))) ?>

    	<tr style="text-align: center;">
	        <td> 
				<?= $this->Form->select('id', $partidas, ['empty' => '--Seleccione--', 'id', 'class'=> 'form-control',  'label' => false, 'id' => 'id', 'onchange' => "precarga()"]); ?> 

	        	<?= $this->Form->hidden('id_partida', ['required', 'class'=> 'form-control',  'label' => false, 'id' => 'id_partida']); ?> 

	        	<?= $this->Form->hidden('requisicion', ['required', 'class'=> 'form-control',  'label' => false, 'value' => $requisicion]); ?> 
	        </td>
	        <td>
	        	<?= $this->Form->input('monto', ['type' => 'text', 'class'=> 'moneda form-control', 'required', 'label' => false, 'onkeyup' => 'soloNum(this);']); ?>
	        </td>
		    <td>
		    	<?= $this->Form->button("<i class='fa fa-save'></i> Registrar", ['class'=>'btn btn-default btn-sm pull-right']); ?>
		    </td>
    	</tr>
    <?php echo $this->Form->end();?>
    <?php } ?>

	</table>

	<table>
		<center>
				<?php 
					if($data[0]['status'] == 0){
						echo $this->Html->link('Procesar', ['action' => 'enviar', @$requisicion], ['class'=>'btn btn-sm btn-default', 'confirm' => __('Seguro desea Procesar la Requisicion de Servicio?')]); 
					}else if($data[0]['status'] == 1){
						echo $this->Form->postLink('Revertir', ['action' => 'revertir', @$requisicion], ['confirm' => __('Desea eliminar la Requisicion de Servicio?'), 'class' => 'btn btn-primary btn-sm']);
					}
		    	?>
		    </center>
	</table>