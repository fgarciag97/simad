<?php $this->assign('title', 'Requisicion de Servicios'); ?>

<?= $this->Form->create(@$servicios, array('class'=>'well')) ?>

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
					<?= $this->Form->input('concepto', ['type' => 'textarea', 'rows' => '2', 'class'=> 'form-control', 'required', 'label' => false, 'value' => $servicios->concepto, 'onkeyup' => 'mayus(this);']); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Tipo de Personal <strong>(Opcional)</strong></span>
					<?= $this->Form->select('id_tipo_personal', $tipo_personal, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'value' => $servicios->id_tipo_personal]); ?>
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Mes <strong>(Opcional)</strong></span>
					<?= $this->Form->select('mes', $mes, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'value' => $servicios->mes]); ?>	
				</div>
			</td>

			<td style="width: 25%;">
				<div class="input-group">
					<span class="input-group-addon">Quincena <strong>(Opcional)</strong></span>
					<?= $this->Form->select('quincena', $quincena, ['empty' => '--Seleccione--', 'class'=> 'form-control', 'label' => false, 'value' => $servicios->quincena]); ?>
				</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
					<?= $this->Html->link('Ir Atrás', ['action' => 'view', $requisicion], ['class'=> 'btn btn-danger btn-sm']); ?>
				</div>	
			</td>

			<td>
				<div class="form-group">
					<span class="input-group-btn"></span>
	    			<?= $this->Form->button('Actualizar', ['confirm' => __('Desea actualizar la requisicion?'), 'class'=>'btn btn-default btn-sm']); ?>
				</div>	
			</td>
		</tr>
	</table>

<?php echo $this->Form->end();?>