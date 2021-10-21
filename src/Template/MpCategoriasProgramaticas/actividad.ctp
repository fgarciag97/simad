<?php $this->assign('title', 'Categorias Programáticas'); ?>

<?= $this->Flash->render();?>

	<?= $this->Form->create(@$actividad, ['class'=>'well']);?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center" ><strong>Asociar Actividad a la Categoria Programatica</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

		<table class="table table-responsive" style="width: 10%; margin-left: 40%;">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon">N°</span>
						<?= $this->Form->input('actividad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required']); ?>
					</div>
				</td>
			</tr>
		</table>

		<table class="table table-responsive">
			<tr>
				<td><div id="" class="input-group">
						<span class="input-group-addon"> Denominacion</span>
						<?= $this->Form->input('denominacion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required']); ?>
					</div>
				</td>
		</tr>
	</table>

	<?= $this->Form->hidden('id_sector', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$s]); ?>
	<?= $this->Form->hidden('id_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$p]); ?>
	<?= $this->Form->hidden('id_sub_programa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'value' => @$sp]); ?>

	<table class="table table-responsive">
		<tr>
			<td>
				<?= $this->Form->button('Registrar', ['class'=>'btn btn-default pull-right']); ?>
			</td>
		</tr>
	</table>


	<table class="table table-responsive">
		
	<?php echo $this->Form->end();?>


	<div class="media-body well">
	         <!-- Table -->
		<table class="table">
		<thead>
	        <tr>
			    <th style="text-align: center;"><?= $this->Paginator->sort('actividad') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;"><?= $this->Paginator->sort('denominacion') ?> <i class='fa fa-arrow-down'></i></th>
			    <th style="text-align: center;">Acción</th>
			</tr>
		</thead>
	    
		    <?php if (isset($registros) && !empty($registros)): 
		    	foreach($registros as $reg){ 
		    ?>
			    <tr style="text-align: center;">
			        <td> <?= @$reg->actividad; ?> </td>
			        <td> <?= @$reg->denominacion; ?> </td>
			        <td>

			         	<?= $this->Form->postLink('Eliminar', ['action' => 'deleteactividad', $reg->id, $reg->id_sector, $reg->id_programa, $reg->id_sub_programa], ['confirm' => __('Desea eliminar la actividad?'), 'class' => 'btn btn-danger btn-xs']) ?>
			        </td>
			    </tr>
			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>
	  	</table>

	  	<table class="table table-responsive">
		  		<tr>
			    	<td>	<?= $this->Html->Link('Procesar', ['action' => 'index'], ['class' => 'btn btn-success pull-right']) ?>
			    	</td>
			    </tr>
		  	</table>
	  
	    <!--<div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers() ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>
	        <p>
	        	<?= $this->Paginator->counter(['format' => 'Pagina {{page}} de {{pages}}']) ?>
	        </p>

	    </div>-->
	</div>

	<br>

