<?php $this->assign('title', 'Crear Resolución'); ?>

	<?= $this->Form->create('MpResolucion', ['class'=>'well']);?>

	<table class="table table-responsive">

		<thead>
			<tr>
				<th></th>
				<th class="text-center"><strong>Crear Resolución</strong></th>
				<th></th>
			</tr>
		</thead>
	</table>

	<?= $this->Form->hidden('ano', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '4', 'value' => ANO_FISCAL, 'readonly']); ?>

	<table class="table table-responsive">
		<tr>	
			<td><div id="" class="input-group">
					<span class="input-group-addon">N° Resolución</span>
						<?= $this->Form->input('n_resolucion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'onKeyPress' => 'return soloNum(event);']); ?>
				</div>
			</td>

			<td><div id="" class="input-group">
					<span class="input-group-addon">Fecha de Resolucion</span>
						<input type="date" name="fecha">
					</div>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>	
			<td><div id="" class="input-group">
					<span class="input-group-addon">Descripcion</span>
						<?= $this->Form->textarea('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onkeyup' => 'mayus(this);', 'rows' => 2]); ?>
				</div>
			</td>
		</tr>

	</table>

	<table class="table table-responsive">
		<tr>	
			<td><div class="form-group">
				    <div class="input-group">
					    <span class="input-group-btn">
					    	
					    	<?= $this->Form->submit('Crear Resolución', ['class'=>'btn btn-default pull-right']); ?>
				    
				    </div>
				</div>
			</td>
		</tr>
	</table>

		
	<?php echo $this->Form->end();?>


	<div class="media-body well">
	         <!-- Table -->
		<table class="table table-responsive" style="width: 80%; margin-left: 7%;">
			<thead>
		        <tr class="text-center">
				    <th class="text-center"><?= $this->Paginator->sort('n_resolucion', 'N°') ?> <i class='fa fa-arrow-down'></i></th>
				    <th class="text-center"><?= $this->Paginator->sort('denominacion', 'Descripcion') ?> <i class='fa fa-arrow-down'></i></th>
				    <th class="text-center"> Acción </th>
				    <th class="text-center"> Reporte </th>
				</tr>
			</thead>
	    
		    <?php if (isset($registros) && !empty($registros)): 
		    	foreach($registros as $reg){ 
		    ?>
			    <tr style=" width: 50%;">
			        <td class="text-center"> <?= $reg->n_resolucion; ?> </td>
			        <td class="text-center"> <?= $reg->denominacion; ?> </td>
			        <td class="text-center" style="width: 40%;"> 
			        	<?php 
							//echo $this->Html->link("asdasd", array('action' => 'categorias', @$reg->n_resolucion), array('tabajuste' => '-1', 'escape' => false, 'class' => 'btn btn-sm btn-primary')); 

							echo $this->Html->link("Utilizar", array('action' => 'opcion', @$reg->n_resolucion), array('tabajuste' => '-1', 'escape' => false, 'class' => 'btn btn-sm btn-success')); 

							//echo $this->Html->link("Incremento/Disminucion", array('action' => 'ajuste', @$reg->n_resolucion), array('tabajuste' => '-1', 'escape' => false, 'class' => 'btn btn-sm btn-danger')); 
						?>
			        </td>
			        <td class="text-center">
			        	<?php 
							/*echo $this->Html->link("<i class='fa fa-file-pdf-o'> </i> Analitico de Disponibilidad",array('action' => 'Reporte', @$reg->n_resolucion, "PDF"), array('tabajuste' => '-1', 'escape' => false, 'class' => 'btn btn-sm btn-default', 'target' => '_blank'));*/ 

							echo $this->Html->link("<i class='fa fa-file-pdf-o'> </i> Reporte Resolucion",array('action' => 'PresupuestoResolucion', @$reg->n_resolucion, "PDF"), array('tabajuste' => '-1', 'escape' => false, 'class' => 'btn btn-sm btn-default', 'target' => '_blank'));
						?>
			        </td>
			    </tr>

			    
		    <?php } else: ?>
			    <tr>
			    	<td colspan="7">No existen registros</td>
			    </tr>
		    <?php endif; ?>

	  	</table>

	    <div class="paginator">
	        <ul class="pagination">
	            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
	            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
	            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
	            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
	            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
	        </ul>
	    </div>

	    <div></div>
	</div>
