<?php $this->assign('title', 'Politica Presupuestaria'); ?>

<?= $this->Html->css(['AdminLTE.min']) ?>

<?php if (@$status == 'procesado'){ ?>

	<?= $this->Form->create($forma2101, ['class'=>'well']); ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center" ><strong>Forma 2101 - Politica Presupuestaria</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td><div id="" class="input-group">
					<span class="input-group-addon">Año Fiscal</span>
					<?= $this->Form->input('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => @$data[0]['ano'], 'readonly']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Entidad Federal</span>
					<?= $this->Form->input('entidad_federal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$data[0]['entidad_federal'], 'readonly']); ?>
				</div>
			</td>
		</tr>
	</table>


	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon">Politica de Financiamiento</span>
				<?= $this->Form->input('politica_presupuestaria', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'value' => @$data[0]['politica_presupuestaria'], 'readonly']); ?>
			</td>
		</tr>

		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon">Politica de Gastos</span>
				<?= $this->Form->input('politica_gastos', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'rows' => '2', 'autocomplete' => 'off', 'value' => @$data[0]['politica_gastos'], 'readonly']); ?>
			</td>
		</tr>

		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon">Politica de Cobertura</span>
				<?= $this->Form->input('politica_cobertura', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'value' => @$data[0]['politica_cobertura'], 'readonly']); ?>
			</td>
		</tr>
	</table>
	
	<table class="table table-responsive">
		<tr>
			<td>
				<div class="input-group">
					<?= $this->Html->link(__('Editar'), ['action' => 'editar'], ['class'=>'btn btn-sm btn-warning pull-right']) ?> 	 	
				</div>
			</td>
		</tr>
	</table>

	<?php echo $this->Form->end();?>

<?php }else{ ?>

	<?= $this->Form->create($forma2101, ['class'=>'well']); ?>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th></th>
				<th class="text-center" ><strong>Forma 2101 - Politica Presupuestaria</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td><div id="" class="input-group">
					<span class="input-group-addon">Año Fiscal</span>
					<?= $this->Form->input('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly']); ?>
				</div>
			</td>
			<td><div id="" class="input-group">
					<span class="input-group-addon">Entidad Federal</span>
					<?= $this->Form->input('entidad_federal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => ENTIDAD_FEDERAL, 'readonly']); ?>
				</div>
			</td>
		</tr>
	</table>


	<table class="table table-responsive">
		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon">Politica de Financiamiento</span>
				<?= $this->Form->input('politica_presupuestaria', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
			</td>
		</tr>

		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon">Politica de Gastos</span>
				<?= $this->Form->input('politica_gastos', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'maxlength' => '50', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
			</td>
		</tr>

		<tr>
			<td><div id="" class="input-group">
				<span class="input-group-addon">Politica de Cobertura</span>
				<?= $this->Form->input('politica_cobertura', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'rows' => '2', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td>
			    <?= $this->Form->submit('Guardar',['class'=>'btn btn-success pull-right']);?>
			</td>
		</tr>
	</table>

	<?= $this->Form->end(); ?>
<?php } ?>

