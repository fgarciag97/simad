<?php $this->assign('title', 'Año Fiscal'); ?>


	<?= $this->Form->create($ano_fiscal, ['class'=>'well']);?>

		<legend bgcolor="lightblue" style="text-align: center;"> Año Fiscal</legend>
		
		<div id="" class="input-group">
			<span class="input-group-addon">Año Fiscal actual</span>
			<?= $this->Form->input('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly']); ?>
		</div>

		<br>

		<div id="" class="input-group">
			<span class="input-group-addon">Nuevo Año Fiscal</span>
				<?= $this->Form->input('ano_fiscal', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '5', 'value' => ANO_FISCAL+1]); ?>
		</div>

		<br>

		<div class="form-group">
		    <div class="input-group">
			    <span class="input-group-btn">
			    	<?= $this->Form->button('Limpiar Formulario', ['type' => 'reset', 'class'=> 'btn btn-danger']); ?>
			    </span>
			    	<?= $this->Form->submit('Actualizar', ['class'=>'btn btn-success pull-right']); ?>
		    </div>
		</div>
	<?php echo $this->Form->end();?>

