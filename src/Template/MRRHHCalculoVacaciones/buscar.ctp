<?php $this->assign('title', 'Personal'); ?>

	<?= $this->Form->create('MRRHHCalculoVacaciones', array('class'=>'well', 'type' => 'post', 'url' => array('controller' => 'MRRHHCalculoVacaciones', 'action' => 'buscar'))) ?>

		<legend bgcolor="lightblue" style="text-align: center;"> Búsqueda rápida </legend>
		
		<div id="" class="input-group">
			<span class="input-group-addon">Cedula</span>
			<?= $this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'maxlength' => '10', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
		</div>

		<br>

		<div class="form-group">
		    <div class="input-group">
			    <span class="input-group-btn">
			    	<?= $this->Form->button('Limpiar', ['type' => 'reset', 'class'=> 'btn btn-danger']); ?>
			    </span>
			    	<?= $this->Form->button('Buscar', ['class'=>'btn btn-success pull-right']); ?>
		    </div>
		</div>

	<?php echo $this->Form->end();?>


		<div class="well">

		         <!-- Table -->
			<table class="table">
		        <tr style="background-color: #a22818; color: white; text-align: center;">
				    <td><?= $this->Paginator->sort('cedula') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('apellidos') ?> <i class='fa fa-arrow-down'></i></td>
				    <td><?= $this->Paginator->sort('nombres') ?> <i class='fa fa-arrow-down'></i></td>
				    <td>Acción</td>
				</tr>
		    
			    <?php if (isset($activos) && !empty($activos)): 
			    	foreach($activos as $reg){ ?>
				    <tr style="text-align: center;">
				        <td> <?= $reg->cedula; ?> </td>
				        <td> <?= $reg->apellidos; ?> </td>
				        <td> <?= $reg->nombres; ?> </td>
				        <td>
				         	<?= $this->Html->link(__('Buscar'), ['action' => 'buscar', $reg->cedula], ['class' => 'btn btn-danger btn-sm']) ?>
				        </td>
				    </tr>
				    
			    <?php } else: ?>
				    <tr>
				    	<td colspan="7">No existen registros</td>
				    </tr>
			    <?php endif; ?>

			    	<br>

				    <tr>
				        <td> </td>
				        <td> </td>
				        <td>  </td>
				        <td> </td>
				    </tr>
		  	</table>

		    <div class="paginator">
		        <ul class="pagination">
		            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
		            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
		            <?= $this->Paginator->numbers(['before' => ' ', 'after' => ' ']) ?>
		            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
		            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
		        </ul>
		        <p>
		        	<?= $this->Paginator->counter(['format' => 'Pagina {{page}} de {{pages}}']) ?>
		        </p>
		    </div>
		</div>
